<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use App\Models\tblclients;
use App\Models\services;
use App\Models\tblinvoices;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class admin extends Controller
{
    public function adminlogin()
    {
        return view("adminlogin");
    }

    public function alogin(request $req)
    {


        $result = DB::table('admin')
            ->where('username', $req->username)
            ->get();

        $res = json_decode($result, true);

        if (sizeof($res) == 0) {
            $req->session()->flash('error', 'Username does not exist. Please register yourself first');
            echo "Username Does not Exist.";
            return redirect('login');
        } else {
            date_default_timezone_set('Asia/Kolkata');
            $time = date('h:i:s');
            $date = date('d-m-yy');
            DB::table('adminlogin')
                ->insert(
                    [
                        "username" => $req->username,
                        "time" => "$time",
                        "date" => "$date"
                    ]
                );

            $encrypted_password = $result[0]->password;

            if ($encrypted_password == $req->password) {


                echo "You are logged in Successfully";
                $req->session()->put('admin_user', $result[0]->username);

                return redirect('dashboard');
            } else {
                $req->session()->flash('error', 'Password Incorrect!!!');
                echo "Username Does not Exist.";
                return view('elogin');
            }
        }
    }

    public function add_services()
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        return view("adminservice");
    }

    public function addservices(request $req)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $creationdate = date('y-m-d h:i:s');
        DB::table('services')
            ->insert(
                [
                    "servicename" => $req->sname,
                    "serviceprice" => $req->sprice,
                    "creationdate" => $creationdate
                ]
            );
        return view("adminservice");
    }

    public function add_client()
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }

        return view("addclient");
    }

    public function aclient(request $req)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }

        $acctid = mt_rand(100000000, 999999999);
        $creationdate = date('y-m-d h:i:s');
        DB::table('tblclient')
            ->insert(
                [
                    "AccountID" => $acctid,
                    "AccountType" => $req->accounttype,
                    "ContactName" => $req->cname,
                    "CompanyName" => $req->comname,
                    "Address" => $req->address,
                    "City" => $req->city,
                    "State" => $req->state,
                    "ZipCode" => $req->zcode,
                    "Workphnumber" => $req->wphnumber,
                    "Cellphnumber" => $req->cellphnumber,
                    "Otherphnumber" => $req->ophnumber,
                    "Email" => $req->email,
                    "WebsiteAddress" => $req->websiteadd,
                    "Notes" => $req->notes,
                    "Password" => $req->password,
                    "creationdate" => $creationdate

                ]
            );
        return view("addclient");
    }

    public function mclient()
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $data = DB::table('tblclient')->get();
        return view("manageclient", ['data' => $data]);
    }

    public function eclient($id)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $data = tblclients::find($id);
        return view("editclient", ['data' => $data]);
    }

    public function uclient(request $req)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $creationdate = date('y-m-d h:i:s');
        $datas = tblclients::find($req->id);


        $datas->AccountType = $req->accounttype;
        $datas->ContactName = $req->cname;

        $datas->CompanyName = $req->comname;
        $datas->Address = $req->address;
        $datas->City = $req->city;
        $datas->State = $req->state;
        $datas->ZipCode = $req->zcode;
        $datas->Workphnumber = $req->wphnumber;
        $datas->Cellphnumber = $req->cellphnumber;
        $datas->Otherphnumber = $req->ophnumber;
        $datas->Email = $req->email;
        $datas->WebsiteAddress == $req->websiteadd;
        $datas->Notes = $req->notes;
        $datas->creationdate = $creationdate;
        $datas->save();

        return redirect("manage-client");
    }


    public function eclients($id)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $data = DB::table('services')->get();
        return view("addclientservice", ['data' => $data], compact("id"));
    }

    public function addservicess(request $req)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $checkbox1 = $req->sids;
        $billing = mt_rand(100000000, 999999999);
        date_default_timezone_set('Asia/Kolkata');
        $postingdate = date('y-m-d h:i:s');
        foreach ($checkbox1 as $chk1) {
            DB::table('tblinvoice')
                ->insert(
                    [
                        "userid" => $req->uid,
                        "serviceid" => $chk1,
                        "billingid" => $billing,
                        "postingdate" => $postingdate


                    ]
                );
        }
        return redirect("/invoicess");
    }


    public function invoices()
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $data = DB::table('tblclient')->join('tblinvoice', 'tblclient.ID', '=', 'tblinvoice.userid')->orderBy('tblclient.ID', 'ASC')->groupBy('tblinvoice.userid')->get();
        return view("invoices", compact("data"));
    }

    public function view($id)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $data = DB::table('tblinvoice')->where('tblinvoice.billingid', $id)->join('tblclient', 'tblclient.ID', '=', 'tblinvoice.userid')
            ->groupBy('tblinvoice.userid')->first();
        $print = DB::table('tblinvoice')->where('tblinvoice.billingid', $id)->join('services', 'services.id', '=', 'tblinvoice.serviceid')->get();

        $totalval = 0;
        foreach ($print as $grandtotal) {

            $totalval += $grandtotal->serviceprice;
        }


        return view("view", compact("data", "print", "totalval"));
    }

    public function aviews($id)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $data = DB::table('tblclient')->join('tblinvoice', 'tblclient.ID', '=', 'tblinvoice.userid')
            ->where('tblclient.ID', $id)->groupBy('tblinvoice.userid')->first();

        $print = DB::table('tblinvoice')->where('tblinvoice.userid', $id)->join('services', 'services.id', '=', 'tblinvoice.serviceid')->get();

        $totalval = 0;
        foreach ($print as $grandtotal) {

            $totalval += $grandtotal->serviceprice;
        }

        return view("view", compact("data", "print", "totalval"));
    }
    public function mservice()
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $data = DB::table('services')->get();
        return view("manageservice", compact("data"));
    }

    public function eservice($id)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $data = DB::table('services')->where("id", $id)->first();
        return view("/updateservice", compact("data"));
    }

    public function uservice(request $req)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $data = services::find($req->id);
        $data->servicename = $req->sname;
        $data->serviceprice = $req->price;

        $data->save();

        return redirect("manage-service");
    }

    public function search(request $req)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $invoice_no = $req->billingid;
        $data = DB::table("tblinvoice")->where("billingid", $req->billingid)->join('tblclient', 'tblclient.ID', '=', 'tblinvoice.userid')->orderBy('tblclient.ID', 'ASC')->groupBy('tblinvoice.userid')->get();

        return view("search", compact("data", "invoice_no"));
    }


    public function detail()
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $data = tblclients::count();

        $print = services::count();
        $pre = tblinvoices::whereDate("postingdate", "=", date("y-m-d", time()))->join("services", "services.id", "=", "tblinvoice.serviceid")->get();

        $totalsell = 0;
        foreach ($pre as $tsell) {
            $totalsell += $tsell["serviceprice"];
        }

        $ypre = tblinvoices::whereDate("postingdate", "=", date("y-m-d", time() - 60 * 60 * 24))->join("services", "services.id", "=", "tblinvoice.serviceid")->get();

        $ysell = 0;

        foreach ($ypre as $ysells) {
            $ysell += $ysells["serviceprice"];
        }

    

        $date = Carbon::now()->subDays(7);  
            
        $spre = tblinvoices::whereDate("postingdate", ">=" ,$date)->join("services", "services.id", "=", "tblinvoice.serviceid")->get();

      

        $sesell = 0;

        foreach ($spre as $ssells) {
            $sesell += $ssells["serviceprice"];
        }
       
        

        $date1 = Carbon::now()->subDays(30);    
     
        $totalsells = tblinvoices::whereDate("postingdate", ">=", $date1)->join("services", "services.id", "=", "tblinvoice.serviceid")->get();

         $totalmonthofsell = 0;

        foreach ($totalsells as $totalsel) {
            $totalmonthofsell += $totalsel["serviceprice"];
        }

      
       return view("dashboard", compact("data", "print", "totalsell", "ysell", "sesell", "totalmonthofsell"));
    }

    public function changepassword(request $req)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        return view("/changepassword");
    }
    public function changepasswords(request $req)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $data = DB::table("admin")->where("username", session()->get("admin_user"))->first();
        $result = $this->validate($req, [
            'newpassword' => 'required',
            'confirmpassword' => 'required|same:newpassword',
        ]);


        if ($data == true) {

            if ($data->password == $req->currentpassword) {
                DB::table("admin")->where("username", $data->username)->update([
                    "password" => $req->confirmpassword
                ]);
                $msg = "Password Updated Successfully";
                return view("changepassword", compact("msg"));
            } else {
                $msg = "Password Updated Not Successfully";
                return view("changepassword", compact("msg"));
            }
        } else {

            $msg = "Password Updated Not Successfully";
            return view("changepassword", compact("msg"));
        }
    }


    public function adminprofile()
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        $data = DB::table("admin")->where("username", session()->get("admin_user"))->first();


        return view("adminprofile", compact("data"));
    }


    public function uprofile(request $req)
    {
        if (!session()->get("admin_user")) {
            return redirect("/");
        }
        DB::table("admin")->where("username", $req->username)->update([
            "mobile" => $req->mobilenumber,
            "email" => $req->email
        ]);

        return redirect("/admin-profile");
    }

    public function result(request $req)
    {
        echo $req->password . "<Br><Br>";


        $hashed = Hash::make($req->password);


        if (Hash::check('123456', $hashed)) {
            echo "true";
            return view("ab.abc");
       
        } else {
            echo "False";
        }

        // $abc = "12345";
        // if (Hash::needsRehash($abc)) {
        //     $abc = Hash::make($req->password);
        //     echo $abc;
        // } else {
        //     echo "Not Rehash";
        // }
    }
}

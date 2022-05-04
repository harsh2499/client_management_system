<?php

namespace App\Http\Controllers;

use App\Models\tblclients;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class client extends Controller
{
    public function clientlogin()
    {
        return view("clientlogin");
    }

    public function clogins(request $req)
    {
        $result = DB::table('tblclient')
            ->where('Email', $req->email)
            ->get();

        $res = json_decode($result, true);

        if (sizeof($res) == 0) {
            $req->session()->flash('error', 'Email does not exist. Please register yourself first');
            echo "Email Does not Exist.";
            return view('clientlogin');
        } else {
            date_default_timezone_set('Asia/Kolkata');
            $time = date('h:i:s');
            $date = date('d-m-yy');
            DB::table('clientlogin')
                ->insert(
                    [
                        "email" => $req->email,
                        "time" => "$time",
                        "date" => "$date"
                    ]
                );

            $encrypted_password = $result[0]->Password;

          
            if($encrypted_password == $req->password) {

               

                echo "You are logged in Successfully";
                $req->session()->put('cname', $result[0]->CompanyName);
                $req->session()->put('cemail', $result[0]->Email);
               
                return redirect('clientdashboard');
            } else {
                $req->session()->flash('error', 'Password Incorrect!!!');
                echo "Email Does not Exist.";
                return view('clientlogin');
               
            }
        }
    }


    public function cinvoices()
    {
        if(!session()->get("cname") && !session()->get("cemail"))
        {
            return redirect("/");
        }
        $data=DB::table('tblclient')->join('tblinvoice', 'tblclient.ID', '=', 'tblinvoice.userid')->orderBy('tblclient.ID', 'ASC')->groupBy('tblinvoice.userid')->get();
     return view("cinvoices",compact("data"));
    }

    public function cview($id)
    {

        $data=DB::table('tblinvoice')->where('tblinvoice.billingid',$id)->join('tblclient', 'tblclient.ID', '=', 'tblinvoice.userid')
        ->groupBy('tblinvoice.userid')->first();
        $print=DB::table('tblinvoice')->where('tblinvoice.billingid',$id)->join('services', 'services.id', '=', 'tblinvoice.serviceid')->get();




        $totalval=0;
        foreach($print as $grandtotal)
        {

            $totalval+=$grandtotal->serviceprice;
        }
        
  
  
        return view("cview",compact("data","print","totalval"));
    
}

    public function csearch(request $req)
    {
        if(!session()->get("cname") && !session()->get("cemail"))
        {
            return redirect("/");
        }
        $invoice_no=$req->billingid;
        $data=DB::table("tblinvoice")->where("billingid",$req->billingid)->join('tblclient', 'tblclient.ID', '=', 'tblinvoice.userid')->orderBy('tblclient.ID', 'ASC')->groupBy('tblinvoice.userid')->get();
        

       
        return view("csearch",compact("data","invoice_no"));
    }



    public function cviews($id)
    {
        if(!session()->get("cname") && !session()->get("cemail"))
        {
            return redirect("/");
        }
        $data=DB::table('tblclient')->join('tblinvoice', 'tblclient.ID', '=', 'tblinvoice.userid')
        ->where('tblclient.ID',$id)->groupBy('tblinvoice.userid')->first();
     
        $print=DB::table('tblinvoice')->where('tblinvoice.userid',$id)->join('services', 'services.id', '=', 'tblinvoice.serviceid')->get();

        $totalval=0;
        foreach($print as $grandtotal)
        {

            $totalval+=$grandtotal->serviceprice;
        }
        
        return view("cview",compact("data","print","totalval"));
    }

    public function cpassword()
    {
        if(!session()->get("cname") && !session()->get("cemail"))
        {
            return redirect("/");
        }
        return view("clientpassword");
    }

    public function cpass(request $req)
    {

        if(!session()->get("cname") && !session()->get("cemail"))
        {
            return redirect("/");
        }
        $data=DB::table("tblclient")->where("Email",session()->get("cemail"))->first();
        
        $result=$this->validate($req, [
            'newpassword'=>'required',
            'confirmpassword'=>'required|same:newpassword',
         ]);

        if($data==true)
        {
            if($data->Password !==$req->changepassword)
            {
             DB::table("tblclient")->where("Email",$data->Email)->update([
                "Password"=>$req->confirmpassword
              ]);
              $msg="Password Updated Successfully";
              return view("clientpassword",compact("msg"));
            }
        }
        else
        {
           
            $msg="Password Updated Not Successfully";
            return view("clientpassword",compact("msg"));
        }        
        
    }

    public function clientprofile()
    {
        if(!session()->get("cname") && !session()->get("cemail"))
        {
            return redirect("/");
        }
        $data=DB::table("tblclient")->where("Email",session()->get("cemail"))->first();

        return view("eclient",compact("data"));
    }

    public function uclient(request $req)
    {
        if(!session()->get("cname") && !session()->get("cemail"))
        {
            return redirect("/");
        }
        $creationdate=date('y-m-d h:i:s');
        $datas=tblclients::find($req->id);
       
        
               $datas->AccountType=$req->accounttype;
               $datas->ContactName=$req->cname;

               $datas->CompanyName=$req->comname;
               $datas->Address=$req->address;
               $datas->City=$req->city;
               $datas->State=$req->state;
               $datas->ZipCode=$req->zcode;
               $datas->Workphnumber=$req->wphnumber;
               $datas->Cellphnumber=$req->cellphnumber;
               $datas->Otherphnumber=$req->ophnumber;
               $datas->Email=$req->email;
               $datas->WebsiteAddress==$req->websiteadd;
               $datas->Notes=$req->notes;
                $datas->creationdate=$creationdate;
               $datas->save();
               return redirect("client-profile");
    }
}

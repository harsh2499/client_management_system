<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get("adminlogin", [admin::class, "adminlogin"]);

Route::get("clientlogin", [client::class, "clientlogin"]);

Route::post("login", [admin::class, "alogin"]);

Route::get("dashboard", function () {
    if (!session()->get("admin_user")) {
        return redirect("/");
    } else {
        return view("dashboard");
    }
});

Route::get("/dashboard", [admin::class, "detail"]);

Route::get("add-services", [admin::class, "add_services"]);

Route::post("addservices", [admin::class, "addservices"]);

Route::get("add-client", [admin::class, "add_client"]);

Route::post("aclient", [admin::class, "aclient"]);

Route::get("manage-client", [admin::class, "mclient"]);

Route::get("/edit/{id}", [admin::class, "eclient"]);

Route::post("/updateclient", [admin::class, "uclient"]);

Route::get("/add-client-services/{id}", [admin::class, "eclients"]);

Route::post("/adds", [admin::class, "addservicess"]);

Route::get("/invoicess", [admin::class, "invoices"]);

Route::get("/view/{id}", [admin::class, "view"]);


Route::get("/manage-service", [admin::class, "mservice"]);


Route::get("/eservice/{id}", [admin::class, "eservice"]);


Route::post("/uservice", [admin::class, "uservice"]);

Route::get("/search-invoices", [admin::class, "search"]);

Route::post("/search-invoices", [admin::class, "search"]);


Route::get("/logout", function () {
    if (session()->has('admin_user')) {
        session()->pull('admin_user');
    }
    return redirect('/');
});


Route::post("/clogin", [client::class, "clogins"]);

Route::get("/clientdashboard", function () {
    if (!session()->get("cname") && !session()->get("cemail")) {
        return redirect("/");
    } else {
        return view("/clientdashboard");
    }
});

Route::get("/clientinvoices", [client::class, "cinvoices"]);

Route::get("/cview/{id}", [client::class, "cview"]);

Route::get("/csearch-invoices", [client::class, "csearch"]);


Route::post("/csearch-invoices", [client::class, "csearch"]);

Route::get("/log", function () {
    if (session()->has('cname') && session()->has('cemail')) {
        session()->pull('cname');
        session()->pull('cemail');
    }
    return redirect('/');
});


Route::get("/cviews/{id}", [client::class, "cviews"]);

Route::get("/aviews/{id}", [admin::class, "aviews"]);


Route::get("/change-password", [admin::class, "changepassword"]);

Route::post("/change-passwords", [admin::class, "changepasswords"]);

Route::get("/admin-profile", [admin::class, "adminprofile"]);

Route::post("/uprofile", [admin::class, "uprofile"]);

Route::get("/cpassword", [client::class, "cpassword"]);

Route::post("/cpass", [client::class, "cpass"]);

Route::get("/client-profile", [client::class, "clientprofile"]);

Route::post("/uclient", [client::class, "uclient"]);



Route::view("check", "checkpassword");


Route::post("check", [admin::class, "result"]);

Route::get('/abc/add', function () {
    return view('ab.bc.abc');
});

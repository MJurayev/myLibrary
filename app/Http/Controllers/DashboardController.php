<?php 
namespace App\Http\Controllers;

Use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController{

    public function client(){
        return View('client.pages.dashboard');
    }
}
?>
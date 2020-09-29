<?php 
namespace App\Http\Controllers\Admin;

Use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       /* $this->middleware('auth');*/
    }
    public function admin(){
        return View('admin.pages.dashboard');
    }
}
?>

<?php

namespace App\Http\Controllers\Admin;

Use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Users;

class UsersController extends BaseController
{
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
        
        $users = Users::paginate(10);
        return View('admin.pages.users', ['users'=>$users]);
    }
public function add(Request $req){
       
        $user = new Users();

        $user->login = $req->login;
        $user->email = $req->email;
        $user->age = $req->age;
        $user->phone = $req->phone;
        $user->password = md5($req->password);
        $user->save();

        if($user)
        {
            $req->session()->flash('message', "Foydalanuvchi muvaffaqiyatli qo'shildi");
            return redirect("/admin/users");
        }
        else{
            $req->session()->flash('message', "Foydalanuvchi qo'shishda xato");
            return redirect("/admin/users");
        }
        
    //     $req->session()->flush('success', "Foydalanuvchi muvaffaqiyatli qo'shildi!!!");
    // return redirect("/admin/users?page=1");
}
public function delete( $id, Request $req){
    $user = Users::findOrFail($id);
    $user->delete();
    
        if($user)
        {
            $req->session()->flash('message', "Foydalanuvchi muvaffaqiyatli o'chirildi");
            return redirect("/admin/users");
        }
        else{
            $req->session()->flash('message', "Foydalanuvchi o'chirishda xato xato");
            return redirect("/admin/users");
        }
}
public function edit($id, Request $req){

    $user = Users::findOrFail($id);
    $user->login = $req->login;
    $user->email = $req->email;
    $user->age = $req->age;
    $user->phone = $req->phone;
    $user->password = md5($req->password);
    $user->update();
    if($user)
        {
            $req->session()->flash('message', "Foydalanuvchi muvaffaqiyatli yangilandi");
            return redirect("/admin/users");
        }
        else{
            $req->session()->flash('message', "Foydalanuvchi yangilashda xato");
            return redirect("/admin/users");
        }
}


}

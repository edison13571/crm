<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function create()
   {
       return view('login');
   }

   public function store(Request $request)
   {
      $this->validate($request, [
          'name' => 'required',
          'password' => 'required'
      ]);

      $credentials = [
           'name'    => $request->name,
           'password' =>$request->password,
       ];

       if (Auth::attempt($credentials)) {
           session()->flash('success', '登录成功！');
           return redirect('index');
       } else {
           session()->flash('danger', '很抱歉，用户名或密码错误');
           return redirect()->back();
       }

       return;
   }

   public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('/login');
    }
}

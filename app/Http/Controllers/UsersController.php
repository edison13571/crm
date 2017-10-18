<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UsersController extends Controller
{
    public function __construct()
        {
          $this->middleware('auth');
      }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $users=DB::table('users')->paginate(15);
      return view('user.index',compact('users'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('user.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->validate($request,[
      'name'=>'required',
    ]);
    $user=User::create([
      'name'=>$request->name,
      'phone'=>$request->phone,
      'email'=>$request->email
    ]);
    session()->flash('success', '用户创建成功');
    $users=DB::table('users')->paginate(15);
    return view('user.index',compact('users'));
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\users  $users
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $user=User::findOrFail($id);
    return view('user.show',compact('user'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\users  $users
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $user=User::findOrFail($id);
    $this->authorize('update', $user);
    return view('user.edit',compact('user'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\users  $users
   * @return \Illuminate\Http\Response
   */
  public function update($id,Request $request)
  {
    $this->validate($request,[
      'name'=>'required',
    ]);
    $user = User::findOrFail($id);
    $user->update([
      'name'=>$request->name,
      'phone'=>$request->phone,
      'email'=>$request->email
    ]);
    $users=DB::table('users')->paginate(15);
    return view('user.index',compact('users'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\users  $users
   * @return \Illuminate\Http\Response
   */
  public function destroy(users $users)
  {
      //
  }
}

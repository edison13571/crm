<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;
use App\Partners;
use DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=DB::table('customers')->paginate(15);
        return view('customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $partners=Partners::all();
        return view('customer.create',compact('partners'));
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
        'phone'=>'required'
      ]);
      $customer=Customers::create([
        'name'=>$request->name,
        'en_name'=>$request->en_name,
        'sex'=>$request->sex,
        'id_number'=>$request->id_number,
        'birthday'=>$request->birthday,
        'school'=>$request->school,
        'grade'=>$request->grade,
        'major_now'=>$request->major_now,
        'major_intention'=>$request->major_intention,
        'school_intention'=>$request->school_intention,
        'country_intention'=>$request->country_intention,
        'status_intention'=>$request->status_intention,
        'saler'=>$request->saler,
        'partner'=>$request->partner,
        'city'=>$request->city,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'wechat'=>$request->wechat,
        'qq'=>$request->qq,
        'postcode'=>$request->postcode,
        'address'=>$request->address,
        'creater_id'=>$request->creater_id,
        'remark'=>$request->remark
      ]);
      $customers=Customers::all();
      return view('customer.index',compact('customers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $customer=Customers::findOrFail($id);
      $partners=Partners::all();
      return view('customer.show',compact('customer','partners'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $customer=Customers::findOrFail($id);
      $partners=Partners::all();
      return view('customer.edit',compact('customer','partners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
      $this->validate($request,[
        'name'=>'required',
        'phone'=>'required'
      ]);
      $customer = Customers::findOrFail($id);
      $customer->update([
        'name'=>$request->name,
        'en_name'=>$request->en_name,
        'sex'=>$request->sex,
        'id_number'=>$request->id_number,
        'birthday'=>$request->birthday,
        'school'=>$request->school,
        'grade'=>$request->grade,
        'major_now'=>$request->major_now,
        'major_intention'=>$request->major_intention,
        'school_intention'=>$request->school_intention,
        'country_intention'=>$request->country_intention,
        'status_intention'=>$request->status_intention,
        'saler'=>$request->saler,
        'partner'=>$request->partner,
        'city'=>$request->city,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'wechat'=>$request->wechat,
        'qq'=>$request->qq,
        'postcode'=>$request->postcode,
        'address'=>$request->address,
        'remark'=>$request->remark
      ]);
      $customers=DB::table('customers')->paginate(15);
      return view('customer.index',compact('customers'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers)
    {
        //
    }
}

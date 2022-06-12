<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Setting::first();
        if(empty($data)){
            $data=new Setting();
            $data->title="Settings";
            $data->save();
            $data=Setting::first();
        }
        return view('admin.settings.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function references()
    {
        $data=Setting::first()->references;

        return view('home.references'
        ,['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contactus(Request $request)
    {   $data=Setting::first()->contact;
        return view('home.contactus'  ,['data'=>$data]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $id =$request->input('id');
        $data = Setting::find($id);
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->company=$request->input('company');
        $data->address=$request->input('address');
        $data->phone=$request->input('phone');
        $data->fax=$request->input('fax');
        $data->email=$request->input('email');
        $data->status=$request->input('status');
        $data->smtpserver=$request->input('smtpserver');
        $data->smtpemail=$request->input('smtpemail');
        $data->smtppassword=$request->input('smtppassword');
        $data->smtpport=$request->input('smtpport');
        $data->facebook=$request->input('facebook');
        $data->instagram=$request->input('instagram');


        $data->address=$request->input('adress');
        $data->references=$request->input('references');
        $data->contact=$request->input('contact');
        $data->aboutus=$request->input('aboutus');
        $data->save();
        return redirect(route('admin.settings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}

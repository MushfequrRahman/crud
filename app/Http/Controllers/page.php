<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class page extends Controller
{
    public function index()
    {
        echo "Hello World";
    }
    public function profile()
    {
        return view("profile");
    }
    public function project()
    {
        return view("project");
    }
    public function insert_form()
    {
        return view("insert_form");
    }
    public function user_create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:students',
            'name' => 'required|string|max:50',

        ]);

        if ($validator->fails()) {
            //Session::flash('error', $validator->messages()->first());
            //return redirect()->back()->withInput();
            //return redirect()->route('insert_form')->with('error', 'Error');
            return redirect()->route('insert_form')->withErrors($validator)->withInput();
        } else {
            $name = $request->input('name');
            $email = $request->input('email');
            $mobile = $request->input('mobile');
            $status = $request->input('status');
            $data = array("name" => $name, "email" => $email, "mobile" => $mobile, "status" => $status, "created_at" => Now(), "updated_at" => Now());
            DB::table('students')->insert($data);
            // echo "Record inserted successfully.<br/>";
            // echo '<a href = "/registration">Click Here</a> to go back.';
            return redirect()->route('insert_form')->with('success', 'Successfully Registered');
        }
    }
}

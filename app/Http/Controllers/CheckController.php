<?php

namespace App\Http\Controllers;
use App\check_ins;
use App\users;
use App\User;
use Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Requests\UserRequest;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * FROM users ORDER BY id ASC');
        
        return view('check_in.view',compact(array('users')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        $email = $data['email'];
        $temp = $data['temp'];
        if($temp <35.5 || $temp>37.2) {
            return redirect()->back()->with('danger','The temperature is not normal!!');
        }
        $check_userEmail = User::where('email', '=', Input::get('email'))->first();
        if ($check_userEmail == true) {
             $check_ins = new check_ins([
                
                'student_email' => $data['email'],
                'temperature' => $temp,
                //'password' => Hash::make($data['password'])
                
            ]);
            $check_ins ->save();
            return redirect()->back()->with('success','The check in was successfully updated!!');
        } else {
            return redirect()->back()->with('danger','The user email does not exist!!');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id.l
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

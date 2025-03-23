<?php

namespace App\Http\Controllers;
use App\users;
use App\User;
use Illuminate\Http\Request;
//use App\Http\Controllers\Session; 
use Illuminate\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.create'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $request)
    {
        $this-> Validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        $user_email = $data['user_role'];
        if ($user_email!="") {
             $users = new users([
                'name' => $data['name'],
                'gender' => $data['gender'],
                'email' => $data['email'],
                'user_role' => $data['user_role'],
                'password' => Hash::make($data['password'])
                
            ]);
            $users ->save();
        } else {
            $users = new users([
                'id' => $data['id'],
                'name' => $data['name'],
                 'lastname' => $data['lastname'],
                'gender' => $data['gender'],
                'email' => $data['email'],
                 'address' => $data['address'],
                'user_role' => "student",
                'password' => Hash::make($data['password'])
                
            ]);
            $users ->save();
        }
        
       
            return redirect()->back()->with('success','user successfully added!!');
           
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
    public function edit( $id)
    {
        $users = DB::select('select * from users where id=?',[$id]);
        return view('users.edit', ['users'=>$users]);
    
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->get('name');
        $car_model = $request->get('car_model');
        $car_make = $request->get('car_make');
        $car_plate = $request->get('car_plate');
        $email = $request->get('email');

        $users = DB::update('update users set name=?,car_model=?,car_make=?,car_plate=?, email=? where id=?',[$name,$car_model,$car_make,$car_plate,$email,$id]);

        if($users){
            $movePage = redirect('ManageUser.manageUser')->with('success','User has been updated');
        }else{
            $movePage = redirect('edit'.$id)->with('danger','Error update in updating, Please try again'); 
        }
            return $movePage;
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
       //
    }
   }


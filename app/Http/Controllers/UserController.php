<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::all();
        return view('index',compact('users'));
    }
    public function emp()
    {
        //
        
        $users=User::all();
        return view('users.employee',compact('users'));
    }
    

    function checklogin(Request $request)
    {
        
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|alphaNum|min:5'
        ]);
        
        $user_data=array(
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
            
        );
        if(Auth::attempt($user_data))
        {
            if(Auth::user()->role == "admin" )
            {
                return redirect('admin');
            }
            elseif(Auth::user()->role == "employee") {
                return redirect('employee');
            }
            elseif(Auth::user()->role == "customer"){
                return redirect('customer');
            }
        }else
        {
            return back()->with('error','wrong login details');
        }

       

        
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'gender'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'password'=>'required|alphaNum|min:5',
            
        ]);
       // User::create($request->all());
       User::create([
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'gender'=>$request->input('gender'),
        'address'=>$request->input('address'),
        'mobile'=>$request->input('mobile'),
        'role'=>'customer',
         
        'password'=>Hash::make($request->input('password')), 
        
       ]);
        return redirect('customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('users3.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'gender'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'password'=>'required|alphaNum|min:5',
        ]);
        $user->update($request->all());
        return redirect('employee')->with('success','update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect('employee')->with('success',' deleted successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use\App\Models\Auth;

class UserAuthController extends Controller
{
    public function register(Request $request) {

        $request->validate(
            [
                'name'              =>      'required|regex:/^[\pL\s\-]+$/u|max:20',
                'email'             =>      'required|email|unique:auths',
                'password'          =>      'required|alpha_num|min:6',
               
            ]
        );
        $auth=new Auth;
        $auth->name=$request->name;
        $auth->dob=$request->dob;
        $auth->email=$request->email;
        $auth->phone=$request->phone;
        $auth->state=$request->state;
        $auth->district=$request->district;
        $auth->block=$request->block;
        $auth->password=Hash::make($request->password);
        $query=$auth->save();
        if($query)
        {
            return back()->with('sucess','sucessfully registered');
        }
        else{
            return back()->with('fail','something wrong');
        }
    }
        function dashboard()
        {
          
            $data=['LoggedUserInfo'=>Auth::where('id','=',session('LoggedUser'))->first()];
            return view('auth.home',$data);
        
        }
    function check(Request $req)
        {
            $req->validate([
                'email'=>'required',
                'password'=>'required'
            ]);
            $userinfo = Auth::where('email','=',$req->email)->first();
            if(!$userinfo)
            {
                return back()->with('fail','we cannot recoganize');
            }
            else{
                if(Hash::check($req->password,$userinfo->password))
                {
                    $req->session()->put('LoggedUser',$userinfo->id);
                    return redirect('dash');

                }
                else{
                    return back()->with('fail','invalid password');
                }
            }
        }
        function logout()
        {
          if(session()->has('LoggedUser')){
              session()->pull('LoggedUser');
              return redirect('log');
          }  
        }
      
        

}
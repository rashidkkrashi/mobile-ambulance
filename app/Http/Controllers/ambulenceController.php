<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\register;
use App\Models\adding;

class ambulenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function userlogin()
    {
        return view('frontend.userlogin');
    }

    public function userloginAction(Request $request)
   {
    $username=$request->input('username');
    $password=$request->input('password');

    $result=register::where('username',$username)->where('password',$password)->first();
    if (isset($result))
    {
            $request->session()->put(array('sessionid'=>$result->id));
            return redirect('/userindex');
    }
    else
    {
       return redirect('/userlogin')->with('error','invalid username or password') ;
    }
   }



    public function userreg()
    {
        return view('frontend.userreg');
    }

    public function userregAction(Request $request)
    {
        $name=$request->input('name');
        $age=$request->input('age');
        $place=$request->input('place');
        $purpose=$request->input('purpose');
        $hospital=$request->input('hospital');
        $phone=$request->input('phone');
        $address=$request->input('address');
        $username=$request->input('username');
        $password=$request->input('password');

        $data=[
            'name'=>$name,
            'age'=>$age,
            'place'=>$place,
            'purpose'=>$purpose,
            'hospital'=>$hospital,
            'phone'=>$phone,
            'address'=>$address,
            'username'=>$username,
            'password'=>$password
        ];

        register::insert($data);
        return redirect('/');

    }

    public function userindex()
    {
        $userid=session('sessionid');
        $data['place']=adding::get();
        $data1['profileview']=register::where('id',$userid)->get();
        return view('frontend.userindex',$data,$data1);
    }
    public function detailsview($id)
    {
        $result['dataview']=adding::where('id',$id)->get();
        return view('frontend.detailsview',$result);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function userlogout(Request $request)
    {
        $request->session()->forget('sessionid');
        return redirect('/');
    }
    public function home()
    {
        return redirect('/userindex');
    }

    public function userupdate()
    {

    }

    public function userprofileAction()
    {
    
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

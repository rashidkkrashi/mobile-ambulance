<?php

namespace App\Http\Controllers;

use App\Models\adminlogin;
use App\Models\adding;
use Illuminate\Http\Request;
use App\Models\register;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adminIndex()
    {
    return view('admin.adminindex');
    }

    public function userview()
    {
        $data['contents']=register::get();
        return view('admin.userview',$data);
    }

    public function ambdisplay()
    {
    $data1['result']=adding::get();
    return view('admin.ambdisplay',$data1);
    }

    public function ambulancedata()
    {
        $data2['result']=adding::get();
        return view('admin.ambulancedata',$data2);
    }

    // public function useredit()
    // {
    //  $id=session('sessionid');
    //  $data['contents']=register::where('id',$id)->get();
    //  return view('admin.useredit',$data);
    // }

    // public function usereditAction(Request $request,$id)
    // {
    //     $name=$request->input('name');
    //     $age=$request->input('age');
    //     $place=$request->input('place');
    //     $purpose=$request->input('purpose');
    //     $hospital=$request->input('hospital');
    //     $phone=$request->input('phone');
    //     $address=$request->input('address');
    //     $username=$request->input('username');
    //     $password=$request->input('password');

    //     $data=[
    //         'name'=>$name,
    //         'age'=>$age,
    //         'place'=>$place,
    //         'purpose'=>$purpose,
    //         'hospital'=>$hospital,
    //         'phone'=>$phone,
    //         'address'=>$address,
    //         'username'=>$username,
    //         'password'=>$password,
    //     ];
    //     register::where('id',$id)->update($data);
    //     return redirect('/useredit');
    // }

    public function add()
    {
        return view('admin.add');
    }

    public function addAction(Request $request)
    {
        $number=$request->input('number');
        $place=$request->input('place');
        $name=$request->input('name');
        $phone=$request->input('phone');

        $data=[
          'number'=>$number,
          'place'=>$place,
          'name'=>$name,
          'phone'=>$phone,
        ];

        adding::insert($data);
        return redirect('/add');
    }

    public function ambedit($id)
    {
// $id=session('sessionid');        
        $data['result']=adding::where('id',$id)->get();
        return view('admin.ambedit',$data);
    }

  public function ambeditAction (Request $request,$id)
     {
         $number=$request->input('number');
         $place=$request->input('place');
         $name=$request->input('name');
         $phone=$request->input('phone');

        $data=[
          'number'=>$number,
          'place'=>$place,
          'name'=>$name,
          'phone'=>$phone,
        ];

        adding::where('id',$id)->update($data);
         return redirect('/ambdisplay');

    }

    public function delete($id)
   {
    adding::where('id',$id)->delete();
    return redirect('/ambdisplay');
   }

   public function adminlogin()
   {
    return view('admin.adminlogin');
   }

   public function adminloginAction(Request $request)
   {
    $username=$request->input('username');
    $password=$request->input('password');

    $result=adminlogin::where('username',$username)->where('password',$password)->first();
    if (isset($result))
     {
        return redirect('/adminindex');
     }
     else
     {
        return redirect('/adminlogin')->with('error','invalid username or password') ;
     }
   }

   public function logout(Request $request)
   {
   return redirect('/adminlogin');
   }
    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
class UserManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::Where('id','!=','1')->orderBy('id','DESC')->paginate(10);
        return view('backend.users.index')->with('data',$data);
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
    public function store(Request $request)
    {

    $request->validate([
            'ship_img'=> 'required',
            'fname'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required'
     ]);

     if($request->hasFile('ship_img')){

        $filenameWithExt = $request->file('ship_img')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('ship_img')->getClientOriginalExtension();
        $fileNameToStore= $filename.'_'.time().'.'.$extension;

        $path = $request->file('ship_img')->storeAs('public/images',$fileNameToStore);

    }else{
        $fileNameToStore = 'noimage.jpg';
        return \Redirect::to('/users')->with('success', 'Update Successfully!');
    }

    $data = new User;
    $data->image=$fileNameToStore;
    $data->name=$request->input('fname');
    $data->email=$request->input('email');
    $data->password=Hash::make($request->input('password'));
    $data->save();


    return \Redirect::to('/users')->with('success', 'Register Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('backend.users.edit',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        // return view('users.edit',compact('user'));
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


     if($request->hasFile('ship_img')){
        $filenameWithExt = $request->file('ship_img')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('ship_img')->getClientOriginalExtension();
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        $path = $request->file('ship_img')->storeAs('public/images',$fileNameToStore);
        $user = User::findOrFail($id);
        $user->image=$fileNameToStore;
        $user->name=$request->get('fname');
        $user->email=$request->get('email');
        $user->password=Hash::make($request->get('password'));
        $user->save();
    }else{

        $user = User::findOrFail($id);

        $user->name=$request->get('fname');
        $user->email=$request->get('email');
        $user->password=Hash::make($request->get('password'));
        $user->save();
    }

        return view('backend.users.edit',compact('user'))->with('alert', "Hooray, things are awesome!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data ->delete();
        return \Redirect::to('/users')->with('alert', 'Delete Successfully!');
    }


}

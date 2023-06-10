<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use File;
use Illuminate\Support\Facades\File as FacadesFile;
use Image;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function login(){
        return view('admin.login');
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
    public function registration(){
        return view('admin.registration');
    }
    public function profile(){
        $adminInfo = User::find(Auth::user()->id);
        return view('admin.profile', compact('adminInfo'));
    }

    public function profileUpdate(Request $request , $id){
        $admin = User::find($id);
        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;

        if($request->adminImage){
            if(File::exists(public_path('uploads/admin/'.$admin->photo))){
                File::delete(public_path('uploads/admin/'.$admin->photo));
            }
            $image = $request->file('adminImage');
            $customeName = $id.'.'.$image->getClientOriginalExtension();
            $path = public_path('uploads/admin/'.$customeName);
            Image::make($image)->resize(300, 300)->save($path);
            $admin->photo = $customeName;
        }
        $admin->save();
        return back()->with('message', 'Admin Info Update Successfully');
    }

    public function adminSocialLink(Request $request){

        echo $request;
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    /**
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

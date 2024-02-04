<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Adjust the namespace to the correct location

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken();
       session()->flash('message','Logout Successfully');
    
        // Log or print the session data
    
        return redirect('/login');
    }
    


    public function profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.admin_profile', compact('adminData'));
    }


    public function EditProfile()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);

        return view('admin.admin_profile_edit', compact('editData'));
    }

    public function UpdateProfile(Request $req)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
    
        $data->name = $req->edit_name;
        $data->email = $req->edit_email;
    
        if ($req->file('profile_image')) {
            $file = $req->file('profile_image');
    
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data->profile_picture = $filename;
        }
    
        $data->save();
      
        $notification = array(
            'message' => 'Admin Updated Successfully',
            'alert-type' => 'success'
        );
        

        // Use the correct syntax for redirecting to a named route
        return redirect()->route('admin.profile')->with($notification);
    }
    


  public function ChangePassword() {
     
      return view('admin.admin_change_password');

  }


  public function UpdatePassword(Request  $req) {
     
        $validateData = $req->validate([
   'oldpassword'=>'required',
   'newpassword'  =>'required',
    'confirm_password'=>'required |same:newpassword',

        ]);
        $hashedPassword =Auth::user()->password;
        if(Hash::check($req->oldpassword, $hashedPassword)){
            $users =User::find(Auth::id());
            $users->password =bcrypt($req->newpassword);
            $users->save();

            session()->flash('message','Password Updated Succesfully');
           return  redirect()->back();
        
        }else{
            
            session()->flash('message','Password Doesnot Match');
           return  redirect()->back();
        }


}

}

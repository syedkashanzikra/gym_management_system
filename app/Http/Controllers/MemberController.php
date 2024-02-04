<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Members;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin\members\create_member');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
       
        $memberdata = new Members();
          $memberdata->member_name = $request->member_name;
          $memberdata->member_email = $request->member_email;
          $memberdata->member_phone = $request->member_phonenumber;
          $memberdata->member_address = $request->member_address;
          $memberdata->member_facebook = $request->member_fb;
          $memberdata->member_instagram = $request->member_insta;
          $memberdata->member_twitter = $request->member_twitter;
          $memberdata->member_age = $request->member_age;
          $memberdata->member_cnic = $request->member_cnic;
          $memberdata->member_birthdate = $request->member_bd;
  //Image Wala kaam
             
  if ($request->file('member_image')) {
    $image = $request->file('member_image');
    $imageName = date('YmdHI')  . $image->getClientOriginalName();
    $image->move(public_path('upload/member_images'), $imageName);
    $memberdata->member_image = $imageName;
    // Save $imageName in the database or associate it with your Trainer model.
}

          $memberdata->save();
        
        
          $notification = array(
            'message' => 'Member Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);

    }


    /**
     * Store a newly created resource in storage.
     */
 
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $members =Members::all();
        return view('admin\members\member', compact('members'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $member = Members::find($id);
        return view('admin\members\edit_member',compact('member'));
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
    public function destroy($id)
    {
        $member = Members::find($id);
        $member->delete();

        $notification = array(
            'message' => 'Member Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('dashboard')->with($notification);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
class ContactController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth')->only('addtoContact');
    }

    public function addtoContact(Request $data)
    {
        // Your existing code for storing contact information
        $condata = new contact();
        $condata->Name = $data->contactname;
        $condata->Email = $data->contactemail;
        $condata->PhoneNumber = $data->contactphonenumber;
        $condata->Message = $data->contactmessage;
        $condata->save();

        return redirect()->back()->with("Message", "Submitted");
    }
    public function destroy($id)   {
       $condata = Contact::find($id);
       $condata->delete();
       
       $notification = array(
        'message' => 'Contact  Deleted Successfully',
        'alert-type' => 'info'
    );
    return redirect()->route('dashboard')->with($notification);

    }
 

    public function GenerateContactPDF(){
        $contacts = DB::table('contacts')->get(); // Change 'trainers' to your actual table name
        $pdf= Pdf::loadView('admin\pdf\contact', compact('contacts'));    
    //    return $pdf->stream();    
        return $pdf->download('contact.pdf');
 
    }

  public  function records(){
     return  $records =  Contact::all();
    }


    public function show()   {

        $contacts = Contact::all();
        // $authdata = User::all();   
        return view('admin.others.contact_index', compact('contacts'));

    }
}

<?php

namespace App\Http\Controllers;
use App\Models\newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class NewsletterController extends Controller
{
    public function GenerateNewletterPDF(){
        $newsletters = DB::table('newsletters')->get(); // Change 'trainers' to your actual table name
        $pdf= Pdf::loadView('admin\pdf\newsletter', compact('newsletters'));    
    //    return $pdf->stream();    
        return $pdf->download('newsletters.pdf');
    }
    public function addToNewsletter(Request $request)
    {
        
        $newsletter = new newsletter();
        $newsletter->Your_name = $request->usenewsName;
        $newsletter->Your_email = $request->usenewsEmail;

          $newsletter->save();

        return redirect()->back()->with("Success", "Submitted");
    }
    public function show()   {

        $newsletters = newsletter::all();
        return view('admin.others.newsletter_index', compact('newsletters'));

    }
    public function destroy($id) {
        newsletter::findOrFail($id)->delete();
        
        $notification = array(
            'message' => 'Newsletter Deleted Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }
}

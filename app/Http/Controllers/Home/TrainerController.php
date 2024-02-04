<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\trainers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Barryvdh\DomPDF\Facade\Pdf;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    public function index()
    {
         //THAT IS WHERE the form is present 
        return view('admin/trainer.trainer_create');
             
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $trainerrequest)
    {
       
        $trainerdata = new Trainers();
          $trainerdata->trainer_name = $trainerrequest->trainer_name;
          $trainerdata->trainer_email = $trainerrequest->trainer_email;
          $trainerdata->trainer_phone = $trainerrequest->trainer_phonenumber;
          $trainerdata->trainer_address = $trainerrequest->trainer_address;
          $trainerdata->trainer_facebook = $trainerrequest->trainer_fb;
          $trainerdata->trainer_instagram = $trainerrequest->trainer_insta;
          $trainerdata->trainer_twitter = $trainerrequest->trainer_twitter;
          $trainerdata->trainer_age = $trainerrequest->trainer_age;
          $trainerdata->trainer_cnic = $trainerrequest->trainer_cnic;
          $trainerdata->trainer_birthdate = $trainerrequest->trainer_bd;
  //Image Wala kaam
             
  if ($trainerrequest->file('trainer_image')) {
    $image = $trainerrequest->file('trainer_image');
    $imageName = date('YmdHI')  . $image->getClientOriginalName();
    $image->move(public_path('upload/trainer_images'), $imageName);
    $trainerdata->trainer_image = $imageName;
    // Save $imageName in the database or associate it with your Trainer model.
}

          $trainerdata->save();
        
        
          $notification = array(
            'message' => 'Trainer Created Successfully',
            'alert-type' => 'info'
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
        $trainers = DB::table('trainers')->get(); // Change 'trainers' to your actual table name

        return view('admin.trainer.trainer_index', compact('trainers'));
    }

    public function showtrainerstohome()
{
    $trainers = Trainers::all();

    // // Format the trainers data for the view
    // $formattedTrainers = [];
    // foreach ($trainers as $trainer) {
    //     $formattedTrainers[] = [
    //         'name' => $trainer->trainer_name,
    //         'image' => asset('upload/trainer_images/' . $trainer->trainer_image),
    //         'facebook' => $trainer->trainer_facebook,
    //         'twitter' => $trainer->trainer_twitter,
    //         'instagram' => $trainer->trainer_instagram,
    //     ];
    // }

    // Pass the formatted trainers data to the view
    return view('user.trainer', compact('trainers'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $trainer = Trainers::find($id);

        return view('admin.trainer.trainer_edit', compact('trainer'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $trainerdata = Trainers::find($id);

        // Update fields as needed
        $trainerdata->trainer_name = $request->trainer_update_name;
        $trainerdata->trainer_email = $request->trainer_update_email;
        $trainerdata->trainer_phone = $request->trainer_update_phonenumber;
        $trainerdata->trainer_address = $request->trainer_update_address;
        $trainerdata->trainer_facebook = $request->trainer_update_fb;
        $trainerdata->trainer_instagram = $request->trainer_update_insta;
        $trainerdata->trainer_twitter = $request->trainer_update_twitter;
        $trainerdata->trainer_age = $request->trainer_update_age;
        $trainerdata->trainer_cnic = $request->trainer_update_cnic;
        $trainerdata->trainer_birthdate = $request->trainer_update_bd;
        // ... (update other fields)

        // Update image if provided
        if ($request->file('trainer_update_image')) {
            $image = $request->file('trainer_update_image');
            $imageName = date('YmdHI') . $image->getClientOriginalName();
            $image->move(public_path('upload/trainer_images'), $imageName);
            $trainerdata->trainer_image = $imageName;
            // Save $imageName in the database or associate it with your Trainer model.
        }

        $trainerdata->save();

        $notification = [
            'message' => 'Trainer Updated Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('dashboard')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trainer = Trainers::find($id);
        $trainer->delete();

        $notification = [
            'message' => 'Trainer Deleted Successfully',
            'alert-type' => 'danger'
        ];

        return redirect()->route('dashboard')->with($notification);
    }

   public function GenerateTrainerPDF(){
    $trainers = DB::table('trainers')->get(); // Change 'trainers' to your actual table name
       $pdf= Pdf::loadView('admin\pdf\trainers', compact('trainers'));    
   //    return $pdf->stream();    
       return $pdf->download('trainers.pdf');

   }
}

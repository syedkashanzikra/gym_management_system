<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\trainers;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class ServicesController extends Controller
{


   

    //download function

    public function GenerateServicePDF(){
        $services = DB::table('services')->get(); // Change 'trainers' to your actual table name
        $pdf= Pdf::loadView('admin\pdf\services', compact('services'));    
    //    return $pdf->stream();    
        return $pdf->download('services.pdf');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


    $trainers = Trainers::pluck('trainer_name', 'id');

    // return view('your_view', );

        return view('admin/services.services_add',compact('trainers'));
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
        $servicesdata =new Services();
        //$trainer=trainers::all();
        $servicesdata->service_name = $request->service_name;   
        $servicesdata->service_first_package = $request->service_firstpackage;   
        $servicesdata->service_first_package_description = $request->service_firstpackage_description;   
        $servicesdata->service_second_package = $request->service_secondpackage;   
        $servicesdata->service_second_package_description = $request->service_secondpackage_description;   
        $servicesdata->service_third_package = $request->service_thirdpackage;   
        $servicesdata->service_third_package_description = $request->service_thirdpackage_description;   
        $servicesdata->service_fourth_package = $request->service_fourthpackage;   
        $servicesdata->service_fourth_package_description = $request->service_fourthpackage_description;   
        $servicesdata->service_link = $request->service_link;
        $servicesdata->service_trainer = $request->service_trainer;
        // $servicesdata->service_trainer_image = $trainer->trainer_image;

        if ($request->file('service_image')) {
            $image = $request->file('service_image');
            $imageName = date('YmdHI')  . $image->getClientOriginalName();
            $image->move(public_path('upload/service_images'), $imageName);
            $servicesdata->service_image = $imageName;
            // Save $imageName in the database or associate it with your Trainer model.
        }

        if ($request->file('service_trainer_image')) {
            $t_image = $request->file('service_trainer_image');
            $trainer_imageName = date('YmdHI')  . $t_image->getClientOriginalName();
            $t_image->move(public_path('upload/service_images/trainer_images'), $trainer_imageName);
            $servicesdata->service_trainer_image = $trainer_imageName;
            // Save $imageName in the database or associate it with your Trainer model.
        }
        
        $servicesdata->save();
                
                
                  $notification = array(
                    'message' => 'Service Created Successfully',
                    'alert-type' => 'success'
                );
        
                return redirect()->route('dashboard')->with($notification);
        

       
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $services = DB::table('services')->get(); // Change 'trainers' to your actual table name

        return view('admin.services.services_index', compact('services'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $service = Services::find($id);
        $trainers = Trainers::pluck('trainer_name', 'id');

        return view('admin.services.services_edit', compact('service','trainers'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $servicedata = Services::find($id);

        // Update fields as needed
        $servicedata->service_name = $request->update_service_name;
        $servicedata->service_first_package = $request->update_service_firstpackage;
        $servicedata->service_first_package_description = $request->update_service_firstpackage_description;
        $servicedata->service_second_package = $request->update_service_secondpackage;
        $servicedata->service_second_package_description = $request->update_service_secondpackage_description;
        $servicedata->service_third_package = $request->update_service_thirdpackage;
        $servicedata->service_third_package_description = $request->update_service_thirdpackage_description;
        $servicedata->service_fourth_package = $request->update_service_fourthpackage;
        $servicedata->service_fourth_package_description = $request->update_service_fourthpackage_description;
        $servicedata->service_link = $request->update_service_link;
        $servicedata->service_trainer = $request->update_service_trainer;

        // Update image if provided
        if ($request->file('trainer_update_image')) {
            $image = $request->file('trainer_update_image');
            $imageName = date('YmdHI') . $image->getClientOriginalName();
            $image->move(public_path('upload/service_images'), $imageName);
            $servicedata->service_image = $imageName;
            // Save $imageName in the database or associate it with your Trainer model.
        }

        if ($request->file('update_service_trainer_image')) {
            $t_image = $request->file('update_service_trainer_image');
            $trainer_imageName = date('YmdHI')  . $t_image->getClientOriginalName();
            $t_image->move(public_path('upload/service_images/trainer_images'), $trainer_imageName);
            $servicedata->service_trainer_image = $trainer_imageName;
            // Save $imageName in the database or associate it with your Trainer model.
        }

        $servicedata->save();

        $notification = [
            'message' => 'Service Updated Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('dashboard')->with($notification);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $services = Services::find($id);
        $services->delete();

        $notification = [
            'message' => 'Service Deleted Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('dashboard')->with($notification);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\trainers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Auth;
use DB;
use App\Models\Services;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = DB::table('services')->get();
            if(Auth::User()->Role==0){
                return view('dashboard', compact('services'));
             }elseif(Auth::User()->Role==1){
                 return view('admin.index');
             }else{
                 return "Invalid Role";
             }
    }



    //Show The Full Page

    public function Serviceshow($id){
        $service = Services::find($id);
        //    $service_trainername=Services::find($service->service_trainer); 

        //    $trainer = trainers::find($service_trainername);
    //   $trainer=trainers::all();
        //    $trainer = $trainer->trainer_image;
        //  $trainer =trainers::find($id);     
        // $trainer = Trainers::all();        
        // if($trainer->['trainer_name']==$service->['service_trainer'])  {
            if(Auth::User()->Role== 0){
                return view('user.user_service_full', compact('service'));   
    
        }else{
            return "INVALID ROLE FOR THIS";
        }
        // }else{
            // return  redirect()->back()->with("ERROR","NOT FOUND");
        // }
        
}
    /**
     * 
     * 
     * 
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
    public function show($id)
    {
    
        $services = Services::find($id);
        

           
        return view('user.showservices', compact('services'));
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

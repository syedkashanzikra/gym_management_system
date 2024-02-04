<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\trainers;

class AttendanceController extends Controller
{
    public function trainer_attendance(){
            // $trainers = Trainers::orderBy("created_at","desc")->get();
           return view('admin.trainer.trainer_attendance');
     }
}

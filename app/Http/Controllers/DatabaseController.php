<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\customer;
use App\Models\stock;
class DatabaseController extends Controller
{
    //
    function count_data(){
     $data1=stock::all()->count();
     $data2=customer::all()->count();
     return view("dashboard",['data1'=>$data1,"data2"=>$data2]);

    }


}

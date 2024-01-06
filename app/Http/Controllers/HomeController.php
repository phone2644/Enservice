<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('dashboard');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
 
   
    public function back()
    {
        
        return redirect()->back();
    }
    // floor1
#################################################################################################################
    public function floor1()
    {
        return view('Floors.floors-1.floor-1');
    }
   
    public function room_EN_1_102()
    {
        
        return view('Floors.floors-1.rooms-1.EN-1-102');
    }
    
    

    // floor2
#################################################################################################################
    public function floor2()
    {
        return view('Floors.floor-2');
    }

    // floor3
#################################################################################################################
    public function floor3()
    {
        return view('Floors.floors-3.floor-3');
    }

    public function room_EN_1_308()
    {
        
        return view('Floors.floors-3.rooms-3.EN-1-308');
    }
    public function room_EN_1_307()
    {
        
        return view('Floors.floors-3.rooms-3.EN-1-307');
    }
    public function room_EN_1_306()
    {
        
        return view('Floors.floors-3.rooms-3.EN-1-306');
    }

      // floor4
#################################################################################################################
    public function floor4()
    {
        return view('Floors.floor-4');
    }

      // floor5
#################################################################################################################
    public function floor5()
    {
        return view('Floors.floor-5');
    }
   
   
   

    
    

}

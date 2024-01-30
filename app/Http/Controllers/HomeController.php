<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Repair;

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
   
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
  
    public function store(Request $request)
    {
         return response()->json($request->all());
         $dropzone_file = $request->file('dropzone_file');
        if (empty($dropzone_file)) {
            $imagecontent = $dropzone_file;
        } else {

            $dropzone_file = $request->file('dropzone_file');
            //เก็บ=ชื่อรูปภาพ
            $name_gen = hexdec(uniqid());
            //เก็บนามสกุลรูป
            $img_ext = strtolower($dropzone_file->getClientOriginalExtension());

            $img_name = $name_gen . '.' . $img_ext;
            //เก็บตำแหน่งภาพ
            $upload_location = 'image/images_problem/';
            $full_path = $upload_location . $img_name;
            //เก็บตำแหน่งภาพกับชื่อมารวม และย้ายไฟล์ image/content/1765924517996855.jpg
            $dropzone_file->move($upload_location, $img_name);
            $imagecontent = $full_path;
        }

       
        $content = new Repair;
        $this->savefrom($content, $request, $imagecontent);
        return redirect()->back();
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



    public function upload(Request $request)
    {
        
        $dropzone_file = $request->file('dropzone_file');
        if (empty($dropzone_file)) {
            $imagecontent = $dropzone_file;
        } else {

            $dropzone_file = $request->file('dropzone_file');
            //เก็บ=ชื่อรูปภาพ
            $name_gen = hexdec(uniqid());
            //เก็บนามสกุลรูป
            $img_ext = strtolower($dropzone_file->getClientOriginalExtension());

            $img_name = $name_gen . '.' . $img_ext;
            //เก็บตำแหน่งภาพ
            $upload_location = 'image/images_problem/';
            $full_path = $upload_location . $img_name;
            //เก็บตำแหน่งภาพกับชื่อมารวม และย้ายไฟล์ image/content/1765924517996855.jpg
            $dropzone_file->move($upload_location, $img_name);
            $imagecontent = $full_path;
        }

       
        $content = new Repair;
        $this->savefrom($content, $request, $imagecontent);

        return redirect('/home');
       
        // return response()->json(['message'=>'data uploaded successfully']);
    }

    private function savefrom($data, $value, $imagecontent)
    {

        $data->topic = $value->topic;
        // $data->problem_id = $value->problem_id;
        $data->equipment_id = $value->equipment_id;
        $data->description = $value->description;
        $data->email = $value->email;
        $data->name = $value->name;
        $data->phone = $value->phone;
        $data->line = $value->line;
        $data->dropzone_file = $imagecontent;
        $data->contact_facebook = $value->contact_facebook;
        $data->user_id = $value->user_id;
        $data->save();
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
        $auth = Auth::user();
        return view('Floors.floors-3.rooms-3.EN-1-306',compact('auth'));
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

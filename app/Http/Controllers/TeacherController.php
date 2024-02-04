<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    

    public function dashboard_T()
    {
        return view('Teacher.dashboard-T');
    }
    public function tableElectronic()
    {
        return view('Teacher.tableElectronic');
    }
}

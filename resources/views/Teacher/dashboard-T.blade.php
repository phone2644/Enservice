@extends('layouts.app')
@section('title')
    dashboard
@endsection
@section('content')
    <div class="card-2 ">
        <div class="card_white">
            <center>
                <div class="lable_main">System</div>
            </center>
            <br>
            <div class="grid_4">
                <a href="{{route ("tableElectronic-T")}}" class="block_1"><img src="http://127.0.0.1:8000/image/icon/electronics.png"  width="20%" class="smartphone"><p>เพิ่มอุปกรณ์อิเล็กทรอนิกส์</p></a>
                <a href="#" class="block_1"><img src="http://127.0.0.1:8000/image/icon/process.png"   width="20%" class="smartphone"><p>รายงายการแจ้งซ่อม</p></a>
                <a href="#" class="block_1"><img src="http://127.0.0.1:8000/image/icon/management.png"   width="20%" class="smartphone"><p>จัดการผู้ใช้</p></a>
                <a href="#" class="block_1"><img src="http://127.0.0.1:8000/image/icon/automated-engineering.png"   width="20%" class="smartphone"><p>ตั้งค่าระบบ</p></a>
            </div>
        </div>
    </div>
@endsection

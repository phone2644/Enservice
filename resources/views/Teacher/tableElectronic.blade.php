@php
    use App\Models\Equipment;
    use App\Models\Problem;
    $Equipment = Equipment::all();
    
  
@endphp
@extends('layouts.app')
@section('title')
    จัดการอุปกรณ์อิเล็กทรอนิกส์
@endsection
@section('content')
@extends('modal.modal_admin')
        <div class="card_white">
           <div class="card" style="margin: 2.5rem;">
            <table class="table table-Secondary table-hover">
                <thead class="table-active">
                    <?php $i = 1; ?>
                  <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">ชื่ออุปกรณ์</th>
                    <th scope="col">รายละเอียด</th>
                    <th scope="col" class="jc_center">ปัญหา</th>
                  </tr>
                </thead>
                <tbody>
                       
                    @foreach ($Equipment as $item)
                      <?php
                      //  $Problem = Problem::findOrFail($item->problems);
                       $Problem = $item->problems;
                      ?>
                   
                  <tr>
                    <th>{{ $i++ }}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description }}</td>
                    <td><div class="btn btn-secondary jc_center openProblems" data-bs-target="#openProblems" data-bs-toggle="modal" data-problem="{{$item->problems}}" >คลิกเพื่อดูปัญหาของอุปกรณ์</div></td>
                  
                      
                     
                 
                  </tr>
                 
                  @endforeach
                </tbody>
              </table>
           </div>
        </div>
    
@endsection
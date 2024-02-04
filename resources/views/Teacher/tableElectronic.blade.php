<<<<<<< HEAD
@php
    use App\Models\Equipment;
    use App\Models\Problem;
    $Equipment = Equipment::all();
    
  
@endphp
@extends('layouts.app')
@section('title')
    จัดการอุปกรณ์อิเล็กทรอนิกส์
=======
@extends('layouts.app')
@section('title')
    dashboard
>>>>>>> origin/main
@endsection
@section('content')
    
        <div class="card_white">
<<<<<<< HEAD
           <div class="card" style="margin: 2.5rem;">
            <table class="table table-Secondary table-hover">
                <thead class="table-active">
                    <?php $i = 1; ?>
                  <tr>
                    <th scope="col">ลำดับ</th>
                    <th scope="col">name</th>
                    <th scope="col">รายละเอียด</th>
                    <th scope="col">ปัญหา</th>
                  </tr>
                </thead>
                <tbody>
                       
                    @foreach ($Equipment as $item)
                      <?php
                       $Problem = Problem::findOrFail($item->problem->id);
                      ?>
                   
                  <tr>
                    <th>{{ $i++ }}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description }}</td>
                    <td>{{$Problem->topic}}</td>
                  </tr>
                 
                  @endforeach
                </tbody>
              </table>
           </div>
=======
            
>>>>>>> origin/main
        </div>
    
@endsection
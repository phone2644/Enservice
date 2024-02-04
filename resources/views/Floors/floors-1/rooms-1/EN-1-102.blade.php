@extends('layouts.app')
@section('title')
    Floor-1
@endsection
@section('content')
    <div class="card-2 ">
        <div class="card-3 ">
            <div class="floor-1">
                <button  type="button" class="btn btn-primary" data-bs-target="#donus" data-bs-toggle="modal">แจ้งซ่อม</button>
                
        <div class="modal fade" id="donus">
      

            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header pr">
                        <h5 class="nodal-title center pa font" style="margin: 10px;">แจ้งปัญหาใหม่</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
    
                    <div class="modal-body">
                        <div class="card mb-4 sw-main sw-theme-check">
                            <div id="smartWizardValidation">
                                <ul class="card-header nav nav-tabs step-anchor">
    
                                    <li class="col-md-4 nav-item done"><a class="nav-link" id="btn-step-1"
                                            style="color:black;" href="#step-1">ขั้นตอนที่ 1 <br><small> รายละเอียดปัญหา
                                            </small></a></li>
                                    <li class="col-md-4 nav-item done"><a class="nav-link" id="btn-step-2"
                                            style="color:black;" href="#step-2">ขั้นตอนที่ 2 <br><small>
                                                ข้อมูลที่เกี่ยวข้อง </small></a></li>
                                    <li class="col-md-4 nav-item done"><a class="nav-link" id="btn-step-3"
                                            style="color:black;" href="#">ขั้นตอนที่ 3 <br><small> ข้อมูลผู้มาแจ้ง
                                            </small></a></li>
                                </ul>
                                <div class="card-body sw-container tab-content" style="min-height: 0px;">
                                    <div id="step-1" class="tab-pane step-content  " style="display: block;">
                                        <!-- novalidate="novalidate" -->
    
                                        <form action="#" enctype="multipart/form-data"
                                            method="POST">
                                            @csrf
                                            <div action="" id="form-step-1" class="form-step-1 ">
    
                                                <div class="mb-3">
                                                    <label for="topic" class="form-label">หัวข้อประเด็นปัญหา</label>
                                                    <input type="text" class="form-control" id="topic"
                                                        name="topic">
                                                    @error('topic')
                                                        <div class="invalid-feedback d-block">{{ $errors->first('topic') }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group " style="display: block ruby;">
                                                    <div class="mb-3" style="width: 48%; ">
                                                        <label for="electronic_id"
                                                            class="form-label">ชนิดอุปกรณ์อิเล็กทรอนิกส์</label>
                                                        <div class="form-control" id="electronic_id" readonly="readonly"
                                                            style="background-color: rgb(233, 236, 239);">ไม่ได้ระบุปัญหา
                                                        </div>
                                                    </div>
    
                                                    <div class="mb-3" style="width: 48%; position:relative; left:3.7%">
                                                        <label for="position_id" class="form-label">ตำแหน่งอุปกรณ์</label>
                                                        <div class="form-control" id="position_id" readonly="readonly"
                                                            style="background-color: rgb(233, 236, 239);">ไม่ได้ระบุปัญหา
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="mb-3">
                                                    <label for="position_id" class="form-label">เลือกกลุ่มปัญหา</label>
                                                    <div class="form-control" id="position_id" readonly="readonly"
                                                        style="background-color: rgb(233, 236, 239);">ไม่ได้ระบุปัญหา
                                                    </div>
                                                    {{-- <select id="position_id" name="position_id" class="form-control">
                                                        @foreach ($Campus as $campus)
                                                        <option value="{{$campus->id}}">{{$campus->description}}</option>
                                                        @endforeach
                                                    </select> --}}
                                                </div>
    
                                                <label for="description" class="form-label">รายละเอียดปัญหา</label>
                                                <label for="description" class="form-label">รายละเอียดปัญหา</label>
                                                <textarea class="form-control description" id="description" rows="10" name="description" required
                                                    placeholder="แจ้งปัญหาที่เกิดขึ้น..."></textarea>
    
    
                                            </div>
                                    </div>
                                    <div id="step-2" class=" tab-pane step-content" style="display: block;">
    
    
    
    
    
                                        <div class="form-group row">
    
    
    
    
                                            <h5 class="text-primary mb-3 font_size">อัพโหลดรูปภาพ <span
                                                    class="text-danger">(ไม่จำเป็นต้องระบุก็ได้)</span></h5>
                                            <div class="flex items-center justify-center Center"
                                                style="background-image: linear-gradient(1deg, #DFDFDF 0%, #6E6E6E 100%);  border-radius: 14px;">
                                                <label for="dropzone_file"
                                                    style="padding-left: 6rem;padding-right: 6rem; cursor: pointer;">
                                                    <div class="flex flex-col items-center justify-center pt-5 pb-6 Center">
                                                        <img src="https://bootstrapious.com/i/snippets/sn-img-upload/image.svg"
                                                            alt="" width="25%" class="mb-4">
    
                                                    </div>
                                                    <input id="dropzone_file" type="file" class="hidden"
                                                        name="dropzone_file" />
                                                    <div class="">
                                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 Center">
                                                            <span class="font-semibold">Click to upload</span> or drag and
                                                            drop</p>
                                                        <p class="text-xs text-gray-500 dark:text-gray-400 Center">SVG,
                                                            PNG, JPG or GIF (MAX. 800x400px)</p>
                                                    </div>
                                                </label>
                                            </div>
    
                                        </div>
    
                                    </div>
    
    
                                    <div id="step-3" class=" tab-pane step-content" style="display: block;">
    
                                        <h5 class="text-center">ข้อมูลผู้แจ้งประเด็นปัญหา</h5>
                                        <div>
    
                                            <div class="form-group">
                                                <label for="eamil" class="col-form-label ">E-mail</label>
                                                <input type="email" style="background: #3e3e3e1a;"
                                                    class="form-control valid" id="email" name="email"
                                                    placeholder="โปรดระบุ" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-form-label ">ชื่อผู้แจ้ง</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    style="background: #3e3e3e1a;" placeholder="โปรดระบุ" required=""
                                                    value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="col-form-label ">เบอร์โทรติตด่อ</label>
                                                <input type="number" class="form-control" id="phone" name="phone"
                                                    placeholder="โปรดระบุ" required="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="line" class="col-form-label ">Line ID</label>
                                                <input type="text" class="form-control" id="line" name="line"
                                                    placeholder="ไม่จำเป็นต้องระบุ">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_facebook" class="col-form-label ">Facebook
                                                    Name/Facebook Link</label>
                                                <input type="text" class="form-control" id="contact_facebook"
                                                    name="contact_facebook" placeholder="ไม่จำเป็นต้องระบุ">
                                            </div>
                                        </div>
    
    
                                    </div>
    
                                    <input type="bigInteger" class="hidden" id="user_id" name="user_id"
                                        value="">
                                    <div class="modal-footer">
                                        <div class="btn-toolbar custom-toolbar card-body pt-0 sw-container tab-content"
                                            style="min-height: 0px;">
                                            <button type="button" class="btn btn-primary prev-btn "
                                                id="back_page">ย้อนกลับ</button>&nbsp;&nbsp;&nbsp;
                                            <button type="button" class="btn btn-secondary next-btn "
                                                id="Next_page">ถัดไป</button>
                                            <button class="btn btn-info finish-btn hidden" type="submit"
                                                id="btn-finish-form">เสร็จสิ้น</button>
                                        </div>
                                    </div>
    
    
                                    </form>
                                </div>
                            </div>
    
    
    
    
    
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
  
            
        </div>
    </div>
    </div>
@endsection

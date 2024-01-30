@extends('layouts.layout_modal')
@section('title')
    Floor-1
@endsection
@section('content')
@extends('modal.modal')

<div class=" di right-150 font ">
   

</div>

<div  class="btn1" onclick="open_modal()">
    Click
</div>


<div id="modal" class="modal">
    <div class="modal-bg"></div>
    <div class="modal-card">
        <div class="modal-content">
            <div class="modal-header pr">
                <h5 class="nodal-title center pa font" style="margin: 10px;">แจ้งปัญหาใหม่</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
    
            <div class="modal-body">
                <div class="card mb-4 sw-main sw-theme-check">
                    <div id="smartWizardValidation">
                        <ul class="card-header nav nav-tabs step-anchor">
    
                            <li class="col-md-4 nav-item done"><a class="nav-link" id="btn-step-1" style="color:black;"
                                    href="#step-1">ขั้นตอนที่ 1 <br><small> รายละเอียดปัญหา
                                    </small></a></li>
                            <li class="col-md-4 nav-item done"><a class="nav-link" id="btn-step-2" style="color:black;"
                                    href="#step-2">ขั้นตอนที่ 2 <br><small>
                                        ข้อมูลที่เกี่ยวข้อง </small></a></li>
                            <li class="col-md-4 nav-item done"><a class="nav-link" id="btn-step-3" style="color:black;"
                                    href="#">ขั้นตอนที่ 3 <br><small> ข้อมูลผู้มาแจ้ง
                                    </small></a></li>
                        </ul>
                        <div class="card-body sw-container tab-content" style="min-height: 0px;">
                            <div id="step-1" class="tab-pane step-content  " style="display: block;">
                                <!-- novalidate="novalidate" -->
    
                                <form action="#" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div action="" id="form-step-1" class="form-step-1 ">
    
                                        <div class="mb-3">
                                            <label for="topic" class="form-label">หัวข้อประเด็นปัญหา</label>
                                            <input type="text" class="form-control" id="topic" name="topic">
                                            @error('topic')
                                                <div class="invalid-feedback d-block">{{ $errors->first('topic') }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="mb-3">
                                                <label for="issue_id" class="form-label">หัวข้อแจ้งซ่อม</label>
                                                <select id="issue_id" name="issue_id" class="form-control">
    
    
                                                    <option>
                                                        <h1>1111</h1>
                                                    </option>
    
                                                </select>
                                            </div>
    
    
    
                                            <div class="mb-3">
                                                <label for="campus_id" class="form-label">วิทยาเขต</label>
                                                <select id="campus_id" name="campus_id" class="form-control">
    
    
                                                    <option>
                                                        <h1>2222</h1>
                                                    </option>
    
                                                </select>
    
                                            </div>
                                        </div>
                                        <label for="description" class="form-label">รายละเอียดปัญหา</label>
                                        <textarea class="form-control" id="description" rows="10" name="description" required
                                            placeholder="แจ้งปัญหาที่เกิดขึ้น..."></textarea>
    
    
    
    
                                    </div>
                            </div>
                            <div id="step-2" class=" tab-pane step-content" style="display: block;">
    
    
    
    
    
                                <div class="form-group row">
    
    
    
    
                                    <h5 class="text-primary mb-3">อัพโหลดรูปภาพ <span
                                            class="text-danger">(ไม่จำเป็นต้องระบุก็ได้)</span></h5>
                                    <div class="flex items-center justify-center ">
                                        <label for="dropzone_file"
                                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 ">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                    </path>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                        class="font-semibold">Click to upload</span> or drag and
                                                    drop</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG
                                                    or GIF (MAX. 800x400px)</p>
                                            </div>
                                            <input id="dropzone_file" type="file" class="hidden"
                                                name="dropzone_file" />
                                        </label>
                                    </div>
    
                                </div>
    
                            </div>
    
    
                            <div id="step-3" class=" tab-pane step-content" style="display: block;">
    
                                <h5 class="text-center">ข้อมูลผู้แจ้งประเด็นปัญหา</h5>
                                <div>
    
                                    <div class="form-group">
                                        <label for="eamil" class="col-form-label ">E-mail</label>
                                        <input type="email" class="form-control valid" id="email" name="email"
                                            placeholder="โปรดระบุ" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-form-label ">ชื่อผู้แจ้ง</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="โปรดระบุ" required="" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="col-form-label ">เบอร์โทรติตด่อ</label>
                                        <input type="number" class="form-control" id="phone" name="phone"
                                            placeholder="โปรดระบุ" required="" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="line" class="col-form-label ">Line ID</label>
                                        <input type="text" class="form-control" id="line" name="line"
                                            placeholder="Line ID">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_facebook" class="col-form-label ">Facebook
                                            Name/Facebook Link</label>
                                        <input type="text" class="form-control" id="contact_facebook"
                                            name="contact_facebook" placeholder="Facebook">
                                    </div>
                                </div>
    
    
                            </div>
    
                            <input type="bigInteger" class="hidden" id="user_id" name="user_id" value="">
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

    
<script>
    var state = '1';
    $('#step-1').fadeIn();
    $('#step-2').fadeOut();
    $('#step-3').fadeOut();
    $('#back_page').addClass('disabled');
    $('#Next_page').click(function() {

        switch (state) {
            case '1':
                $('#step-2').removeClass('hidden');

                $('#back_page').removeClass('disabled');
                $('#step-1').addClass('hidden');
                $('#step-2').fadeIn(500);
                state = '2';
                break;

            case '2':
                $('#step-3').removeClass('hidden');
                $('#step-3').fadeIn(1000);
                $('#step-1').addClass('hidden');
                $('#step-2').addClass('hidden');
                state = '3';
                $('#Next_page').addClass('hidden');
                $('#btn-finish-form').removeClass('hidden');
                
                break;
            case "3":

                break;

            default:
                alert(4)
                break;
        }
    });



    $('#back_page').click(function() {

        switch (state) {
            case '1':
                $('#step-2').removeClass('hidden');
                $('#step-3').removeClass('hidden');



                break;

            case '2':
                $('#back_page').addClass('disabled');
                $('#step-1').removeClass('hidden').fadeIn(1000);
                $('#step-2').addClass('hidden');
                $('#step-3').addClass('hidden');
                state = '1';

                break;
            case "3":
                $('#step-2').removeClass('hidden').fadeIn(1000);
                $('#step-1').addClass('hidden');
                $('#step-3').addClass('hidden');
                $('#Next_page').removeClass('hidden');
                $('#btn-finish-form').addClass('hidden');
                state = '2';
                break;

            default:
                alert(4)
                break;
        }
    });


  
</script>
 
@endsection

@extends('layouts.layout_modal')

@section('title')
    Floor-1
@endsection
@section('content')
    @extends('modal.modal')
    <div id="message"></div>
    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="card" style="top: 30px">
                    <div class="card-room">

                        <div class="container testone">

                            <div class="btn1 dataSet" data-target="#modal" onclick="open_modal('AIR-1','ส่งค่าเข้าตอนคลิกเข้าหน้านี้')" data-electronic="AIR-1">AIR-1</div>
                            <div class="btn1" data-bs-target="#donus" data-bs-toggle="modal" onclick="open_modal('AIR-1','ส่งค่าเข้าตอนคลิกเข้าหน้านี้')">AIR-2</div>
                            <div class="btn1 buttomClosed" data-bs-target="#donus" data-bs-toggle="modal" data-equipment="2" data-position="r-306">PROJECTOR-1</div>
                            <div class="btn1" onclick="open_modal()">PC-1</div>
                            <div class="btn1" onclick="open_modal()">PC-2</div>
                            <div class="btn1" onclick="open_modal()">PC-3</div>
                            <div class="btn1" onclick="open_modal()">PC-4</div>
                            <div class="btn1" onclick="open_modal()">PC-5</div>
                            <div class="btn1" onclick="open_modal()">PC-6</div>
                            <div class="btn1" onclick="open_modal()">PC-7</div>
                            <div class="btn1" onclick="open_modal()">PC-8</div>
                            <div class="btn1" onclick="open_modal()">PC-9</div>
                            <div class="btn1" onclick="open_modal()">PC-10</div>
                            <div class="btn1" onclick="open_modal()">PC-11</div>
                            <div class="btn1" onclick="open_modal()">PC-12</div>
                            <div class="btn1" onclick="open_modal()">PC-13</div>
                            <div class="btn1" onclick="open_modal()">PC-14</div>
                            <div class="btn1" onclick="open_modal()">PC-15</div>
                            <div class="btn1" onclick="open_modal()">PC-16</div>
                            <div class="btn1" onclick="open_modal()">PC-17</div>
                            <div class="btn1" onclick="open_modal()">PC-18</div>
                            <div class="btn1" onclick="open_modal()">PC-19</div>
                            <div class="btn1" onclick="open_modal()">PC-20</div>
                            <div class="btn1" onclick="open_modal()">PC-21</div>
                            <div class="btn1" onclick="open_modal()">PC-22</div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

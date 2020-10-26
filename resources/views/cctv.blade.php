@extends('layouts.app')
@section('style')
    <style>
        .borad{
            border-radius: 5px;
        }
    </style>
@endsection
@section('content')
<div class="container mt-1">
    <div class="header mb-3">
        <h3>CCTV Overview</h3>
    </div>  
</div>
    <div class="container bg-white borad">
        <div class="row mb-4 justify-content-center d-flex pt-4 pb-4">
            <div class="row" id="CCTV_VIEW">
                <div class="col-lg-6 pl-0 pr-0" style="margin-left: 3vh">
                    <div class="col-lg-6 pb-2 pr-0">
                        <div class="ml-2 text-lg-right">
                            <small class="m-0">Cam 1</small>
                            <a href="#" id="cctv1"><img src="http://192.168.0.100:8080/video" width="426" height="240" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-2 pr-0">
                        <div class="ml-2 text-lg-right">
                            <small class="m-0">Cam 3</small>
                            <a href="#" id="cctv3"><img src="http://192.168.0.101:8080/video" width="426" height="240" alt=""></a>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-6 pl-0 pr-0" style="margin-left: -3vh">
                    <div class="col-lg-6 pb-2 pl-0 ">
                        <div class="ml-2 text-lg-right">
                            <small class="m-0">Cam 2</small>
                            <a href="#" id="cctv2"><img src="http://192.168.0.102:8080/video" width="426" height="240" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-2 pl-0 ">
                        <div class="ml-2 text-lg-right">
                            <small class="m-0">Cam 4</small>
                            <a href="#" id="cctv4"><img src="{{ asset('Assets/Images/test.jpg') }}" width="426" height="240" alt=""></a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

    

@endsection
@section('sidebarcontent')
<div class="row">
    <div class="col-8">
        <h5>CCTV Control</h5>
    </div>
    <div class="col-4 d-flex">
        <span class="text-right" id="cam_selection">Cam 1</span>
    </div>
</div>

<hr>
<small>Camera</small>
<hr class="m-2">
<div class="row justify-content-center">
    <div class="col-4 pl-0">
        <button id="Rec_btn" class="btn btn-primary">Record</button>
    </div>
    <div class="col-4">
        <button id="Stoprec_btn" class="btn btn-danger">Stop</button>
    </div>
    <div class="col-4">
        <a href="" id="takefoto"><button class="btn btn-warning">Photo</button></a>
    </div>
</div>
<div class="row mb-2 mt-2">
    <div class="col-2 p-0">
        <label id="flashbtn" class="btn btn-sm btn-primary">
            <input id="flashcb" type="checkbox" hidden>Flash
        </label>
    </div>
</div>
<hr class="m-2">
<small>Camera Control</small>
<hr class="m-2">
<div class="row">
    <div class="col-12 text-right">
        <small>Zoom</small>
    </div>
    <div class="col-12">
        <input type="range" class="w-100" min="0" max="100" value="60" name="" id="zoom">
    </div>
    <div class="col-12">
        <small id="TZ">50</small>
    </div>
</div>
<hr class="m-2">
<div class="row">
    <div class="col-12 text-right">
        <small>Stream Quality</small>
    </div>
    <div class="col-12">
        <input type="range" class="w-100" min="0" max="100" value="20" name="" id="stream_quality">
    </div>
    <div class="col-12">
        <small id="TSQ">50</small>
    </div>
</div>
<hr class="m-2">
<div class="row">
    <div class="col-12 text-right">
        <small>Exposure Compensation</small>
    </div>
    <div class="col-12">
        <input type="range" class="w-100" min="0" max="13" value="10" name="" id="exposure">
    </div>
    <div class="col-12">
        <small id="TEC">50</small>
    </div>
</div>
<hr class="m-2">
<div class="row">
    <div class="col-12 text-right">
        <small>Night Vision Gain</small>
    </div>
    <div class="col-12">
        <input type="range" class="w-100" min="0" max="13" value="10" name="" id="night_vision_gain">
    </div>
    <div class="col-12">
        <small id="TNVG">50</small>
    </div>
</div>
<hr class="m-2">
<div class="row">
    <div class="col-12 text-right">
        <small>Night Vision Exposure</small>
    </div>
    <div class="col-12">
        <input type="range" class="w-100" min="0" max="13" value="10" name="" id="night_vision_Exposure">
    </div>
    <div class="col-12">
        <small id="TNVE">50</small>
    </div>
</div>
<hr class="m-2">
<div class="row">
    <div class="col-12 text-right">
        <small>Night Vision Exposure</small>
    </div>
    <div class="col-12">
        <input type="range" class="w-100" min="0" max="13" value="10" name="" id="night_vision_Exposure">
    </div>
    <div class="col-12">
        <small id="TNVE">50</small>
    </div>
</div>
@endsection
@section('script')
    <script>
        
    </script>
    <script src="{{ asset('js/Noreplyao.js') }}"></script>
@endsection
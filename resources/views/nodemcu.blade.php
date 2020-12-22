@extends('layouts.app')

{{-- @section('notification')

@endsection --}}
@section('style')
    <style>
        .bg-1{
            background-color:white;
            /* height: 90px; */
        }
        .borad{
            border-radius: 5px
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <h1 class="mb-4">Kamar</h1>
        <div class="row">
            <div class="col-lg-1 bg-1 borad mr-2 p-3">
                <div class="row">
                    <div class="col-12">
                        <i class="nav-icon fad fa-cctv "></i>
                        <h5 id="ultra">10 cm</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 bg-1 borad mr-2 p-3">
                <div class="row">
                    <div class="col-12">
                        <i class="nav-icon fad fa-cctv "></i>
                        <p id="pirs">Movement Detected</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 bg-1 borad mr-2 p-3">
                <div class="row">
                    <div class="col-12">
                        <i class="nav-icon fad fa-cctv"></i>
                        <p id="relay1">Lamp 1 On</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 bg-1 borad mr-2 p-3">
                <div class="row">
                    <div class="col-12">
                        <i class="nav-icon fad fa-cctv "></i>
                        <p id="relay2">Lamp 2 on</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 bg-1 borad mr-2 p-3">
                <div class="row">
                    <div class="col-12">
                        <i class="nav-icon fad fa-cctv "></i>
                        <p id="relay3">Lamp 3 on</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{ asset('plugins/socket.io-client/dist/socket.io.js') }}"></script>
    <script>
        var ultra = $("#ultra");
        var pir = $("#pirs");
        var relay1 = $("#relay1");
        var relay2 = $("#relay2");
        var relay3 = $("#relay3");

        var socket = io.connect('http://localhost:2001');
        socket.on('ultra',function(message){
            console.log(message);
            ultra.html(message+" cm");
        });
        socket.on('pir',function(message){
            console.log(message);
            if (message){
                pir.html("Movement Detected");
            }else{
                pir.html("No Movement");
            }
        });
        socket.on('relay1',function(message){
            // console.log(message);
            if (message==true){
                relay1.html("On");
                console.log(message);
            }else{
                relay1.html("Off");
            }
        });
        socket.on('relay2',function(message){
            console.log(message);
            if (message==true){
                relay2.html("On");
            }else{
                relay2.html("Off");
            }
        });
        socket.on('relay3',function(message){
            console.log(message);
            if (message==true){
                relay3.html("On");
            }else{
                relay3.html("Off");
            }
        });
    </script>
@endsection

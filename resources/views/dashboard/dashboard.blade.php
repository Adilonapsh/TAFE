@extends('layouts.app')
@section('style')
    <style>
        .borad{
            border-radius: 5px;
        }
        .borders{
            border: 10px; !important;
        }
        .border-bottoms-0{
            border-radius: 5px 5px 0px 0px;
        }
        .border-tops-0{
           border-radius: 0px 0px 5px 5px;
        }
        ::-webkit-scrollbar {
        width: 5px;
        height: 5px;
        }
        ::-webkit-scrollbar-button {
        width: 0px;
        height: 0px;
        }
        ::-webkit-scrollbar-thumb {
        background: #000000;
        border: 21px none #ffffff;
        border-radius: 50px;
        }
        ::-webkit-scrollbar-thumb:hover {
        background: #ffffff;
        }
        ::-webkit-scrollbar-thumb:active {
        background: #4d4d4d;
        }
        ::-webkit-scrollbar-track {
        background: #ffffff;
        border: 0px none #ffffff;
        border-radius: 54px;
        }
        ::-webkit-scrollbar-track:hover {
        background: #666666;
        }
        ::-webkit-scrollbar-track:active {
        background: #000000;
        }
        ::-webkit-scrollbar-corner {
        background: transparent;
        }
    </style>
<script src="https://code.highcharts.com/highcharts.js"></script>
@endsection
@section('content')
    {{-- Card Dashboard --}}
    <div class="container-fluid p-4">
        <h4 class="">Dashboard</h4>
        <div class="row mb-3 borad ">
            <div class="col-lg-3 justify-content-center d-flex">
                <div class="card bg-white text-white" style="width: 25rem;height:8rem;">
                    <a href="#">
                        <div class="card-body ml-2">
                            <i class="fas fa-project-diagram nav-icon float-right"></i>
                            <h3 class="mt-4" style="margin-bottom: -2px">{{ $tproject }}</h3>
                            <p class="card-text">Projects</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 justify-content-center d-flex">
                <div class="card bg-teal text-white" style="width: 25rem;height:8rem;">
                    <a href="#">
                        <div class="card-body ml-2">
                            <i class="fas fa-video nav-icon float-right"></i>
                            <h3 class="mt-4" style="margin-bottom: -2px">{{ $usrcctvid }}</h3>
                            <p class="card-text">Cameras</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 justify-content-center d-flex">
                <div class="card bg-indigo text-white" style="width: 25rem;height:8rem;">
                    <a href="#">
                        <div class="card-body ml-2">
                            <img src="{{ asset('Assets/Images/Asset_1.png') }}" width="20" height="20" alt="" class="float-right">
                            <h3 class="mt-4" style="margin-bottom: -2px">10</h3>
                            <p class="card-text">Karyawan</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 justify-content-center d-flex">
                <div class="card bg-maroon text-white" style="width: 25rem;height:8rem;">
                    <a href="#">
                        <div class="card-body ml-2">
                            <img src="{{ asset('Assets/Images/Asset_1.png') }}" width="20" height="20" alt="" class="float-right">
                            <h3 class="mt-4" style="margin-bottom: -2px">10</h3>
                            <p class="card-text">Magang</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    {{-- Projects Pending --}}
    {{-- <h4 class="mb-3">Projects</h4> --}}
    <div class="Penpro bg-white borad mb-2 border-bottoms-0">
        <div class="row">
            <div class="col-12 pl-4 pr-4">
                <div class="row p-lg-2 p-3  align-items-center border-bottom">
                    <div class="col-7">
                        <span>Project Overview</span>
                    </div>
                    <div class="col-5 text-right align-items-center">
                        <a href="{{ route('viewnewpost') }}" class="btn btn-primary">Create</a>
                        <a class="dropdown align-items-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('project') }}">Show All Projects</a>
                            <a class="dropdown-item" href="#">Delete All Complete Projects</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    {{-- <div class="col-3 text-right align-items-center">
                        <a class="btn btn-primary" href="#">Make</a>
                        <a class="" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                          </svg></a>
                    </div> --}}
                </div>
                <div class="row pl-4 pr-4 justify-content-center text-center">
                    <div class="col-3 pt-2 border-right borad ">
                        <h3>{{ $tproject }}</h3>
                        <p class="text-muted">Total Project</p>
                    </div>
                    <div class="col-3 pt-2 border-right borad">
                        <h3>{{ $complete }}</h3>
                        <p class="text-muted">Completed</p>
                    </div>
                    <div class="col-3 pt-2 border-right borad">
                        <h3>{{ $onprog }}</h3>
                        <p class="text-muted">On Progress</p>
                    </div>
                    <div class="col-3 pt-2">
                        <h3>{{ $OOS }}</h3>
                        <p class="text-muted">Out Off Schedule</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- <h4 class="mb-3">CCTV</h4> --}}
    <div class="Penpro bg-white borad mb-2 border-bottoms-0">
        <div class="row">
            <div class="col-12 pl-4 pr-4">
                <div class="row p-lg-2 p-3  align-items-center border-bottom">
                    <div class="col-7">
                        <span>CCTV Overview</span>
                    </div>
                    <div class="col-5 text-right align-items-center">
                        <a class="btn btn-primary" href="{{ route('viewnewcctv') }}">Create</a>
                        <a class="dropdown align-items-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('viewcctv') }}">Show All Cameras</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    {{-- <div class="col-3 text-right align-items-center">
                        <a class="btn btn-primary" href="#">Make</a>
                        <a class="" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg></a>
                    </div> --}}
                </div>
                <div class="row pl-4 pr-4 justify-content-center text-center">
                    <div class="col-3 pt-2 border-right borad ">
                        <h3>{{ $usrcctvid }}</h3>
                        <p class="text-muted">Total CCTV</p>
                    </div>
                    <div class="col-3 pt-2 border-right borad">
                        <h3>{{ $cActive }}</h3>
                        <p class="text-muted">Active</p>
                    </div>
                    <div class="col-3 pt-2 border-right borad">
                        <h3>{{ $cMaintenance }}</h3>
                        <p class="text-muted">Maintenance</p>
                    </div>
                    <div class="col-3 pt-2">
                        <h3>{{ $cNonactive }}</h3>
                        <p class="text-muted">Nonactive</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <canvas id="linechart" width="500" height="200"></canvas>
    </div>
    <div id="linecharts"></div> --}}
    <div class="container">
        <div class="row">
            <div class="col-2">
                
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('plugins/socket.io-client/dist/socket.io.js') }}"></script>

    <script>
        var senul = [];
        var socket = io.connect('http://localhost:2001');
        $(document).ready(function() {
            for(i=0;i<1000;i++){
                var text = $("#P_PB"+i);
                var count = text.text().length;
                if(count >= 40){
                    var str = text.text();
                    var res = str.substring(0,80);
                    text.text(res + "...");
                }
            }
        });

        socket.on('ultra',function(message){
            // console.log(message);
            senul = message;
            console.log(senul);
            addData(pirChart,[senul],senul);
        });
        socket.on('pir',function(message){
            console.log(message);
            var today = new Date();
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            if (message==1){
                addData(pirChart,time,message);
            }
        });
        
        // setInterval(function(){ 
        //     senul = Math.floor((Math.random()*2));
        //     console.log(senul);
        //     var today = new Date();
        //     var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        //     if (senul==1){
        //         if (time==time&& senul!=0){
        //             addData(pirChart,time,senul);

        //         }
        //     }

        // }, 1000);
        
        var ctx = document.getElementById('linechart').getContext('2d');
        var pirChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: '',
                    data: [],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        function addData(chart, label, data) {
            chart.data.labels.push(label);
            chart.data.datasets.forEach((dataset) => {
                dataset.data.push(data);
            });
            chart.update();
        }
        function removeData(chart) {
            chart.data.labels.pop();
            chart.data.datasets.forEach((dataset) => {
                dataset.data.pop();
            });
            chart.update();
        }
        

        
        
        
    </script>
@endsection
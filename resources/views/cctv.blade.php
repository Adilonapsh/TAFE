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
        .buttons{
            border-radius: 10px;
            background-color: #0033f1;
        }
        .ps{
            font-size: 12px;
        }
        .wei{
            font-weight: 100;
            color: #808080;
        }
    </style>
@endsection
@if ($usrcctvid != 0)
    @section('content')
    <div class="container mt-1">
        <div class="header mb-3">
            <h3>CCTV</h3>
        </div>  
    </div>
        @if($usrcctvid != 0)
        <div class="container bg-white borad">
            <div class="row mb-3">
                <div class="row p-4 justify-content-center d-flex">
                    @foreach($cuser as $cctv)
                    <div class="col-xl-3">
                        <small class="m-0 ">{{ $cctv->cctv_name }}</small>
                        <a href="#" id="cctv{{ $cctv->id }}" class="cctvclass"><img src="{{ $cctv->cctv_ip }}" onerror="this.src='{{ asset('img/No-signal.jpg') }}';" class="img-fluid mx-auto d-block" width="100%"></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <div class="container">
            <div class="Penpro bg-white borad mb-2 border-bottoms-0">
                <div class="row">
                    <div class="col-12 pl-4 pr-4">
                        <div class="row p-lg-2 p-3  align-items-center border-bottom">
                            <div class="col-7">
                                <span>CCTV Overview</span>
                            </div>
                            <div class="col-5 text-right align-items-center">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#Createmodal">Create</button>
                                <a class="dropdown align-items-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    </svg>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
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
            <div class='container mt-1'>
                <div class="row bg-white border-tops-0">
                    <div class="col-lg-12 pl-5 pr-5 pb-3 ">
                        @foreach ($cctvid as $cctv)
                        <div class="row bg-white shadow-sm p-3 mt-3 borad border-left border-primary align-items-center">
                            <div class="col-sm-6 col-lg-7">
                                <div class="col-12"><h4 class="border-bottom">{{ $cctv->cctv_name }}</h4></div>
                                <div class="col-12"><p id="P_PB{{ $cctv->id }}">{{ $cctv->cctv_ip }}</p></div>
                            </div>
                            <div class="col-sm-2 col-lg-2 mb-3"><!--mt-2-->
                                <div class="row justify-content-center"><b>Status</b></div>
                                <div class="row justify-content-center">{{ $cctv->status }}</div>
                            </div>
                            <div class="col-sm-12 col-lg-3 text-right  "> <!--mt-lg-4-->
                                <a class="btn btn-primary edits" href="/cctv/edit/{{ $cctv->id }}">Edit</a><!--data-target="#editmodal" data-toggle="modal"-->
                                <a class="btn btn-primary" href="#">View</a>
                                <a class="btn btn-primary" href="/cctv/delete/{{ $cctv->id }}" onclick="return confirm('Anda Yakin ?');">Delete</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Createmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create CCTV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="/cctv/create" method="POST">
                        @csrf
                        <div class="form-group">
                            <h5>CCTV Name</h5>
                            <input type="text" class="form-control" name="Cctv_name" placeholder="Nama CCTV" required>
                        </div>
                        <div class="form-group">
                            <h5>CCTV IP</h5>
                            <input type="text" class="form-control" name="Cctv_ip" placeholder="http://192.168.0.101/" required>
                        </div>
                        <div class="form-group">
                            <h5>Status</h5>
                            <select name="status" class="form-control" required>
                                <option value="Active">Active</option>
                                <option value="Maintenance">Maintenance</option>
                                <option value="Non Active">Non Active</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right mr-4">Save</button>
                        <button type="reset" class="btn btn-primary float-right mr-2">Clear</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="modal fade" id="Editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create CCTV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="/cctv/update" method="POST">
                        @csrf
                        @if (!empty($cctv))
                            <input type="hidden" id="getid" name="id" value="{{ $cctv->id }}">
                        @endif
                        <div class="form-group">
                            <h5>CCTV Edit</h5>
                            <input type="text" class="form-control" name="Cctv_name" placeholder="Nama CCTV" required>
                        </div>
                        <div class="form-group">
                            <h5>CCTV IP</h5>
                            <input type="text" class="form-control" name="Cctv_ip" placeholder="http://192.168.0.101/video" required>
                        </div>
                        <div class="form-group">
                            <h5>Status</h5>
                            <select name="status" class="form-control" required>
                                <option value="Active">Active</option>
                                <option value="Maintenance">Maintenance</option>
                                <option value="Non Active">Non Active</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right mr-4">Save</button>
                        <button type="reset" class="btn btn-primary float-right mr-2">Clear</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    @endsection
@else
    @section('content')
        <div class="container bg-white borad">
            <div class="row align-items-center" style="height: 90vh;">
                <div class="col text-center">
                    <h2 class="mb-3 ">Connect devices</h2>
                    <p class="mb-4 wei">Connect your camera or video recorder to {{ config('app.name') }} cloud and watch videos in the app.</p>
                    <button class="btn btn-primary p-2 mb-3" data-toggle="modal" data-target="#Createmodal">Connect Devices</button>
                    <hr class="w-75">
                    <div class="row justify-content-center">
                        <div class="col-sm-1 mx-4">
                            <svg class="w-sm-50 m-2" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="25" cy="25" r="25" fill="#C8CED7"></circle><path d="M30.9 30.39C30.64 29.59 29.89 29 29 29H28V26C28 25.7348 27.8946 25.4804 27.7071 25.2929C27.5196 25.1054 27.2652 25 27 25H21V23H23C23.2652 23 23.5196 22.8946 23.7071 22.7071C23.8946 22.5196 24 22.2652 24 22V20H26C26.5304 20 27.0391 19.7893 27.4142 19.4142C27.7893 19.0391 28 18.5304 28 18V17.59C30.93 18.77 33 21.64 33 25C33 27.08 32.2 28.97 30.9 30.39ZM24 32.93C20.05 32.44 17 29.08 17 25C17 24.38 17.08 23.78 17.21 23.21L22 28V29C22 29.5304 22.2107 30.0391 22.5858 30.4142C22.9609 30.7893 23.4696 31 24 31V32.93ZM25 15C23.6868 15 22.3864 15.2587 21.1732 15.7612C19.9599 16.2638 18.8575 17.0003 17.9289 17.9289C16.0536 19.8043 15 22.3478 15 25C15 27.6522 16.0536 30.1957 17.9289 32.0711C18.8575 32.9997 19.9599 33.7362 21.1732 34.2388C22.3864 34.7413 23.6868 35 25 35C27.6522 35 30.1957 33.9464 32.0711 32.0711C33.9464 30.1957 35 27.6522 35 25C35 23.6868 34.7413 22.3864 34.2388 21.1732C33.7362 19.9599 32.9997 18.8575 32.0711 17.9289C31.1425 17.0003 30.0401 16.2638 28.8268 15.7612C27.6136 15.2587 26.3132 15 25 15Z" fill="white"></path></svg>
                            <p class="ps">Watch videos remotely</p>
                        </div>
                        {{-- <div class="col-sm-1">
                            <svg class="w-sm-50 m-2" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="25" cy="25" r="25" fill="#C8CED7"></circle><path d="M34 32V33H16V32L18 30V24C18 20.9 20.03 18.17 23 17.29C23 17.19 23 17.1 23 17C23 16.4696 23.2107 15.9609 23.5858 15.5858C23.9609 15.2107 24.4696 15 25 15C25.5304 15 26.0391 15.2107 26.4142 15.5858C26.7893 15.9609 27 16.4696 27 17C27 17.1 27 17.19 27 17.29C29.97 18.17 32 20.9 32 24V30L34 32ZM27 34C27 34.5304 26.7893 35.0391 26.4142 35.4142C26.0391 35.7893 25.5304 36 25 36C24.4696 36 23.9609 35.7893 23.5858 35.4142C23.2107 35.0391 23 34.5304 23 34" fill="white"></path></svg>
                            <p class="ps">Notifications about important events</p>
                        </div> --}}
                        <div class="col-sm-1 mx-4">
                            <svg class="w-sm-50 m-2" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="25" cy="25" r="25" fill="#C8CED7"></circle><path d="M32.35 23.03C31.67 19.59 28.64 17 25 17C22.11 17 19.6 18.64 18.35 21.03C15.34 21.36 13 23.9 13 27C13 30.3137 15.6863 33 19 33H32C33.3261 33 34.5979 32.4732 35.5355 31.5355C36.4732 30.5979 37 29.3261 37 28C37 25.36 34.95 23.22 32.35 23.03Z" fill="white"></path></svg>
                            <p class="ps">Local and cloud storage</p>
                        </div>
                        <div class="col-sm-1 mx-4">
                            <svg class="w-sm-50 m-2" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="25" cy="25" r="25" fill="#C8CED7"></circle><path d="M29 26C28.71 26 28.38 26 28.03 26.05C29.19 26.89 30 28 30 29.5V32H36V29.5C36 27.17 31.33 26 29 26ZM21 26C18.67 26 14 27.17 14 29.5V32H28V29.5C28 27.17 23.33 26 21 26ZM21 24C21.7956 24 22.5587 23.6839 23.1213 23.1213C23.6839 22.5587 24 21.7956 24 21C24 20.2044 23.6839 19.4413 23.1213 18.8787C22.5587 18.3161 21.7956 18 21 18C20.2044 18 19.4413 18.3161 18.8787 18.8787C18.3161 19.4413 18 20.2044 18 21C18 21.7956 18.3161 22.5587 18.8787 23.1213C19.4413 23.6839 20.2044 24 21 24ZM29 24C29.7956 24 30.5587 23.6839 31.1213 23.1213C31.6839 22.5587 32 21.7956 32 21C32 20.2044 31.6839 19.4413 31.1213 18.8787C30.5587 18.3161 29.7956 18 29 18C28.2044 18 27.4413 18.3161 26.8787 18.8787C26.3161 19.4413 26 20.2044 26 21C26 21.7956 26.3161 22.5587 26.8787 23.1213C27.4413 23.6839 28.2044 24 29 24Z" fill="white"></path></svg>
                            <p class="ps">Share access to your cameras</p>
                        </div>
                        {{-- <div class="col-sm-1">
                            <svg class="w-sm-50 m-2" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="25" cy="25" r="25" fill="#C8CED7"></circle><path d="M16 35V21H20V35H16ZM23 35V15H27V35H23ZM30 35V27H34V35H30Z" fill="white"></path></svg>
                            <p class="ps">Visitor analyses and reports</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Createmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create CCTV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="/cctv/create" method="POST">
                        @csrf
                        <div class="form-group">
                            <h5>CCTV Name</h5>
                            <input type="text" class="form-control" name="Cctv_name" placeholder="Nama CCTV" required>
                        </div>
                        <div class="form-group">
                            <h5>CCTV IP</h5>
                            <input type="text" class="form-control" name="Cctv_ip" placeholder="http://192.168.0.101/" required>
                        </div>
                        <div class="form-group">
                            <h5>Status</h5>
                            <select name="status" class="form-control" required>
                                <option value="Active">Active</option>
                                <option value="Maintenance">Maintenance</option>
                                <option value="Non Active">Non Active</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right mr-4">Save</button>
                        <button type="reset" class="btn btn-primary float-right mr-2">Clear</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    @endsection
@endif

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
<form role="form">
    <div class="row">
        <div class="col-12 text-right">
            <small>Zoom</small>
        </div>
        <div class="col-12">
            <input type="range" class="w-100 bar" min="0" max="100" value="0" name="" id="range_zoom">
        </div>
        <div class="col-12">
            <small id="RZL">50 X</small>
        </div>
    </div>
    <hr class="m-2">
    <div class="row">
        <div class="col-12 text-right">
            <small>Stream Quality</small>
        </div>
        <div class="col-12">
            <input type="range" class="w-100 bar" min="0" max="100" value="20" name="" id="stream_quality">
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
            <input type="range" class="w-100 bar" min="0" max="13" value="10" name="" id="exposure">
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
            <input type="range" class="w-100 bar" min="0" max="13" value="10" name="" id="night_vision_gain">
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
            <input type="range" class="w-100 bar" min="0" max="13" value="10" name="" id="night_vision_Exposure">
        </div>
        <div class="col-12">
            <small id="TNVE">50</small>
        </div>
    </div>
    <hr class="m-2">
    
</form>
@endsection


@section('script')
    <script>
    </script>
    <script src="{{ asset('js/Noreplyao.js') }}"></script>
@endsection
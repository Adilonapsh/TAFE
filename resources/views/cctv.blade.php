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
        <h3>CCTV</h3>
    </div>  
</div>
    @if($usrcctvid != 0)
    <div class="container bg-white borad">
        <div class="row mb-3">
            <div class="row p-4 justify-content-center d-flex">
                @foreach($cuser as $cctv)
                <div class="col-xl-3">
                    <small class="m-0">{{ $cctv->cctv_name }}</small>
                    <a href="#" id="cctv{{ $cctv->id }}" class="cctvclass"><img src="{{ $cctv->cctv_ip }}" class="img-fluid mx-auto d-block " alt=""></a>
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
            <div class="row bg-white">
                <div class="col-lg-12">
                    @foreach ($cctvid as $cctv)
                    <div class="row bg-white shadow-sm p-3 mt-3 borad border-left border-success align-items-center">
                        <div class="col-lg-7">
                            <div class="col-12"><h4 class="border-bottom">{{ $cctv->cctv_name }}</h4></div>
                            <div class="col-12"><p id="P_PB{{ $cctv->id }}">{{ $cctv->cctv_ip }}</p></div>
                        </div>
                        <div class="col-2 "><!--mt-2-->
                            <div class="row justify-content-center"><b>Status</b></div>
                            <div class="row justify-content-center">{{ $cctv->status }}</div>
                        </div>
                        <div class="col-lg-3 col-sm-3 text-right  "> <!--mt-lg-4-->
                            <a class="btn btn-primary" href="#" data-target="#editmodal" data-toggle="modal">Edit</a>
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
        $(document).ready(function() {
            var ctv = [];
            var id = [];
            for(i=0;i<100;i++){
                var k = 'ctv';
                var ctvsrc = $('.cctvclass').find('img')[i].src;
                var ids = $('.cctvclass')[i].id;
                var replace = ctvsrc.replace('video','');
                ctv[i] = replace;
                id[i] = '#'+ids;
                
                // console.log(id);
                console.log("ctv"+i+" = "+ ctv[i]);
                console.log(id[i]);
                // console.log(ctv[0]);
                
                if(typeof ctvsrc === 'undefined'){
                    break;
                }
            }
            array.forEach(id => {
                console.log('2920202020');
                
            });
            


            // $.ajax({
            //     url: "http://192.168.0.100:8080/photo.jpg",
            //     error: function(){
            //         console.log('Mati');
            //     },
            //     success: function(){
            //         console.log('Nyala');
            //     }
            // });
        });
    </script>
    {{-- <script src="{{ asset('js/Noreplyao.js') }}"></script> --}}
@endsection
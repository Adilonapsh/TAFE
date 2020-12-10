<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("plugins/fontawesome5pro/css/all.css") }}">
    <script src="{{ asset("plugins/bootstrap/js/bootstrap.js") }}"></script>

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
        .bg-grays{
          background-color: #ECF0F5;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-white">
        <div class="row vh-100">
        <div class="col-3 bg-grays">
            <div class="d-flex justify-content-end  mt-3">
                <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#Createmodal"><i class="fas fa-plus"></i></button>
            </div>
            <div class="list bg-white mt-3 borad border-left border-right border-primary">
                <div class="row pl-3 pb-2 pt-2">
                    <div class="col-1 align-self-center">
                        <i class="fad fa-video"></i>
                    </div>
                    <div class="col-8">
                    <p class="m-0" id="nama">UHUYY</p>
                    <p class="m-0" id="ip">http:/192.168.0.100/video</p>
                    </div>
                    <div class="col-2 text-center">
                        <p id="status" class="m-1"><i class="fas fa-circle"></i></p>
                        <p id="status" class="m-1"><i class="fas fa-circle"></i></p>
                    </div> 
                    <div class="col-1 align-self-center">
                    <div class="dropdown">
                        <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/cctv/edit/">Edit</a>
                            {{-- <a class="dropdown-item" href="#">View</a> --}}
                            <a class="dropdown-item" href="/cctv/delete/">Delete</a>
                        </div>
                        </div>
                    </div> 
                </div>
            </div>
            {{-- @endforeach   --}}
            </div>
        <div class="col-9 align-self-center text-center">
            <a href="#" id="cctv" class="cctvclass">
            <img src="" onerror="this.src='{{ asset('img/No-signal.jpg') }}';" class="img-fluid mx-auto d-block" width="100%">
            </a>
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
    
    <script>
    </script>
    <script src="{{ asset('js/Noreplyao.js') }}"></script>
    
</body>
</html>




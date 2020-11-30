<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adilonapsh</title>
    <link rel="stylesheet" href="{{ asset("css/Style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/aos.css") }}">
    <link rel="stylesheet" href="{{ asset("plugins/fontawesome5pro/css/all.css") }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset("js/aos.js") }}"></script>
    <style>
         .text12{
            font-size: 12px;
         }
         .text14{
            font-size: 14px;
         }   
    </style>

</head>
<body class="bg-dark">
    <div class="container-fluid">
        <div class="row">
            {{-- menu --}}
            <div class="col-lg-4 bg-white border-right border-light pt-3">
                <div class="tablink pl-3 border-primary pr-3 pt-1 pb-1" id="defaultOpen" onclick="openPage('profile', this)">
                    <div class="row">
                        <div class="col-2 text-center ">
                            <i class="far fa-user-alt fa-lg mt-3"></i>
                        </div>
                        <div class="col-10">
                            <strong class="text14">Your Profile</strong>
                            <br>
                            <p class="text12">Details About Your Information</p>
                        </div>
                    </div>
                </div>
                <div class="tablink pl-3 border-primary pr-3 pt-1 pb-1" id="defaultOpen" onclick="openPage('profile2', this)">
                    <div class="row">
                        <div class="col-2 text-center ">
                            <i class="far fa-user-alt fa-lg mt-3"></i>
                        </div>
                        <div class="col-10">
                            <strong class="text14">Your Company</strong>
                            <br>
                            <p class="text12">Details About Your Company Information</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- /menu --}}
            <div class="col-lg-8 bg-white tabcontent" id="profile">
                <div class="container">
                    <div class="row w-100 text-center">
                        <div class="col-lg-12">
                            <label id="img_change"><img src="storage/avatars/avatar5.png" id="images" class=" mt-5 mb-3 img-fluid shadow rounded-circle" style="width: 200;height:200;"></label>
                            <input type="file" id="pp_input" style="display: none;" class="form-control-file w-100" aria-describedby="fileHelp" name="photo" >
                            <h2 class="mb-3">Adilonapsh</h2>
                            <hr class="w-75" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="container-fluid">
                                <form action="profile/upload" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" class="form-control w-100" placeholder="Masukkan Nama" value="" name="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat Lengkap</label>
                                        <input type="text" class="form-control w-100" placeholder="Masukkan Alamat" value=""  name="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control w-100" placeholder="Masukkan Email" value=""  name="" >
                                    </div>
                                    <div class="form-group">
                                        <label for="">No Telepon</label>
                                        <input type="text" class="form-control w-100" placeholder="Masukkan Nomor Telepon" value=""  name="">
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pb-5">
                            <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="">Current Password</label>
                                        <input type="password" class="form-control w-100" placeholder="Masukkan Password Lama" name="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control w-100" placeholder="Masukkan Password Baru" name="" >
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password Konfirmasi</label>
                                        <input type="password" class="form-control w-100" placeholder="Masukkan Ulang Password" name="">
                                    </div>
                                    <button class="btn btn-primary float-right">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalcrop">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title"></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div>
                            <img id='modalimg' class='img-fluid' src="" />
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type='button' class='btn btn-danger btn-sm' onclick='cropping()'>Done</button>
                        </div>
                      </div>
                    </div>
               </div>
                
            </div>

        </div>
    </div>
    <script type="text/javascript">
        function openPage(pageName, elmnt) {
            // Hide all elements with class="tabcontent" by default */
            var i, tabcontent, tablink;
            tabcontent = $('.tabcontent');
            tablink = $('.tablink');
            // list = $('.list');
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Remove the background color of all tablinks/buttons
            for (i = 0; i < tablink.length; i++) {
                tablink[i].style.backgroundColor = "";
                tablink[i].className = tablink[i].className.replace(" border-right", "");

            }
            console.log(tablink);
            elmnt.className += " border-right";
            document.getElementById(pageName).style.display = "block";
            }
            $('#defaultOpen').click();

    </script>

</body>
</html>
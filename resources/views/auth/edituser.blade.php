@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('plugins/cropperjs/cropper.css') }}">
@endsection

@section('content')
    <div class="container bg-white vh-100">
        <div class="row w-100">
            <div class="col-12 text-center">
                <label id="img_change"><img src="storage/avatars/{{ $user->avatar }}" id="images" class=" mt-5 mb-3 img-fluid shadow rounded-circle" style="width: 200;height:200;"></label>
                <input type="file" id="pp_input" style="display: none;" class="form-control-file w-100" aria-describedby="fileHelp" name="photo" >
                <h2 class="mb-3">{{ $user->name }}</h2>
                <hr class="w-75" >
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 border-right">
                <div class="ml-4">
                    <form action="profile/upload" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control w-100" placeholder="Masukkan Nama" value="{{ $user->name }}" name="" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Lengkap</label>
                            <input type="text" class="form-control w-100" placeholder="Masukkan Alamat" value="{{ $user->alamat }}"  name="" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control w-100" placeholder="Masukkan Email" value="{{ $user->email }}"  name="" id="">
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon</label>
                            <input type="text" class="form-control w-100" placeholder="Masukkan Nomor Telepon" value="{{ $user->name }}"  name="" id="">
                        </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="mr-4">
                        <div class="form-group">
                            <label for="">Current Password</label>
                            <input type="password" class="form-control w-100" placeholder="Masukkan Password Lama" name="" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control w-100" placeholder="Masukkan Password Baru" name=""  id="">
                        </div>
                        <div class="form-group">
                            <label for="">Password Konfirmasi</label>
                            <input type="password" class="form-control w-100" placeholder="Masukkan Ulang Password" name="" id="">
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
    
@endsection
@section('script')
   <script src="{{ asset('plugins/cropperjs/cropper.js') }}"></script>

    <script>
        $('#img_change').on('click',function(){
            $('#pp_input').click();
        });

        var croppers=null;
        var file=null;
        
        $('input[type=file]').on('change',function(){
            fileCount = this.files.length;
            if(fileCount && (this.files[0].type=="image/jpeg"||this.files[0].type=="image/jpg"||this.files[0].type=="image/png")){
                //Menampilkan Gambar ke Modal
                $('#modalimg').attr("src",URL.createObjectURL(event.target.files[0]));

                //Menampilkan Popup Modal
                $('#modalcrop').modal('show');

                //Memberikan Timeout/Waktu Jeda selama 0.5 Detik Untuk Menyiapkan Cropper JS (Jika tidak menggunakan ini, tidak dapat berjalan mulus)
                setTimeout(function(){
                    const image = document.getElementById('modalimg');
                    var height = $('#img').height();
                    var width = $('#img').width();

                    //Parameter dari Cropper JS (Baca di https://fengyuanchen.github.io/cropperjs/)
                    var cropper = new Cropper(image, {
                    viewMode: 3,
                    aspectRatio: 1 / 1,
                    movable: false,
                    zoomable: false,
                    width:width,
                    height:height,
                    crop(event) {
                    },
                    });

                    //Assignment hasil cropper ke variabel Global Croppers
                    croppers=cropper;
                    console.log(croppers);
                },500);
            }else{alert('Ekstensi File Harus Image');}
            
        });

        function cropping(){
            croppers.getCroppedCanvas({height:400,width:400}).toBlob(function(blob){
                //Untuk mengganti tampilan dengan gambar yang sudah di crop
                $("#images").attr('src',''+URL.createObjectURL(blob));

                //menyimpan hasil gambar yang sudah di potong ke dalam variabel global file
                file=blob;
                var formData = new FormData();

                console.log(file);
                //Cek Dulu, Apakah Gambarnya sudah dipilih
                if(file!=null){
                    formData.append('_token',' <?php echo csrf_token() ?>');
                    formData.append('photo', file, "img.jpg");
                }
                $.ajax({
                    url : '/profile/upload',
                    data : formData,
                    type : 'POST',
                    processData: false,
                    contentType: false,
                    success : function(data){
                        alert('Data Berhasil di Kirim');
                    }
                });
                //Menutup Popup Modal
                $('#modalcrop').modal('hide');
            },'image/jpeg',0.8);

            
        }
        
        
    </script>
    
@endsection
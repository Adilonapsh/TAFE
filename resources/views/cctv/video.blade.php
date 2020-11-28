@extends('layouts.app')
@section('content')
<div class="container bg-white">
    <div class="p-4">
        <h4 class="text-center">Video File</h4>
        <hr>
    </div>
    <div class="row vids p-4"></div>
</div>
<!-- Large modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <video src="http://192.168.10.49:8080/v/Adilonapsh_2020-11-22_19-50.mkv">
    </div>
  </div>
</div>
    
@endsection

@section('script')
    <script>
        var root = [];

        @foreach($cuser as $cctv)
            var ip = "{{ $cctv->cctv_ip }}"
            var replace = ip.replace('video','');
            root.push(replace);
        @endforeach

        async function getvideos() { //Async Function
            for(i=0;i<root.length;i++){
                await new Promise(next=>{
                    var sivid = root[i]+'v/';
                    var sikep = root[i]+'t/';
                    $.getJSON(root[i]+"list_videos", function(data) {
                        for(s=0;s<data.length;s++){
                            $('.vids').append('<div class="col-3"><a href="'+sivid+data[s].name+'" class="passdata" id="'+data[s].name+'" data-toggle="modal" data-target=".bd-example-modal-lg" ><img src="'+sikep+data[s].name+'" class="img-fluid" alt="">'+'<p class="text-center">'+data[s].name+'</p></a></div>');
                        }
                        console.log("dones");
                    });
                    next();
                })
            }
        }

        getvideos();
        $(".passdata").on('click',function() {
           var idss= $(".passdata").id();
            console.log(idss);
        });
        //     
        //     $.ajax({
                // type:'GET',
                // url:root[i]+'list_videos',
                // data:{ get_param:'value' },
                // dataType:'json',
                // success: function(data){
            //             for(s=0;s<data.length;s++){
        //                 var sivid = root[i]+'v/';
        //                 var sikep = root[i]+'t/';
        //                 $('.vids').append('<div class="col-3"><a href="'+sivid+data[s].name+'"><img src="'+sikep+data[s].name+'" class="img-fluid" alt="">'+'<p class="text-center">'+data[s].name+'</p></a></div>');
        //             }
        //             console.log("dones");
        //         }
        //     });
        //     console.log("dones");
        
        // }
        
        // console.log(root);
        </script>
@endsection


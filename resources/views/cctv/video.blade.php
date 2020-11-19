@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row vids">
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

        for(i=0;i<root.length;i++){
            if(root[i]==undefined){
                i=i+1;
            }
            var sikep = root[i]+'t/';
            var sivid = root[i]+'v/';
            $.getJSON(root[i]+"list_videos", function(data) {
                for(s=0;s<data.length;s++){
                    $('.vids').append('<div class="col-3"><a href="'+sivid+data[s].name+'"><img src="'+sikep+data[s].name+'" class="img-fluid" alt="">'+'<p class="text-center">'+data[s].name+'</p></a></div>');
                }
            });
            console.log(sikep);
        }
            
        // console.log(root);
    </script>
@endsection
@extends('layouts.app')
@section('content')
<div class="container bg-white">
    <div class="p-4">
        <h4 class="text-center">Video File</h4>
        <hr>
    </div>
    <div class="row vids p-4"></div>
        
</>

    
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
                            $('.vids').append('<div class="col-3"><a href="'+sivid+data[s].name+'"><img src="'+sikep+data[s].name+'" class="img-fluid" alt="">'+'<p class="text-center">'+data[s].name+'</p></a></div>');
                        }
                        console.log("dones");
                    });
                    next();
                })
            }
        }

        getvideos();
        //     
        //     $.ajax({
        //         type:'GET',
        //         url:root[i]+'list_videos',
        //         data:{ get_param:'value' },
        //         dataType:'json',
        //         success: function(data){
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
CREATE TABLE public.ippt_non_koordinat
(
    tgl_sk date,
    no_resi character varying,
    tahun real,
    bulan numeric(20,0),
    lokasi_izin_jalan character varying,
    lokasi_izin_kec character varying,
    lokasi_izin_kel character varying,
    tgl_daftar date,
    nama_pemohon character varying,
    alamat_pemohon character varying,
    no_surat_tanah character varying(100),
    peruntukan character varying(200),
    jenis_peruntukan character varying(200),
    kode character varying(200),
    funsi_bangunan character varying(100),
    luas_tanah character varying(20),
    gsb character varying(20),
    gss character varying(20),
    kdb character varying(100),
    jumlah_lantai character varying(20),
    kdb_mak character varying(20),
    ippt_klb_max character varying(20),
    x double precision,
    y double precision
)

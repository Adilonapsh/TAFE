
var root = "";
var takefoto = $('#takefoto');
var camsel = $('#cam_selection');
var flashcb = $('#flashcb');
var record = $('#Rec_btn');
var stoprec = $('#Stoprec_btn');
var ctv = [];
var id = [];
var camname = [];
var camclick=[];
var config = [];
var sensor =[];
var status = {};

// Static 
// ctv1.click(function(){
//     root = 'http://192.168.0.100:8080'
//     takefoto.attr("href", root+"/photo.jpg");
//     camsel.text('Cam 1');
//     console.log(root);
// });
// ctv2.click(function(){
//     root = 'http://192.168.0.105:8080';
//     takefoto.attr("href", root+"/photo.jpg");
//     camsel.text('Cam 2');
//     console.log(root);
// });
// ctv3.click(function(){
//     root = 'http://192.168.0.101:8080';
//     takefoto.attr("href", root+"/photo.jpg");
//     camsel.text('Cam 3');
//     console.log(root);
// });
// ctv4.click(function(){
//     root = 'http://192.168.0.104:8080';
//     takefoto.attr("href",root+"/photo.jpg");
//     camsel.text('Cam 4');
//     console.log(root);
// });

$(document).ready(function() {
    callajax();
    try{
        for(i=0;i<100;i++){
            var k = 'ctv';
            var ctvsrc = $('.cctvclass').find('img')[i].src; //ambil URL view dari database
            var ids = $('.cctvclass')[i].id; //ambil id contoh #CCTV1..
            // var cnm = $('#ctvname'+i).text();
            var replace = ctvsrc.replace('video',''); //Replace url dari 192.168.0.0/video ke 192.168.0.0/
            ctv[i] = replace; //simpan url replace ke replace array
            id[i] = '#'+ids; //simpan id ke id id array

            // for (i in ctv ) {
            //     camclick[i] = $(id[i]).click(function(){
            //         root = ctv[0];
            //         takefoto.attr("href", root+"photo.jpg");
            //         camsel.text(i);
            //         console.log(root);
            //     });
            // }
            console.log("ctv"+i+" = "+ ctv[i]);
            console.log(id[i]);

            // console.log(camclick);
            
            if(typeof ctvsrc === 'undefined'){ //jika ctv tidak ada / undifined maka loop berhenti
                break;
            }
        }
    }
    catch(err){
        console.log('Error occured !');
    }

    for(i in id){ 
        $(id[i]).click(function(){ //jika id di click maka  fugis ini jalan
            wreck = $('#'+this.id).find('img').attr('src');
            replace = wreck.replace('video','');
            root = replace; //ganti URL ke root
            takefoto.attr("href", root+"photo.jpg"); //ambil atribut href dan tampatkan root/PushSubscriptionOptions.jpg
            camsel.text(this.id); //ganti sidebar header cam ke id ini
            console.log('Clicked'+this.id);
            console.log(root);
            callajax();
        });
    }
    //flash
    flashcb.click(function() {
        if (flashcb.is(":checked")) {
        $.ajax(root+'/enabletorch')
        } else {
        $.ajax(root+'/disabletorch')
        }
    });
    
    //record
    record.click(function(){
        $.ajax(root+'/startvideo?force=1&tag=Adilonapsh');
    });
    stoprec.click(function(){
        $.ajax(root+'/stopvideo?force=1');
    });

    // $.ajax({
    //     url: root+"photo.jpg",
    //     error: function(){
    //         console.log('Mati');
    //     },
    //     success: function(){
    //         console.log('Nyala');
    //     }
    // });
});





$('.bar').on('input', function () {
    var val1 = $("#range_zoom").val();
    var val2 = $("#stream_quality").val();
    var val3 = $("#exposure").val();
    var val4 = $("#night_vision_gain").val();
    $('#RZL').text(val1 + ' X');
    $('#TSQ').text(val2);
    $('#TEC').text(val3);
    $('#TNVG').text(val4);
    $.ajax(root+'/ptz?zoom='+val1); 
    $.ajax(root+'/settings/quality?set='+val2);
    $.ajax(root+'/settings/exposure?set='+val3);
    $.ajax(root+'/settings/night_vision_gain?set='+val4);
});
 
function callajax(){
    $.ajax(root+'status.json?show_avail=1')
        .done(function (data) {
            config = data;
        })
        .fail(function (xhr, textStatus, errorThrown) {
            console.log("error occured");
        });
        console.log(config);
}
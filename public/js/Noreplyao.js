
var root = "http://192.168.0.105:8080/";
var takefoto = $('#takefoto');
var camsel = $('#cam_selection');
var flashcb = $('#flashbtn');
var nvcb = $('nightvisioncb');
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
        $(id[i]).click(function(){ //jika id di click maka  fungsi ini jalan
            wreck = $('#'+this.id).find('img').attr('src');
            replace = wreck.replace('video','');
            root = replace; //ganti URL ke root
            takefoto.attr("href", root+"photo.jpg"); //ambil atribut href dan tampatkan root/PushSubscriptionOptions.jpg
            camsel.text(this.id); //ganti sidebar header cam ke id ini
            console.log('Clicked'+this.id);
            console.log(root);
            callajax();
            // console.log(ctv[1]);
        });
    }
    //Night Vision 
    nvcb.click(function(){
        if (nvcb.is(":checked")){
            $.ajax(root+'/settings/night_vision?set=on');
            console.log(nvcb);
        }else{
            $.ajax(root+'/settings/night_vision?set=off');
            console.log(nvcb);
        }
    });
    //flash
    var flashes = false;
    flashcb.click(function() {
        if (flashes) {
            $.ajax(root+'/enabletorch');
            flashes=!flashes;
        } else {
            $.ajax(root+'/disabletorch');
            flashes=!flashes;

        }
    });
    
    //record
    record.click(function(){
        // $.ajax(root+'status.json?show_avail=1')
        //     .done(function(data) {
        //         console.log(data["video_status"]["mode"]);
        //         if (data["video_status"]["mode"])=="manual")
        //     })
        //     .fail(function (xhr, textStatus, errorThrown) {
        //         console.log("error occured");
        // });
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
    for(s=0;s<ctv.length;s++){
        $.ajax(ctv[s]+'status.json?show_avail=1')
            .done(function (data) {
                config[s] = [data];
            })
            .fail(function (xhr, textStatus, errorThrown) {
                console.log("error occured");
        });
    }
    console.log(config);
}




// Code For Socket IO

var u = 0;
var p = false;
var r1 = false;
var r2 = false;
var r3 = false;
var start = 0;
var stop = 0;
var socket = io.connect('http://localhost:2001');
socket.on('ultra',function(message){
    // console.log(message);
    u = message;
});
socket.on('pir',function(message){
    // console.log(message);
    p = message;
    if(u>=41 && p==true){ //Jika Pintu dibuka dan ada pergerakan Record
        if (start==0){
            // $.ajax(root+'/startvideo?force=1&tag=Automatic_Record');
            console.log("Record Started");
            start+=1;
            stop=0;
        }else{
            console.log("Sudah Dimulai");
        }
    }
    else{
        if (stop==0){
            // $.ajax(root+'/startvideo?force=1&tag=Automatic_Record');
            console.log("Record Stopped");
            stop+=1;
            start=0;
        }else{
            console.log("Sudah Distop");
        }
    }
});
socket.on('relay1',function(message){
    // console.log(message);
    r1 = message;
});
socket.on('relay2',function(message){
    // console.log(message);
    r2 = message;
});
socket.on('relay3',function(message){
    // console.log(message);
    r3 = message;
});


// function automaticrecord(){
    // if(u>=41 && p==true){
    //     // $.ajax(root+'/startvideo?force=1&tag=Automatic_Record');
    //     console.log("Record Started");
    // }
    // else if(u<=40 && p==false){
    //     // $.ajax(root+'/startvideo?force=1&tag=Automatic_Record');
    //     console.log("Record Stopwwwped");
    // }
// }
// automaticrecord();

var root = "";
var ctv1=$('#cctv1');
var ctv2=$('#cctv2');
var ctv3=$('#cctv3');
var ctv4=$('#cctv4');
var takefoto = $('#takefoto');
var camsel = $('#cam_selection');

ctv1.click(function(){
    root = 'http://192.168.43.1:8080';
    takefoto.attr("href", root+"/photo.jpg");
    camsel.text('Cam 1');
    console.log(root);
});
ctv2.click(function(){
    root = 'http://192.168.0.102:8080';
    takefoto.attr("href", root+"/photo.jpg");
    camsel.text('Cam 2');
    console.log(root);
});
ctv3.click(function(){
    root = 'http://192.168.0.101:8080';
    takefoto.attr("href", root+"/photo.jpg");
    camsel.text('Cam 3');
    console.log(root);
});
ctv4.click(function(){
    root = 'http://192.168.0.104:8080';
    takefoto.attr("href",root+"/photo.jpg");
    camsel.text('Cam 4');
    console.log(root);
});

//flash
var flashcb = $('#flashcb')
.click(function() {
    if (flashcb.is(":checked")) {
    $.ajax(root+'/enabletorch').fail(display_error('cannot_set', 'torch'))
    } else {
    $.ajax(root+'/disabletorch').fail(display_error('cannot_set', 'torch'))
    }
});
//record
$('#Rec_btn').click(function(){
    $.ajax(root+'/startvideo?force=1&tag=Adilonapsh');
});
$('#Stoprec_btn').click(function(){
    $.ajax(root+'/stopvideo?force=1');
});



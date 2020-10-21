<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <input type="text" id="textmessage">
    <button type="submit" id="submit-text">Kirim</button>
    <div class="ultra">
        <ul>

        </ul>
    </div>
    <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
    <script src="{{ asset('plugins/socket.io-client/dist/socket.io.js') }}"></script>
    <script type="text/javascript">
        var socket = io.connect('http://localhost:2001');
        jQuery(document).ready(function($){
            $('#submit-text').click(function(){
                if($('#textmessage').val()!=""){
                    socket.emit('sendtexttoserver',$('#textmessage').val());
                }else{
                    alert('Press Enter to chat !');
                }
            })
        });
        socket.on('ultra',function(message){
            // console.log(message);
            $('.ultra ul').append('<li>'+message+'</li>');
        });
    </script>
</body>
</html>
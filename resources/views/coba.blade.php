<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/font.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
  <title>Document</title>
</head>
<body style="font-family: scandia-line-web">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque rerum consequuntur laudantium ratione fuga voluptas velit nihil vitae porro natus?</p>    
    <input type="text" max="1">
    <div data-aos="fade-right" data-aos-delay="1000" data-aos-duration="800" data-aos-easing="ease"
    data-aos-once="false"
    data-aos-anchor-placement="top-center">
        <img src="{{ asset('Assets/Images/test.jpg') }}" alt="">
    </div>

    <input type="text" id="inputs">
    <button id="button">clik disini bro</button>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();

        if($('#button').click()){
          $('#button').click(function(){
            var i = 0;
            if(i==1){
              $('#inputs').val('jangan lupa'); 
              console.log(i);
              i+0 ;
            }
            else if(i==0){
              $('#inputs').val('jangan pulang'); 
              console.log(i);
              i+1;
            }
            else{
              $('#inputs').val('ngga tau'); 
              console.log(i);
            }
          })
        }
    </script>
</body>
</html>
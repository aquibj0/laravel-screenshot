<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Noto+Serif:wght@400;700&display=swap"
        rel="stylesheet"> --}}
    
    <!-- CSS only -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}

    <style>

        body{
            margin: 0;
            padding: 0;
            height: 868px;
            width:1227.8px;           
            
        }
        .cert-body{
            display: block;
            height: 100%;
            width: 100%;
            overflow: hidden;
            background: url('/images/cert.png');
            background-position: center;
            background-size: 100%;
            overflow: hidden;
            background-repeat: no-repeat;
        }
        img{
            max-width: 100%;
            max-height: 100%;
        }
        .name{
            position: absolute;
            z-index: 9999;
            font-size: 99px;
            /* font-family: 'Great Vibes', cursive; */
            top: 292px;
            left: 105px;
        }
        .description{
            position: absolute;
            z-index: 9999;            
            top: 442px;
            left: 105px;
        }
        .description p{
            font-size: 22px;
            font-family: 'Noto Serif', serif;
            font-weight: 400 !important;
            color: #545454;
        }
        .description span{
            font-family: 'Noto Serif', serif;
            font-weight: 700;
        }
        /* .cer-body{} */
    </style>    
</head>
<body>
    <div class="cert-body">
        <img src="{{$certificate_path}}" class="" alt="">
    </div>
</body>
</html>
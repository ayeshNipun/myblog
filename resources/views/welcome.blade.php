<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tec Hour - Welcome</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/anim.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            html, body {
                max-width: 100%;
                overflow-x: hidden;
                background-image: url('/img/background.png');
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            
            .links{
                margin-top: 10%;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .link > a {
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            svg {
                font: 10.5em 'Raleway';
                margin: 0 auto;
            }

            .text-copy {
                fill: none;
                stroke: white;
                stroke-dasharray: 6% 29%;
                stroke-width: 15px;
                stroke-dashoffset: 0%;
                animation: stroke-offset 5.5s infinite linear;
            }

            .text-copy:nth-child(1){
            	stroke: black;
            	animation-delay: -1;
            }

            .text-copy:nth-child(2){
            	stroke: #ff0000;
            	animation-delay: -2s;
            }

            .text-copy:nth-child(3){
            	stroke: #40ff00;
            	animation-delay: -3s;
            }

            .text-copy:nth-child(4){
            	stroke: #00ffff;
            	animation-delay: -4s;
            }

            .text-copy:nth-child(5){
            	stroke: #ffffff;
            	animation-delay: -5s;
            }

            @keyframes stroke-offset{
            	100% {stroke-dashoffset: -35%;}
            }  

            .aboutUS{
                margin-top: 15%;
            }  

            .Title{
                color: white;
            } 

            .link{
                text-decoration: none;
            }

            .card{
                margin-bottom: 4cm;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" style="height:100%">
            <div class="content">
                <div>
                    <p>
                        <h1 class="animh1" data-heading1="Tec" data-heading2="o">Tec</h1>
                        <h1 class="animh2" data-heading2="Hour">Hour</h1>
                    </p>  
                </div>
                    
                <div class="links">
                    <a href="/blog"><i class="fa fa-book"></i> Blog</a>
                    <a href="/aboutus"><i class="fa fa-question-circle"></i> About Us</a>
                    <a href="https://www.facebook.com/TecHour-2092875584315088/"><i class="fa fa-facebook-square"></i> Join Us On Facebook</a>
                    <a href="/contact"><i class="fa fa-phone"></i> Contact</a>
                </div>    
            </div>
        </div>

        
        <div class="card mx-auto" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Subscribe Here..</h5><br><br>
                {!! Form::open(['action' => 'SubscribesController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                    <div>
                        {{Form::label('name', 'Your Name')}}
                        {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Enter Your Name'])}}
                    </div><br>
                    <div>
                        {{Form::label('email', 'E Mail')}}
                        {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Enter Your E Mail'])}}
                    </div><br>
                    <div>
                        {{Form::submit('Subscribe', ['class'=>'btn btn-default'])}}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        

        <div class="whatAbout text-center" style="height:100%">
            <h2 class="Title">What Is This About</h2>
            <div>
                <p>
                    This is s blog, that made to give you some knowledge about many fields in the world.
                </p>
                <p class="link">
                    <a href="/blog">Click Here</a> to read out posts.
                </p>
            </div>   
        </div>


        <div class="reachUS text-center" style="height:100%">
            <h2 class="Title">Reach Us</h2>
            <div>
                <p class="link">
                    <a href="https://www.facebook.com/TecHour-2092875584315088/">Click here</a> to join Us On Facebook.
                </p>
                OR <br><br>
                <p>
                    Email us at <span>nipun.yesh@gmail.com</span>
                </p>
            </div>   
        </div>
    </body>
</html>

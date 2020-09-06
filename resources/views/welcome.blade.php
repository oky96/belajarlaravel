<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(216, 235, 250);
                color: #262829;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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

            .links > a {
                color: #131414;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        {{-- <a href="{{ url('/home') }}">Home</a> --}}
                    @else
                        <a href="{{ route('login') }}"class="btn btn-outline-warning"><span>Login</span></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"class="btn btn-outline-danger"><span>Register</span></a>
                        @endif
                    @endauth
                </div>
            @endif
        <div class="content">
                 {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fawsimages.detik.net.id%2Fcommunity%2Fmedia%2Fvisual%2F2020%2F05%2F18%2F7c8aa94d-0145-4fa9-9558-3017cf25e0d2_169.jpeg%3Fw%3D700%26q%3D90&imgrefurl=https%3A%2F%2Finet.detik.com%2Fconsumer%2Fd-5019486%2Fasus-tuf-gaming-fx506-piawai-ngegame-dan-bikin-konten&tbnid=GPDLHu5qbmRS4M&vet=12ahUKEwiBxOrYjdTrAhVWCLcAHe_XCKYQMygTegUIARDbAQ..i&docid=QNqKeTmstaRHqM&w=700&h=392&q=tuf&safe=strict&ved=2ahUKEwiBxOrYjdTrAhVWCLcAHe_XCKYQMygTegUIARDbAQ" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div> --}}
                 <div class="title m-b-md">
                   INTEK SERVICE
                </div>
               <h2>
                innovations, solutions and the future</h2>
             </div>
        </div>

        {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}
    </body>
</html>

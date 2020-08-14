<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/9ab15cc71e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('front/app.css') }}" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="{{ asset('front/app_mobile.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">

</head>

<body data-spy="scroll" data-target="#navbar" data-offset="0">

    <div class="top" id="top">
        <div class="top-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-transparent" id="navbar">
                    <a class="navbar-brand" href="#"><img src="a.jpg"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" data-scroll href="#top">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-scroll href="#portfolio">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-scroll href="#services">services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-scroll href="#pricing">Pricing</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-scroll href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>

        <div id="c" class="carousel slide h-100" data-ride="carousel">
            <div class="carousel-inner h-100">
                <?php $i=0;?>
                @foreach (\App\Slider::all() as $item)
                <div class="carousel-item h-100 bg {{$i==0?'active':''}}" data-interval="5000" style="
                      background: url({{asset($item->image)}});
                    "></div>
                <?php $i+=1;?>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#c" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#c" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="carousel-indicators w-100 p-0 m-0" style="bottom: 0; background: rgba(0, 0, 0, 0.4);">
            <div class="m-3">
                <div class="row">
                    <div class="col-md-6  font-size-bold" style="color: gold;">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis
                            explicabo sit fuga amet, esse illo aspernatur quo placeat
                        </p>
                        <p style="color: white;">
                            Maitidevi Kathmandu, Nepal
                            <a style="text-decoration: none;color:#F8DC50;cursor:pointer;font-weight:700;" href="#">
                                View in map
                            </a>
                        </p>
                    </div>
                    <div class="col-md-6 text-right down" style="vertical-align: middle;">
                        <a data-scroll href="#portfolio"><img src="{{asset('front/down.png')}}" /></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('front.portfolio')
    @include('front.cta')
    @include('front.services')
    @include('front.contact')

    @if(Session::has('ok'))
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="icon-box">
                        <i style="color:white" class="fas fa-check"></i>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <h4>Great!</h4>
                    <p>Your Message has Been Received, we will contact you soon.</p>

                </div>
            </div>
        </div>

        @endif
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js">
        </script>
        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        @if(Session::has('ok'))
            $(document).ready(function(){
                $("#myModal").modal('show');
            });
        @endif
        </script>


        @if(Session::has('ok'))
        <?php Session::forget('ok');?>
        @endif
</body>

</html>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('front/app.css') }}" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="{{ asset('front/app_mobile.css') }}" rel="stylesheet">


</head>

<body>

    <div class="top">
        <div class="top-header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
                    <a class="navbar-brand" href="#"><img src="a.jpg"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide h-100" data-ride="carousel">
            <div class="carousel-inner h-100">
                <div class="carousel-item h-100 bg active" data-interval="3000"
                    style="background: url(https://wallpaperaccess.com/full/391239.jpg);">
                </div>
                <div class="carousel-item h-100 bg" data-interval="3000"
                    style="background: url(https://i.pinimg.com/originals/9f/92/12/9f921271e5473567938a1de95bbf149f.jpg);">
                </div>
                <div class="carousel-item h-100 bg" data-interval="3000" style="
                background: url(https://wallpapersko.com/wp-content/uploads/2018/06/2k-wallpaper.jpg);">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="carousel-indicators w-100 p-0 m-0" style="bottom: 0; background: rgba(0, 0, 0, 0.4);">
        <div class=" m-3">
            <div class="row">
                <div class="col-md-6 text-white font-size-bold">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis
                        explicabo sit fuga amet, esse illo aspernatur quo placeat
                    </p>
                    <p style="color: gold;">address heere and now where</p>
                </div>
                <div class="col-md-6 text-right down" style="vertical-align: middle;">
                    <i class="fa fa-arrow-circle-down fa-3x" style="color: gold; margin-top: auto;"
                        aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
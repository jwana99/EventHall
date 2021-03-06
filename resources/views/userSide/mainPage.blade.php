<!DOCTYPE html>
<html lang="en" class="scrollbar" id="style-10">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Custom fonts for this template -->
{{--<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'--}}
{{--type='text/css'>--}}
<!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="/../assets/css/nucleo-icons.css" rel="stylesheet"/>

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Event halls</title>
    <style>
        body {
            overflow-x: hidden;
            font-family: 'Raleway', sans-serif;
        }

        .zain-bg {
            background: linear-gradient(to bottom right, #6e4f90 0%, #5561AB 100%)
        }

        .zain-light-bg {
            background-color: white;
        }

        .faded {
            opacity: 0.8;
        }

        .image-size {
            height: 25vh;
            object-fit: cover;
        }

        .round {
            border-radius: 50px 50px;
        }

        header.masthead {
            text-align: center;
            /*color: white;*/
            background-image: url("/eventpic.png");
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-position: center center;
            background-size: cover;
            /*opacity: 0.8;*/
            /*background-opacity: 0.8;*/
            /*height: 60vh;*/

        }

        #mainNav .navbar-brand {
            font-size: 35px;
            color: white;
            font-family: 'Kaushan Script', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
        }

        header.masthead .intro-text {
            padding-top: 0;
            padding-bottom: 0;
        }

        .h-smth {
            height: 60vh;
        }

        #mainNav .navbar-nav .nav-item .nav-link {
            font-size: 90%;
            font-weight: 600;
            padding: 0.75em 0;
            letter-spacing: 1px;
            color: white;
            font-family: 'Raleway', sans-serif;
        }

        .scrollbar {
            /*margin-left: 30px;*/
            float: left;
            height: 480px;
            width: 100%;
            /*background: #F5F5F5;*/
            overflow-y: scroll;
            margin-bottom: 25px;
        }

        #style-10::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        #style-10::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-10::-webkit-scrollbar-thumb {
            background-color: #AAA;
            border-radius: 10px;
            background-image: -webkit-linear-gradient(90deg,
            rgba(0, 0, 0, .2) 25%,
            transparent 25%,
            transparent 50%,
            rgba(0, 0, 0, .2) 50%,
            rgba(0, 0, 0, .2) 75%,
            transparent 75%,
            transparent)
        }


    </style>

</head>

<body>
<div id="search">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger purple">Event halls</a>
            <button class="navbar-toggler navbar-toggler-right zain-bg" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation ">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/favorites/user">Favorites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/owners/add">Add place</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/dashboard/">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/about/">About</a>
                    </li>
                </ul>
                @unless(Auth::check())
                    <form class="form-inline my-2 my-lg-0">
                        <a href="/redirect/google"
                           class="text-white">{{ __('Sign in') }}</a>
                    </form>
                @endunless
                @if(Auth::check())
                    <h6 class="text-white font-weight-bold">{{auth()->user()->name}}</h6>
                    <a href="/logout">
                        <i class="tim-icons icon-user-run text-white ml-4 text-center mb-2 font-weight-bold"></i>
                    </a>
                @endif
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <section class="text-center">
            <div class="container mt-4">

                <div class="row justify-content-center my-2">
                    <div class="col-md-5 col-6">
                        <input v-model="findPlace" type="text" class="form-control my-0 mt-4"
                               placeholder="Look for a place or a location">

                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex">
                            <div class="dropdown mr-1 mt-4">
                                <button type="button" class="btn zain-light-bg btn-outline-secondary dropdown-toggle"
                                        id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-offset="10,20">
                                    Price
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    <a @click="getPlaces(null,selectedType)" class="dropdown-item">All
                                        places</a>
                                    <a @click="getPlaces('asc',selectedType)" class="dropdown-item">lowest</a>
                                    <a @click="getPlaces('desc',selectedType)" class="dropdown-item">Highest</a>
                                </div>
                            </div>
                            <div class="dropdown mt-4">
                                <button type="button" class="btn zain-light-bg btn-outline-secondary dropdown-toggle"
                                        id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-offset="10,20">
                                    Type
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    <a @click="getPlaces(selectedSort,null)" class="dropdown-item">All types</a>
                                    <a v-for="type in types" @click="getPlaces(selectedSort,type.type)"
                                       class="dropdown-item">@{{ type.type }}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>


        {{--<div class="intro-text">--}}
            {{--<div class="row justify-content-center align-items-center h-smth">--}}
                {{--<div class="col-md-5 col-3 p-0">--}}

                {{--</div>--}}
                {{--<div class="col-md-1 col-3">--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </header>

    <div class="container">
        <h4 class="mt-3">Available places:</h4>
        <div class="row justify-content-center">
            <div v-for="place in searchedPlaces" class="col-md-4 col-12 mt-4">
                <div class="card">
                    <img :src="place.image" class="card-img image-size" alt="...">
                    <div class="card-body">

                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <h5><a :href="`/places/place/${place.id}`">@{{ place.place_name }}</a></h5>
                            </div>
                            @if(Auth::check())
                                <div class="col-auto">
                                        <span><a href="#" v-if="place.is_favorited"
                                                 @click.prevent="unFavorite(place.id)">
                                                    <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="#" v-else @click.prevent="favorite(place.id)">
                                                    <i class="far fa-heart"></i>
                                            </a>
                                        </span>
                                </div>
                            @endif
                        </div>
                        <div class="row m-0 p-0 justify-content-between">
                            <div class="col-12">
                                <small class="p-0 m-0">@{{ place.location }}</small>
                            </div>
                            <br>
                            <div class="col">
                                <small>Number of halls: 3</small>
                            </div>
                            <div class="row justify-content-end p-0 m-0">
                                <div class="col-auto">
                                    <small>@{{ place.low_price }}$-@{{ place.high_price }}$</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="my-5">
    <div class="container">
        <hr>
    </div>
    <div class="row justify-content-around mt-2 mb-0 pb-0">
        <div class="col-md-6 text-muted mb-0 pb-0">
            <p>The ownership totally goes to Jwana.</p>
            <div class="d-flex">

                <i class="tim-icons icon-email-85 mr-2 mt-1"></i>
                <p>Email me at jwanaalfatla1999@gmail.com</p>

            </div>
        </div>
        <div class="col-md-3 text-muted mb-0 pb-0">
            <p class="float-right">لا يوجد لدينا فرع اخر</p>
            <br>
        </div>
    </div>
        {{--<p class="float-right">--}}
            {{--<a href="#">Back to top</a>--}}
        {{--</p>--}}
        {{--<p>Album example is © Bootstrap, but please download and customize it for yourself!</p>--}}
        {{--<p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a--}}
                    {{--href="/docs/4.3/getting-started/introduction/">getting started guide</a>.</p>--}}
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<!-- Bootstrap core JavaScript -->
{{--<script src="vendor/jquery/jquery.min.js"></script>--}}
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
{{--<script src="/js/agency.js"></script>--}}
<script src="js/agency.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<!-- Plugin JavaScript -->
{{--<script src="vendor/jquery-easing/jquery.easing.min.js"></script>--}}

<!-- Contact form JavaScript -->
{{--<script src="js/jqBootstrapValidation.js"></script>--}}
{{--<script src="js/contact_me.js"></script>--}}

<!-- Custom scripts for this template -->

</body>

</html>

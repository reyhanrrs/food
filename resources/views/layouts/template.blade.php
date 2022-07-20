<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="{{asset('templates/css/templatemo-style.css')}}" rel="stylesheet" />
</head>

<body>
    <!-- @ include('layouts/navbar') -->
    <div class="container">
        <!-- Top box -->
        <!-- Logo & Site Name -->
        <div class="placeholder">
            <div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('templates/img/simple-house-01.jpg')}}">
                <div class="tm-header">
                    <div class="row tm-header-inner">
                        <div class="col-md-6 col-12">
                            <img src="{{asset('templates/img/simple-house-logo.png')}}" alt="Logo" class="tm-site-logo" />
                            <div class="tm-site-text-box">
                                <h1 class="tm-site-title">Simple House</h1>
                                <h6 class="tm-site-description">new restaurant template</h6>
                            </div>
                        </div>
                        <nav class="col-md-6 col-12 tm-nav">
                            <ul class="tm-nav-ul">
                                <li class="tm-nav-li"><a href="index.html" class="tm-nav-link active">Home</a></li>
                                <li class="tm-nav-li"><a href="about.html" class="tm-nav-link">About</a></li>
                                <li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <footer class="tm-footer text-center">
            <p>Copyright &copy; 2020 Simple House

                | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
        </footer>
    </div>
    <script src="{{asset('templates/js/jquery.min.js')}}"></script>
    <script src="{{asset('templates/js/parallax.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            // Handle click on paging links
            $('.tm-paging-link').click(function(e) {
                e.preventDefault();

                var page = $(this).text().toLowerCase();
                $('.tm-gallery-page').addClass('hidden');
                $('#tm-gallery-page-' + page).removeClass('hidden');
                $('.tm-paging-link').removeClass('active');
                $(this).addClass("active");
            });
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
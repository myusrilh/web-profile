<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="icon" href="{{ URL::to('/') }}/images/logo_yusril_white.png">
    <script src="https://use.fontawesome.com/91d2e862cb.js"></script>

    <title>@yield('judul_halaman')</title>

    <style>
        @media screen and (min-width:1366px) and (max-height:768px) {
            body {
                background-image: url("{{ URL::to('/') }}/images/bg-profile.jpg");
                background-size: cover;
            }

            .header {
                padding: 20px;
                width: 100%;
            }

            .logo {
                padding-left: 20px;
                position: absolute;
                left: 0;
            }


            .navbar {
                padding-right: 70px;
                position: absolute;
                right: 0;
            }

            /* Logo + name at header */
            .logo-desc {
                display: inline-block;
                padding-left: 10px;
            }

            /* Logo name header */
            h4.logo-desc {
                color: aliceblue;
            }

            .navbar,
            .navbar ul li {
                display: inline-block;
            }

            /* navbar link education, skill and contact */
            .navbar ul li {
                padding-left: 10px;
                padding-right: 10px;
            }

            .navbar ul li a {
                text-decoration: none;
                color: aliceblue;
                font-size: 20px;
            }

            /* when cursor hover over navbar */
            .navbar ul li a:hover {
                color: rgb(66, 115, 161);
            }

            .navbar ul li a {
                text-decoration: none;
                color: aliceblue;
            }

            /* profile card white transparent */
            .profile-container {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: 30px;
                text-align: center;
                padding: 30px;
                /* bring your own prefixes */
                transform: translate(-50%, -50%);
                background: #FFFFFF30;
                border-radius: 20px;
            }

            #android {
                font-size: 18px;
            }

            .description {
                padding-top: 10px;
                padding-bottom: 40px;
            }

            .description h3 {
                color: white;
            }

            .description p {
                font-size: 16px;
                color: #9bc7ff;
            }

            .contact {
                text-align: center;
            }

            .contact>table,
            th,
            td {
                border: 2px solid white;
                border-collapse: collapse;
                padding: 5px;
            }

            .contact table {
                margin-left: auto;
                margin-right: auto;
            }

            .contact a {
                padding: 0 10px;
                font-size: 30px;
                text-decoration: none;
                color: white;
            }

            #facebook:hover {
                color: #3b5998;
            }

            #whatsapp:hover {
                color: #25d366;
            }

            #email:hover {
                color: #dd4b39;
            }

            #linkedin:hover {
                color: #0077b5;
            }

            #github:hover {
                color: #000000;
            }

            #behance:hover {
                color: #1769ff;
            }



            /* Experience card white transparent */
            .experience-container {
                position: absolute;
                top: 50%;
                left: 50%;
                padding-left: auto;
                padding-right: auto;
                padding: 50px;
                /* bring your own prefixes */
                transform: translate(-50%, -50%);
                background: #FFFFFF30;
                border-radius: 20px;
            }

            .experience-container ol li {
                color: white;
            }

            /* Achievement */
            ol.achievement-description {
                width: 200px;
                padding: 10px;
                background: #236ecf;
                color: aliceblue;
                position: absolute;
                display: none;
            }

            ol.achievement-description li h5 {
                font-size: 12px;
            }

            a.achievement:hover~ol.achievement-description {
                display: block;
            }

            /* Skill */
            .skill-container {
                position: absolute;
                top: 50%;
                left: 50%;
                padding-left: auto;
                padding-right: auto;
                padding: 50px;
                /* bring your own prefixes */
                transform: translate(-50%, -50%);
                background: #FFFFFF30;
                border-radius: 20px;
            }

            .skill-container ol li {
                font-size: 16px;
                color: white;
            }

            .scroll {
                color: white;
                margin-top: 500px;
                bottom: 0;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }

            .scroll i {
                font-size: 30px;
                "

            }

            .software-container {
                width: 1000px;
                text-align: center;
                margin-top: 100px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 50px;
                top: 50%;
                left: 50%;
                background: #236ecf50;
                border-radius: 20px;

            }

            #programming-container,
            #design-container {
                margin: 50px;
            }

            .software {
                margin: 0 100px;
                display: inline-block;
            }

            .programming-logo {
                display: inline-block;
                padding: 0 30px;
            }

            .design-logo {
                display: inline-block;
                padding: 0 30px;
            }



        }

    </style>
</head>

<body>
    <div class="header">
        <a title="Home" href="{{ url('home') }}" class="logo">
            <img class="logo-desc" src="{{ URL::to('/') }}/images/logo_yusril_white.png" width="50" alt="">
            <h4 class="logo-desc">myusrilh</h4>
        </a>
        <div class="navbar">
            <ul>
                <li>
                    <a class="achievement" href="#">Prestasi</a>
                    <ol class="achievement-description">
                        <li>
                            <h5>1. Juara 2 Komite Putra Senior Kelas E Jujitsu UISI
                                Championship tingkat SMA/Sederajat se-Kabupaten
                                Gresik tahun 2017</h5>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <h5>2. Juara Harapan 1 Lomba Desain Logo Jurusan Teknologi Informasi
                                Politeknik Negeri Malang tahun 2020</h5>
                        </li>
                    </ol>
                </li>
                <li><a href="{{ url('skill') }}">Kemampuan</a></li>
                <li><a href="{{ url('experience') }}">Pengalaman</a></li>
            </ul>
        </div>
    </div>

    @yield('konten')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script>
        $(document).ready(function() {
            $(".logo").hover(function() {
                $("img.logo-desc").attr("src", "{{ URL::to('/') }}/images/logo_yusril_black.png");
                $("h4.logo-desc").css("color", "black");
            }, function() {
                $("img.logo-desc").attr("src", "{{ URL::to('/') }}/images/logo_yusril_white.png");
                $("h4.logo-desc").css("color", "aliceblue");
            });

            $(".scroll #scroll-down-arrow").click(function() {
                $(window).animate({
                    scrollTop: $(".software-container").offset().top
                }, 500);
            });
        });

    </script>
</body>

</html>

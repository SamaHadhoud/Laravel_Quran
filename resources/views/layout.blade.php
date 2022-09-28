<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" id="csrf-token" content="{{csrf_token()}}">
    <title>The Noble Quran - Quran.com </title>
    <link rel="icon" href="{{ asset("favicon.ico")}}"/>
    <link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css") }}"  />
    <link rel="stylesheet" href="{{ asset("/css/all.min.css") }}" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600&family=Roboto:wght@300;400;500&display=swap"
        rel="stylesheet">
    <script src="{{ asset("/js/bootstrap.bundle.min.js") }}"> </script>
    <script src="{{ asset("/js/all.min.js") }}"> </script>
    <script src="https://kit.fontawesome.com/4dfff8e68d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<script>
$.ajaxSetup({

    headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

    }

    });
</script>

<body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">

<nav class="navbar bg-light fixed-top p-2 pe-5 ps-5 ">
        <div class=" row d-flex justify-content-between flex-fill">
            <div class="col">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand fs-2 ps-2" href="/">Quran.com</a>
            </div>
            <div class=" col d-flex justify-content-end">
                <button class="navbar-toggler p-3 fa-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"aria-controls="offcanvasNavbar">
                    <span class="fa-solid fa-user "></span>
                </button>

                <span class ="nav-item dropdown">
                <button class="navbar-toggler p-3 fa-lg dropdown-toggle" href = "#navbarDropdown" role="button" data-bs-toggle="dropdown" data-bs-target="dropdown" aria-haspopup="true" >
                        <span class="fa-solid fa-globe"></span>
                </button>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" id = "navbarDropdown" data-bs-popper = "static">

                @foreach (Config::get('languages') as $lang => $language)

                    @if ($lang != App::getLocale())

                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                    @else
                    <a class="dropdown-item active" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                    @endif

                @endforeach
                </div>
                </span>

                <button class="navbar-toggler p-3 fa-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"aria-controls="offcanvasNavbar">
                <span class="fa-solid fa-gear"></span>
                </button>
                <button class="navbar-toggler p-3 fa-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="fa-solid fa-magnifying-glass"></span>
                </button>
            </div>
        </div>
        <div class="offcanvas {{(App::isLocale('ar') ? 'offcanvas-end' : 'offcanvas-start')}} " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title fs-3" id="offcanvasNavbarLabel">Quran.com</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 ">
                    <ul class="list-group list-group-flush fs-5 fw-light">
                        <li class="nav-item list-group-item ">
                            <a class="nav-link active d-inline fs-6 fw-bold" aria-current="page"> {{__("MENU")}} </a>
                        </li>
                        <li class="nav-item list-group-item nav-link" onclick='location.href="index.php"'>
                            <span class="fa-solid fa-house " href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="/" > {{__("Home")}} </a>
                        </li>
                        <li class="nav-item list-group-item nav-link">
                            <span class="fa-solid fa-radio " href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#">{{__("Quran Radio")}} </a>
                        </li>
                        <li class="nav-item list-group-item nav-link">
                            <span class="fa-solid fa-tower-broadcast" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> {{__("Reciters")}} </a>
                        </li>
                        <li class="nav-item list-group-item nav-link">
                            <span class="fa-solid fa-circle-exclamation" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> {{__("About Us")}} </a>
                        </li>
                        <li class="nav-item list-group-item nav-link">
                            <span class="fa-solid fa-mobile-screen" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> {{__("Mobile Apps")}} </a>
                        </li>
                        <li class="nav-item list-group-item nav-link">
                            <span class="fa-solid fa-code" href="#"></span>
                            <a class="nav-link active d-inline ms-2" aria-current="page" href="#"> {{__("Developers")}}  </a>
                        </li>
                        <li class="nav-item list-group-item nav-link">
                            <span class="fa-solid fa-lock" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> {{__("Privacy")}}</a>
                        </li>
                        <li class="nav-item list-group-item nav-link">
                            <span class="fa-solid fa-clock-rotate-left" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> {{__("Product Updates")}} </a>
                        </li>
                        <li class="nav-item list-group-item nav-link">
                            <span class="fa-solid fa-message" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> {{__("Feedback")}} </a>
                            <span class="fa-solid fa-square-arrow-up-right position-absolute {{(App::isLocale('ar') ? 'start-0' : 'end-0')}}  top-49"></span>
                        </li>
                        <li class="nav-item list-group-item nav-link">
                            <span class="fa-solid fa-circle-question" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> {{__("Help")}} </a>
                        </li>
                        <li class="list-group-item ">
                            <a class="nav-link active d-inline fs-6 fw-bold" aria-current="page" href="#"> {{__("NETWORK")}} </a>
                        </li>
                        <li class="nav-item list-group-item nav-link" onclick='location.href="https://quranicaudio.com/"' >
                            <span class="fa-brands fa-gofore" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" > Quranicaudio.com </a>
                            <span class="fa-solid fa-square-arrow-up-right position-absolute {{(App::isLocale('ar') ? 'start-0' : 'end-0')}}  top-49"></span>
                        </li>
                        <li class="nav-item list-group-item nav-link " onclick='location.href="https://salah.com/"'>
                            <span class="fa-brands fa-gofore" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> Salah.com </a>
                            <span class="fa-solid fa-square-arrow-up-right position-absolute {{(App::isLocale('ar') ? 'start-0' : 'end-0')}}  top-49"></span>
                        </li>
                        <li class="nav-item list-group-item nav-link " onclick='location.href="https://sunnah.com/"'>
                            <span class="fa-brands fa-gofore" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> Sunnah.com  </a>
                            <span class="fa-solid fa-square-arrow-up-right position-absolute {{(App::isLocale('ar') ? 'start-0' : 'end-0')}}  top-49"></span>
                        </li>
                        <li class="nav-item list-group-item nav-link " onclick='location.href="https://legacy.quran.com/"'>
                            <span class="fa-brands fa-gofore" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> Legacy.quran.com </a>
                            <span class="fa-solid fa-square-arrow-up-right position-absolute {{(App::isLocale('ar') ? 'start-0' : 'end-0')}}  top-49"></span>
                        </li>
                        <li class="nav-item list-group-item nav-link " onclick='location.href="https://previous.quran.com/"'>
                            <span class="fa-brands fa-gofore" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> Previous.quran.com </a>
                            <span class="fa-solid fa-square-arrow-up-right position-absolute {{(App::isLocale('ar') ? 'start-0' : 'end-0')}}  top-49"></span>
                        </li>
                        <li class="nav-item list-group-item nav-link " onclick='location.href="https://corpus.quran.com/"'>
                            <span class="fa-brands fa-gofore" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> Corpus.quran.com </a>
                            <span class="fa-solid fa-square-arrow-up-right position-absolute {{(App::isLocale('ar') ? 'start-0' : 'end-0')}}  top-49"></span>
                        </li>
                        <li class="nav-item list-group-item nav-link " onclick='location.href="https://quranreflect.com/"'>
                            <span class="fa-brands fa-gofore" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> Quranreflect.com </a>
                            <span class="fa-solid fa-square-arrow-up-right position-absolute {{(App::isLocale('ar') ? 'start-0' : 'end-0')}}  top-49"></span>
                        </li>
                        <li class="nav-item list-group-item nav-link " onclick='location.href="https://www.tarteel.ai/"''>
                            <span class="fa-brands fa-gofore" href="#"></span>
                            <a class="nav-link active d-inline " aria-current="page" href="#"> {{__("Tarteel.ai")}} </a>
                            <span class="fa-solid fa-square-arrow-up-right position-absolute {{(App::isLocale('ar') ? 'start-0' : 'end-0')}}  top-49"></span>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>

    </nav>
    @yield ('body')

    <footer>
        <div class="container d-flex d-flex flex-wrap foot " style="margin-top: 20px;">
            <div class = "col col-12 col-lg-6">
                <h1 class=" fs-4"> Quran.com </h1>
                <h2 class=" fs-5"> {{__("Read, study, and learn The Noble Quran.")}} </h2>
                <h3 class=" fs-6"> {{__("Quran.com is a Sadaqah Jariyah. We hope to make it easy for everyone to read, study, and learn The Noble Quran. The Noble Quran has many names including Al-Quran Al-Kareem, Al-Ketab, Al-Furqan, Al-Maw'itha, Al-Thikr, and Al-Noor.")}}</h3>
            </div>
            <div class = "col col-4 col-lg-2">
                <li class="nav-item list-group-item nav-link">
                    <a class="nav-link active d-inline fs-6 fw-bold" aria-current="page" href="#"> {{__("Navigate")}} </a>
                </li>
                <li class="nav-item list-group-item nav-link">
                    <a class="nav-link active d-inline m-1" aria-current="page" href="/"> {{__("Home")}} </a>
                </li>
                <li class="nav-item list-group-item nav-link">
                    <a class="nav-link active d-inline m-1" aria-current="page" href="#">{{__("Quran Radio")}} </a>
                </li>
                <li class="nav-item list-group-item nav-link">
                    <a class="nav-link active d-inline m-1" aria-current="page" href="#"> {{__("Reciters")}} </a>
                </li>
                <li class="nav-item list-group-item nav-link">
                    <a class="nav-link active d-inline m-1" aria-current="page" href="#"> {{__("About Us")}}</a>
                </li>
                <li class="nav-item list-group-item nav-link">
                    <a class="nav-link active d-inline m-1" aria-current="page" href="#"> {{__("Mobile Apps")}} </a>
                </li>
                <li class="nav-item list-group-item nav-link">
                    <a class="nav-link active d-inline m-1" aria-current="page" href="#"> {{__("Developers")}} </a>
                </li>
                <li class="nav-item list-group-item nav-link">
                    <a class="nav-link active d-inline m-1" aria-current="page" href="#"> {{__("Privacy")}}</a>
                </li>
                <li class="nav-item list-group-item nav-link">
                    <a class="nav-link active d-inline m-1" aria-current="page" href="#"> {{__("Product Updates")}} </a>
                </li>
                <li class="nav-item list-group-item nav-link">
                    <a class="nav-link active d-inline m-1" aria-current="page" href="#"> {{__("Feedback")}} </a>
                </li>
                <li class="nav-item list-group-item nav-link">
                    <a class="nav-link active d-inline m-1 " aria-current="page" href="#"> {{__("Help")}} </a>
                </li>
            </div>
            <div class ="col col-4 col-lg-2">
                <li class="nav-item list-group-item nav-link">
                    <a class="nav-link active d-inline fs-6 fw-bold" aria-current="page" href="#"> {{__("NETWORK")}} </a>
                </li>
                <li class="nav-item list-group-item nav-link ">
                    <a class="nav-link active d-inline m-1" aria-current="page" href="https://quranicaudio.com/" target="_blank"> Quranicaudio.com </a>
                </li>
                <li class="nav-item list-group-item nav-link ">
                    <a class="nav-link active d-inline m-1" aria-current="page" href="https://salah.com/" target="_blank"> Salah.com </a>
                </li>
                <li class="nav-item list-group-item nav-link ">
                    <a class="nav-link active d-inline m-1" aria-current="page" href="https://sunnah.com/" target="_blank">Sunnah.com </a>
                </li>
                <li class="nav-item list-group-item nav-link ">
                    <a class="nav-link active d-inline ms-3" aria-current="page" href="https://legacy.quran.com/" target="_blank"> Legacy.quran.com </a>
                </li>
                <li class="nav-item list-group-item nav-link ">
                    <a class="nav-link active d-inline ms-3" aria-current="page" href="https://previous.quran.com/" target="_blank">Previous.quran.com </a>
                </li>
                <li class="nav-item list-group-item nav-link ">
                    <a class="nav-link active d-inline ms-3" aria-current="page" href="https://corpus.quran.com/"target="_blank"> Corpus.quran.com </a>
                </li>
                <li class="nav-item list-group-item nav-link ">
                    <a class="nav-link active d-inline ms-3" aria-current="page" href="https://quranreflect.com/" target="_blank"> Quranreflect.com </a>
                </li>
                <li class="nav-item list-group-item nav-link ">
                    <a class="nav-link active d-inline ms-3" aria-current="page" href="https://www.tarteel.ai/" target="_blank"> Tarteel.ai  </a>
                </li>
            </div>
            <div class = "col col-4 col-lg-2">
                <li class="nav-item list-group-item nav-link">
                        <a class="nav-link active d-inline fs-6 fw-bold" aria-current="page" href="#"> {{__("Popular Links")}}</a>
                    </li>
                    <li class="nav-item list-group-item nav-link">
                        <a class="nav-link active d-inline m-1" aria-current="page" href='/{{'36'}}'> {{__("Ya-Sin")}} </a>
                    </li>
                    <li class="nav-item list-group-item nav-link">
                        <a class="nav-link active d-inline m-1" aria-current="page" href='/{{'67'}}'> {{__("Al Mulk")}} </a>
                    </li>
                    <li class="nav-item list-group-item nav-link">
                        <a class="nav-link active d-inline m-1" aria-current="page" href='/{{'56'}}'> {{__("Al Waqi'ah")}} </a>
                    </li>
                    <li class="nav-item list-group-item nav-link">
                        <a class="nav-link active d-inline m-1" aria-current="page" href='/{{'18'}}'> {{__("Al Kahf")}} </a>
                    </li>
                    <li class="nav-item list-group-item nav-link">
                        <a class="nav-link active d-inline m-1" aria-current="page" href="#"> {{__( "Al Muzzammil")}}</a>
                    </li>
                </div>
        </div>
    </footer>


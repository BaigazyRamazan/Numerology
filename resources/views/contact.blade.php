<!DOCTYPE html>
<html>

<head>
    <title>Contact us</title>
    <link rel="stylesheet" href="{{asset('css/project.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=09772ffd-68ac-457f-aa1b-d4858168a4a7&lang=en_US" type="text/javascript">
    </script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="icons/lab3.svg">
    <meta name="viewport" content="width=device-width, initiale-scale=1">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map("map", {
                center: [43.234093, 76.847840],
                zoom: 11
            });

            var map2 = new ymaps.Map("map2", {
                center: [43.234093, 76.847840],
                zoom: 11
            });

            var sdu = new ymaps.Placemark([43.207332, 76.669671], {
                // balloonContent: 'Suleyman Demirel University',
                balloonContentBody: [
                    '<address>',
                    '<strong>Suleyman Demirel University</strong>',
                    '<br/>',
                    'Address: Almaty region, Karasay area 040900, Kaskelen city, Abylai khan street, 1/1',
                    '<br/>',
                    'For more information, see: <a href="https://sdu.edu.kz/ru/suleyman-demirel-university-ru/">https://sdu.edu.kz/ru/suleyman-demirel-university-ru/</a>',
                    '</address>'
                ].join(''),
                hintContent: 'This is where I study'
            }, {
                iconLayout: 'default#image',
                iconImageHref: 'https://www.pngkey.com/png/detail/131-1311026_graduate-school-icon-university-icon-blue.png',
                iconImageSize: [30, 30],
                iconImageOffset: [-5, -38]
            });
            var sduA = new ymaps.Placemark([43.207332, 76.669671], {
                // balloonContent: 'Suleyman Demirel University',
                balloonContentBody: [
                    '<address>',
                    '<strong>Suleyman Demirel University</strong>',
                    '<br/>',
                    'Address: Almaty region, Karasay area 040900, Kaskelen city, Abylai khan street, 1/1',
                    '<br/>',
                    'For more information, see: <a href="https://sdu.edu.kz/ru/suleyman-demirel-university-ru/">https://sdu.edu.kz/ru/suleyman-demirel-university-ru/</a>',
                    '</address>'
                ].join(''),
                hintContent: 'This is where I study'
            }, {
                iconLayout: 'default#image',
                iconImageHref: 'https://www.pngkey.com/png/detail/131-1311026_graduate-school-icon-university-icon-blue.png',
                iconImageSize: [30, 30],
                iconImageOffset: [-5, -38]
            });

            var home1 = new ymaps.Placemark([43.212858, 76.845109], {
                balloonContentBody: [
                    "<address>",
                    "<strong>My aunt's house</strong>",
                    "<br/>",
                    "Address: Almaty, Mamyr-1 shaǵyn aýdany, 29/8",
                    "</address>",
                ].join(''),
                hintContent: "My location in Almaty"
            }, {
                iconLayout: 'default#image',
                iconImageHref: 'https://i.pinimg.com/originals/cf/e5/76/cfe576ce33c269239f7f5bddac1bb5de.png',
                iconImageSize: [40, 40],
                iconImageOffset: [-5, -38]
            });
            var home1A = new ymaps.Placemark([43.212858, 76.845109], {
                balloonContentBody: [
                    "<address>",
                    "<strong>My aunt's house</strong>",
                    "<br/>",
                    "Address: Almaty, Mamyr-1 shaǵyn aýdany, 29/8",
                    "</address>",
                ].join(''),
                hintContent: "My location in Almaty"
            }, {
                iconLayout: 'default#image',
                iconImageHref: 'https://i.pinimg.com/originals/cf/e5/76/cfe576ce33c269239f7f5bddac1bb5de.png',
                iconImageSize: [40, 40],
                iconImageOffset: [-5, -38]
            });

            var home2 = new ymaps.Placemark([43.214165, 76.900361], {
                balloonContentBody: [
                    "<address>",
                    "<strong>My grandma's house</strong>",
                    "<br/>",
                    "Address: Almaty, Zharokov Street, 269А",
                    "</address>",
                ].join(''),
                hintContent: "My second location in Almaty"
            }, {
                iconLayout: 'default#image',
                iconImageHref: 'https://i.pinimg.com/originals/cf/e5/76/cfe576ce33c269239f7f5bddac1bb5de.png',
                iconImageSize: [40, 40],
                iconImageOffset: [-5, -38]
            });
            var home2A = new ymaps.Placemark([43.214165, 76.900361], {
                balloonContentBody: [
                    "<address>",
                    "<strong>My grandma's house</strong>",
                    "<br/>",
                    "Address: Almaty, Zharokov Street, 269А",
                    "</address>",
                ].join(''),
                hintContent: "My second location in Almaty"
            }, {
                iconLayout: 'default#image',
                iconImageHref: 'https://i.pinimg.com/originals/cf/e5/76/cfe576ce33c269239f7f5bddac1bb5de.png',
                iconImageSize: [40, 40],
                iconImageOffset: [-5, -38]
            });

            var pathBus = new ymaps.Polyline([
                [43.214198, 76.857966],
                [43.217230, 76.863857],
                [43.221609, 76.869721],
                [43.217164, 76.876005],
                [43.218232, 76.877428],
                [43.220835, 76.881531],
                [43.222931, 76.885157],
                [43.224616, 76.887408],
                [43.225155, 76.896382],
                [43.216144, 76.897500]
            ], {
                hintContent: 'Path from 1st home to 2nd home',
            }, {
                strokeWidth: 4
            });
            var pathBusA = new ymaps.Polyline([
                [43.214198, 76.857966],
                [43.217230, 76.863857],
                [43.221609, 76.869721],
                [43.217164, 76.876005],
                [43.218232, 76.877428],
                [43.220835, 76.881531],
                [43.222931, 76.885157],
                [43.224616, 76.887408],
                [43.225155, 76.896382],
                [43.216144, 76.897500]
            ], {
                hintContent: 'Path from 1st home to 2nd home',
            }, {
                strokeWidth: 4
            });

            var path1 = new ymaps.Polyline([
                [43.212051, 76.845289],
                [43.213605, 76.851808],
                [43.211761, 76.852745],
                [43.214198, 76.857966],
            ], {
                hintContent: 'Path from 1st home to 2nd home',
            }, {
                strokeColor: '#888888',
                strokeWidth: 4
            });
            var path1A = new ymaps.Polyline([
                [43.212051, 76.845289],
                [43.213605, 76.851808],
                [43.211761, 76.852745],
                [43.214198, 76.857966],
            ], {
                hintContent: 'Path from 1st home to 2nd home',
            }, {
                strokeColor: '#888888',
                strokeWidth: 4
            });
            var path2 = new ymaps.Polyline([
                [43.216144, 76.897500],
                [43.215631, 76.897515],
                [43.215631, 76.897812],
                [43.214092, 76.897964],
                [43.214341, 76.901144]
            ], {
                hintContent: 'Path from 1st home to 2nd home',
            }, {
                strokeColor: '#888888',
                strokeWidth: 4
            });

            var path2A = new ymaps.Polyline([
                [43.216144, 76.897500],
                [43.215631, 76.897515],
                [43.215631, 76.897812],
                [43.214092, 76.897964],
                [43.214341, 76.901144]
            ], {
                hintContent: 'Path from 1st home to 2nd home',
            }, {
                strokeColor: '#888888',
                strokeWidth: 4
            });

            myMap.geoObjects
                .add(sdu)
                .add(home1)
                .add(home2)
                .add(pathBus)
                .add(path1)
                .add(path2);
            map2.geoObjects
                .add(sduA)
                .add(home1A)
                .add(home2A)
                .add(pathBusA)
                .add(path1A)
                .add(path2A);
        }
    </script>
    <style type="text/css">
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        /* Optional: Makes the sample page fill the window. */
    </style>
</head>

<body>
    <script src="project.js"></script>
    <div class="my-icon-bar">
        <!-- <p class="my-active" style="margin: 0;">Home</p> -->
        <a href="javascript:void(0)" onclick="barOpen()" class="hidesm w3-bar-item w3-blue w3-button">
            <i class="fa"></i>
        </a>
        <div class="slide-bar w3-wide">
            <a href="{{route('main',app()->getLocale())}}">{{__('Home')}}</a>
        </div>
        <div class="w3-wide slide-bar"><a href="javascript:void(0)" onclick="alert('This link is not available')">{{__('Numbers')}}</a></div>
        <div class="w3-wide slide-bar my-active ">{{__('Contact us')}}</div>
        @guest
            @if (Route::has('login'))
                <div class="slide-barPHP">
                    <a class="" href="{{ route('login',app()->getLocale()) }}">
                        {{ __('Login') }}
                    </a>                                
                </div>
            @endif
                            
            @if (Route::has('register'))
                <div class="slide-barPHP">
                    <a class="" href="{{ route('register',app()->getLocale()) }}">
                        {{ __('Register') }}
                    </a>
                </div>
            @endif
            @else
                <div class="slide-bar">
                    <img style="height: 30px;" class="rounded-circle" src="{{asset('images/'.Auth::user()->profile)}}">
                    <a id="navbarDropdown" class=" dropdown-toggle" href="#"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdownPHP" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item dropdown-itemPHP" href="{{ route('profile',app()->getLocale()) }}">
                            {{__('Profile')}}
                        </a>
                        <a class="dropdown-item dropdown-itemPHP" href="{{ route('logout',app()->getLocale()) }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest
            <div class="slide-barPHP">
                <a id="navbarDropdown" class=" dropdown-toggle" href="#"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fa fa-globe"></i> {{__('Language')}}
                </a>

                <div class="dropdown-menu" style="width: auto; background-color: rgb(37, 47, 78);" aria-labelledby="navbarDropdown">
                    <a href="{{route(Route::currentRouteName(),'en')}}" class="dropdown-item dropdown-itemPHP">EN</a>
                    <a href="{{route(Route::currentRouteName(),'ru')}}" class="dropdown-item dropdown-itemPHP">RU</a>
                </div>
            </div>
    </div>
    <div class="my-accordion">
        <a href="javascript:void(0)" onclick="barClose()" class="w3-button w3-large w3-right">x</a>
        <br>
        <div class="w3-container">
            <div><a href="index.html" class="w3-button w3-block w3-large w3-wide">{{__('Home')}}</a></div>
            <div><a href="javascript:void(0)" class="w3-button w3-block w3-large w3-wide" onclick="alert('This link is not available')">{{__('Numbers')}}</a></div>
        </div>
    </div>
    <div class="contact">
        <div id="map"></div>
        <div>
            <h1>{{__('Get in touch')}}</h1>
            <div class="information">
                <div class="location">
                    <h3>{{__('My location')}}</h3>
                    <p><i class="fas fa-map-pin"></i><a href="https://yandex.com/maps/-/CCUE4WUpkA">{{__('Astana City District, Aqtóbe qalalyq ákimdigi, Aqtóbe oblysy, Kazakhstan')}}</a></p>
                </div>
                <div class="contact-us">
                    <h3>{{__('Contact us')}}</h3>
                    <p><i class="fas fa-phone"></i>&nbsp; 8 (7132) XX-XX-XX</p>
                    <p><i class="fab fa-whatsapp"></i>&nbsp; 8 (775) XXX-XX-XX</p>
                    <p><i class="material-icons">mail</i><a href="@mailto:190103273@stu.sdu.edu.kz">190103273@stu.sdu.edu.kz</a>
                    </p>
                </div>
            </div>
            <div class="follow">
                <h3>{{__('Follow us')}}</h3>
                <div class="icons-container">
                    <div>
                        <a href=""><i class="fa fa-facebook"></i></a>
                    </div>
                    <div>
                        <a href=""><i class="fab fa-vk"></i></a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/baigazy1312/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second-map">
        <div id="map2"></div>
    </div>
    <div class="jumbotron">
        <div class="container">
            <h3>{{__('Comment')}}:</h3>
            <form  method="POST" action="{{route('comments',app()->getLocale())}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
            </form>
        </div>
    </div>
</body>

</html>
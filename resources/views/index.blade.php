<!DOCTYPE html>
<html>

<head>
    <title>Numeroscop Online</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/project.css')}}">
    <meta name="viewport" content="width=device-width, initiale-scale=1">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="icons/lab3.svg">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/project.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        class Numerology {
            calculate_Expression_Number(name) {
                name = name.toString();
                name = name.toUpperCase();
                var sum = 0;
                for (var i = 0; i < name.length; i++) {
                    sum += ((name.charCodeAt(i) - 'A'.charCodeAt(0)) % 9) + 1;
                }
                return this.recursive_Function(sum);
            }
            recursive_Function(num) {
                if (num > 0 && num < 10) return num;
                else {
                    var sum = 0;

                    while (num > 0) {
                        sum += (num % 10);
                        num = Math.floor(num / 10);
                    }

                    return this.recursive_Function(sum);
                }
            }
            calculate_Desire_Number(name) {
                name = name.toString();
                name = name.toUpperCase();
                var sum = 0;
                for (var i = 0; i < name.length; i++) {
                    if (name.charAt(i) == 'A') {
                        sum += 1;
                    } else if (name.charAt(i) == 'E') {
                        sum += 5;
                    } else if (name.charAt(i) == 'U') {
                        sum += 3;
                    } else if (name.charAt(i) == 'O') {
                        sum += 6;
                    } else if (name.charAt(i) == 'I') {
                        sum += 9;
                    }
                }
                return this.recursive_Function(sum);
            }
            calculate_Personality_Number(name) {
                name = name.toString();
                name = name.toUpperCase();

                name = name.replaceAll("A", "");
                name = name.replaceAll('I', '');
                name = name.replaceAll('E', '');
                name = name.replaceAll('U', '');
                name = name.replaceAll('O', '');

                return this.calculate_Expression_Number(name);
            }
            calculate_LifePath_Number(date) {

                var sum = 0;
                for (var i = 0; i < date.length; i++) {
                    date[i] = parseInt(date[i]);
                    sum += date[i];
                }

                return this.recursive_Function(sum);
            }
            calculate_Day_Number(date) {

                return this.recursive_Function(parseInt(date[0]));
            }
            calculate_Month_Number(date) {

                return this.recursive_Function(parseInt(date[1]));
            }
        }
    </script>
</head>

<body style="background-color: rgb(37, 47, 78);">
    <div class="my-icon-bar">
        <a href="javascript:void(0)" onclick="barOpen()" class="hidesm w3-bar-item w3-blue w3-button">
            <i class="fa fa-bars"></i>
        </a>
        <div class="my-active slide-bar w3-wide">{{__('Home')}}</div>
        <div class="w3-wide slide-bar"><a href="javascript:void(0)" onclick="alert('This link is not available')">{{__('Numbers')}}</a></div>
        <div class="w3-wide slide-bar">
            <a href="{{ route('contact',app()->getLocale()) }}">{{__('Contact us')}}</a>
        </div>
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
        <!-- </ul> -->
    </div>
    <div class="my-accordion">
        <a href="javascript:void(0)" onclick="barClose()" class="w3-button w3-large w3-right">x</a>
        <br>
        <div class="w3-container">
            <!-- <div><a href="name.html" class="w3-button w3-block w3-large w3-wide">Name</a></div>
            <div><a href="name.html" class="w3-button w3-block w3-large w3-wide">Birth Date</a></div> -->
            <div><a href="javascript:void(0)" class="w3-button w3-block w3-large w3-wide" onclick="alert('This link is not available')">Numbers</a></div>
            <div>
                <a href="contact.html" class="w3-button w3-block w3-large w3-wide">Contact us</a>
            </div>
            <div class="logout-sm w3-large" onclick="logOut()">
                <i class="material-icons">person</i>
                <p style="white-space: normal;" id="logOut-sm">{{ __('Dashboard') }}</p>
            </div>
            <div class="sign-up-sm">
                <a class="w3-block w3-button w3-wide w3-large" href="{{route('register',app()->getLocale())}}">Sign Up</a>
            </div>
        </div>
    </div>
    <div class="my-main">
        <!-- <div class="dashboard w3-wide">
            <i class="material-icons">person</i>
            <p style="white-space: normal;" id="logOut">{{ __('Dashboard')}}</p>
        </div> -->
        <div class="main-paragraph">
            <h1>{{__('Numerology online')}}</h1>
            <h2>{{__('Analysis of name and date of birth in one click')}}</h2>
            <hr>
            <br>
            <p style="font-size: 120%">{{__('Get free access to a unique analysis of name and date of birth. Find out all about your destiny, personality, future, relationships, work and more.')}}</p>
        </div>
    </div>
    <div class="my-body">
        <div class="body-input">
                <h6>{{__('Enter your data')}}</h6>
                <label for="fullName">{{__('Full Name')}}(<i>{{__('maiden name,if you have')}}</i>):</label>
                <input type="text" name="Full Name" placeholder="Please,enter your name" id="fullName">
                <br>
                <label>{{__('Birth date')}}:</label>
                <select name="bday" id="birthDay">
                        <option value="1" selected="">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                <select name="bmonth" id="birthMonth">
                        <option value="1" selected="">{{__('January')}}</option>
                        <option value="2">{{__('February')}}</option>
                        <option value="3">{{__('March')}}</option>
                        <option value="4">{{__('April')}}</option>
                        <option value="5">{{__('May')}}</option>
                        <option value="6">{{__('June')}}</option>
                        <option value="7">{{__('July')}}</option>
                        <option value="8">{{__('August')}}</option>
                        <option value="9">{{__('September')}}</option>
                        <option value="10">{{__('October')}}</option>
                        <option value="11">{{__('November')}}</option>
                        <option value="12">{{__('December')}}</option>
                    </select>
                <select name="byear" id="birthYear">
                    <option value="1920">1920</option>
                    <option value="1921">1921</option>
                    <option value="1922">1922</option>
                    <option value="1923">1923</option>
                    <option value="1924">1924</option>
                    <option value="1925">1925</option>
                    <option value="1926">1926</option>
                    <option value="1927">1927</option>
                    <option value="1928">1928</option>
                    <option value="1929">1929</option>
                    <option value="1930">1930</option>
                    <option value="1931">1931</option>
                    <option value="1932">1932</option>
                    <option value="1933">1933</option>
                    <option value="1934">1934</option>
                    <option value="1935">1935</option>
                    <option value="1936">1936</option>
                    <option value="1937">1937</option>
                    <option value="1938">1938</option>
                    <option value="1939">1939</option>
                    <option value="1940">1940</option>
                    <option value="1941">1941</option>
                    <option value="1942">1942</option>
                    <option value="1943">1943</option>
                    <option value="1944">1944</option>
                    <option value="1945">1945</option>
                    <option value="1946">1946</option>
                    <option value="1947">1947</option>
                    <option value="1948">1948</option>
                    <option value="1949">1949</option>
                    <option value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>
                    <option value="1953">1953</option>
                    <option value="1954">1954</option>
                    <option value="1955">1955</option>
                    <option value="1956">1956</option>
                    <option value="1957">1957</option>                    
                    <option value="1958">1958</option>
                    <option value="1959">1959</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>                    
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970" selected="">1970</option>                    
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>                    
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>                    
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>                    
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>                    
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>                 
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>                    
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
                <input type="submit" name="calulate" onclick="numerology()">
        </div>
        <div id="myResult">
            <div class="result">
                <h1>{{__('FULL NAME NUMBERS')}}</h1>
                <h2 id="nameNumerology"></h2>
                <div class="my-content">
                    <div class="my-card card">
                        <img src="http://www.numeroscop.ru/img/icons/normal-number-icon.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h2 id="expressionNum" class="card-title numbers"></h2>
                            <p class="card-text">{{__('Expression Number')}}</p>
                        </div>
                    </div>
                    <div class="my-card card">
                        <img src="http://www.numeroscop.ru/img/icons/normal-number-icon.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h2 id="desireNum" class="card-title numbers"></h2>
                            <p class="card-text">{{__('Desire number')}}</p>
                        </div>
                    </div>
                    <div class="my-card card">
                        <img src="http://www.numeroscop.ru/img/icons/normal-number-icon.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h2 id="personalityNum" class="card-title numbers"></h2>
                            <p class="card-text">{{__('Personality number')}}</p>
                        </div>
                    </div>
                </div>
                <div class="answer">
                    <h3>{{__('Expression Number')}}</h3>
                    <h4>{{__('In numerology, the')}} 
                        <a href=""> {{__('number of expressions')}} </a>
                    {{__('indicates the sphere of human capabilities')}}</h4>
                    <div class="jumbotron">
                        <h4 id="expressionNum1">{{__('Your expression number')}}: </h4>
                        <div id="arrowExpression" class="arrow">
                            <svg width="16" height="16">
                                <polygon points="0,0 16,0 8,6" style="fill: black;">
                            </svg>
                        </div>
                        <br><br>
                        <p id="eNum1">
                            {{__('“One” is a numerical code of a sense of duty and responsibility for each step taken. Of course, on a new, untapped path, since “repeating the past” does not impose any obligations on a person - the pioneer has already answered for everything.')}}
                        </p>
                        <p id="eNum2">
                            {{__('"Twos" are usually balanced, gentle, tactful and complacent. A distinctive feature of personality is the ability to "read" people, focusing not only on words, but also on facial expressions, gestures, intonations. As a result, the "two" can more clearly')}}
                        </p>
                        <p id="eNum3">
                           {{__('The number of the expression “Three” is the number of the Creator. But your creativity is of a very special kind and has nothing to do with what is usually taken to mean by this concept. You should not try to create monumental paintings, heavy architectural projects, and multivolume works of literature. And not at all because you are not given it. It&#180;s just that something else is destined for you. You bear the stamp of inescapable, indomitable optimism.')}} 
                        </p>
                        <p id="eNum4">
                            {{__('The "Four" is by no means devoid of imagination. It&#180;s just that her dreams are not vivid pictures in exuberant colors, but clear and rigorous drawings indicating the exact parameters of every detail.')}}
                        </p>
                        <p id="eNum5">
                            {{__('The meaning of the expression number 5 is, in fact, a warning to a person who is too prone to independence. If he categorically does not want to be bound by long-term obligations in order to preserve freedom of movement, then, in the end, no one owes him anything either. And this is acceptable only as long as there are forces that allow you to get up and walk again.')}}
                        </p>
                        <p id="eNum6">
                            {{__('The meaning of the number of the expression 6 is a sense of duty, which forms the basis of a life position and determines the fate of a person. The numerical code "6" practically guarantees its owner the absence of rest throughout his life. People in need of help will always appear in the field of view of the Six. And since such a person does not take credit for the good deeds he does, he never ceases to reproach himself for what he failed to do.')}}
                        </p>
                        <p id="eNum7">
                            {{__('The meaning of the expression number 7 in relation to the alleged fate of a person is usually unambiguous. He is a bright personality and a wonderful professional who is ready to share his skills with anyone. However, this readiness always has a touch of its own superiority. Therefore, the “seven” are reluctant to seek advice and help, which makes it difficult to establish close friendships.')}}
                        </p>
                        <p id="eNum8">
                            {{__('The value of the expression number 8 as a code of fate promises the owner a bright, eventful life, in which difficulties will alternate with triumphs. People "8" are the initiators of global changes taking place in humanity. Some are known to everyone, most are known only to a narrow circle of confidants.')}}
                        <p id="eNum9">
                            {{__('The meaning of the expression number 9 for the fate of its owner lies in the fact that he will have an eternal battle with windmills. Pure in heart and naive, person "9" firmly believes that no sacrifice will be excessive for the triumph of good and peace. The real chances of winning, as well as other practical considerations, does not bother him. Only the highest goal matters.')}}
                        </p>
                    </div>
                    <h3>{{__('Desire Number')}}</h3>
                    <h4>The <a href="">{{__('desire number')}}</a>{{__('shows the intrinsic motivation of a person.')}} </h4>
                    <div class="jumbotron">
                        <h4 id="desireNum1">{{__('Your desire number')}}: </h4>
                        <div id="arrowDesire" class="arrow">
                            <svg width="16" height="16">
                                <polygon points="0,0 16,0 8,6" style="fill: black;">
                            </svg>
                        </div>
                        <p id="desNum1">
                            {{__('Desire number 1 - one - the number of an impulsive person aimed at achieving high goals. Individualism and selfishness move you and give you a certain impetus to action. Having set a goal for themselves, people whose desire number is one do not dare to change course and rush forward. Do not tolerate restrictions on the spirit, which is why you deal with all problems from the very beginning. You are a fearless leader, persistent and determined.')}}
                        </p>
                        <p id="desNum2">
                            {{__('Desire number 2 is a symbol of a person who is calm in behavior and actions, soft, tactful, with the ability to find compromises, and able to control himself. You are a person with a confrontation between two equivalent principles acting in opposite directions from each other. Due to these confrontations, balance and calmness are maintained within you. You are easily submissive, passive and gentle. You are closer to the role of an advisor or designer than a performer.')}}
                        </p>
                        <p id="desNum3">
                            {{__('The number of the desire is 3 - the symbol of the human-Universe. Male will and female love are put together in you. Three means the complete opposite of the two parts of your inner self. The number 3 symbolizes the triangle of life between past, presentand future - Birth, Life and Death. As for the people themselves, whose desire number is 3, they are frivolous, frivolous, as a rule, they live one day, not paying attention to the everyday fuss. These people are not able to single-handedly cope with themselves, to reveal their own abilities. The main goal in life is to rise in the world, exercise control and power over others, although they themselves are excellent at coping with orders.')}}
                        </p>
                        <p id="desNum4">
                            {{__('Desire number 4 is a number representing the four elements, four seasons and four periods of life. People with a desire number of 4 are hardworking, balanced and reasonable. Everything they want to achieve is achieved by themselves. In discussions, they take the opposite position and very rarely give vent to emotions. They are “hostile” to the rules and instructions, they are drawn to reforms. A “four” stands for technical success.')}}
                        </p>
                        <p id="desNum5">
                            {{__('Desire number 5 is a symbol of a person who does not sit in one place, striving for self-improvement, seeking and gaining experience. You are an enthusiastic nature in need of adventure and risk. The decision to act comes spontaneously and suddenly. In life, you are ruled by a positive attitude, resourcefulness, wit and cheerfulness. You are directed only forward and think only about the positive outcome of everything, so that you do not take it. As a rule, people with a life number of 5 are nervous, adventurous and very mobile.')}}
                        </p>
                        <p id="desNum6">{{__('Desire number 6 is the number of a creative person, a symbol of family and the reunification of a man and a woman to create a new life. The number six also symbolizes the connection between God and Man. People with a life number of 6 are reliable, honest and able to gain respect and improvement not only in their own living conditions, but also in those around them. They are patient and have a natural inner magnetism, but they are tough and persistent in the implementation of their plans. They are very romantic and love art, they cannot stand jealousy and all kinds of strife. They easily find a common language with absolutely everyone. Have a great ability to make friendsand have a heightened sense of duty. You are a homebody, happy with your family and friends')}}</p>
                        <p id="desNum7">{{__('Desire number 7 - belong to the number of Sacred numbers, is a symbol of mystery and knowledge. It has long been believed that the number 7 means the basis of all evolution. It was the seven spirits that were entrusted by God with the power over the elements, from which all animals and plants were subsequently created. This number represents seven days of the week, seven colors of the rainbow, seven notes in a scale, etc. The person who owns the desire number 7 is a creative person, albeit with some oddities. Well-developed intuition, the ability to analyze, rich imagination and vivid imagination are the characteristic features of such people. As a rule, such people come out as artists, poets or other artists')}}
                        </p>
                        <p id="desNum8">
                            {{__('Desire number 8 is the number of material success, the number of reliable people who are able to bring everything to perfection. On the one hand, it is the number of a total coup or revolution, and on the other, it is religious commitment, philosophical thinking and an inevitable perspective that encompasses all actions. People with a desire number of 8 are different from most other people. They hide their feelings, which is why they are often judged, as they please. They are lonely at heart and rarely find understanding among people, and after death they are often extolled. Your desire number in the professional field means success in business, fearlessness in all areas of life, in particular in commerce and industry. You have a talent for team management and outstanding administrative ability.')}}
                        </p>
                        <p id="desNum9">
                            {{__('The desire number 9 is a universal number that has the characteristic features of all prime numbers. A symbol of success and excellence. Desire number 9 is the initiation of a person into all stages of his life, and also reveals all the mysteries of life, death and rebirth. It symbolizes you as a highly intellectual person with great physical strength in all its forms, capable of developing and revealing enormous potential. Your success lies in your creative and artistic qualities. You are the owner of wonderful magnetic abilities. The main problem of such people is not knowing which path they should follow, they often do not realize their abilities. People are very impulsive and hot-tempered, which is why they are most at risk.')}}
                        </p>
                    </div>
                    <h3>{{__('Personality number')}}</h3>
                    <h4>The <a href="">{{__('personality number')}}</a> {{__('shows how other people perceive you.')}}</h4>
                    <div class="jumbotron">
                        <h4 id="personalityNum1">{{__('Your personality number')}}: </h4>
                        <div id="arrowPerson" class="arrow">
                            <svg width="16" height="16">
                                <polygon points="0,0 16,0 8,6" style="fill: black;">
                            </svg>
                        </div>
                        <p id="personNum1">
                            {{__('The ability to present oneself and "furnish" in such a way that no one doubted the right to give commands. Confidence, efficiency, independence, ability to perceive new things and create them. Eye-catching clothing emphasizes the individuality of style')}}
                        </p>
                        <p id="personNum2">
                            {{__('Tactfulness and delicacy. The ability to make a good impression on a specific person without attracting everyone&#180;s attention. Exceptional contact based on a detailed analysis of the interlocutor&#180;s behavior. The style is classic.')}}
                        </p>
                        <p id="personNum3">{{__('Natural magnetism that evokes unaccountable disposition and trust. The ability to communicate in a wave of constant friendliness makes it easy to make friends and fans. Style is what is currently worn.')}}</p>
                        <p id="personNum4">{{__('Restraint and balance in everything, from the manner of dressing to the style of communication. Emphasized diligence and hard work make it possible to impress others with an impression of reliability, to inspire confidence.')}}</p>
                        <p id="personNum5">{{__('The ability to look younger than real age and stand out from any background due to pronounced sexuality. Mobility, activity, contact. Against this "colorful" background, the ability to reason sensibly often comes as a surprise to the interlocutor.')}}</p>
                        <p id="personNum6">{{__('Embodied sense of duty, honesty, reliability. Ability to see perspective and give thoughtful practical advice. The ability to quickly converge with people, tact, willingness to provide a service. Tastefully selected clothes create the image of a sweet, pleasant person.')}}</p>
                        <p id="personNum7">{{__('The image of the cold, withdrawn, and shrewd introvert is more likely to generate interest than rejection. Those around you instinctively feel the presence of a noble soul and high mind behind this austere facade. The sophistication of the external appearance and manner of communication completes the image.')}}</p>
                        <p id="personNum8">{{__('The ability to make a strong, overwhelming impression the first time. Preference is for expensive clothes and accessories as necessary signs of high status. Intelligence, competence, efficiency, confidence in yourself and your rights.')}}
                        </p>
                        <p id="personNum9">{{__('Openness and, as a result, emotional vulnerability. At the same time - responsiveness, the ability to empathize, the ability to provide moral support. An ineradicable belief in goodness, a tendency to idealize the surrounding world. Appearance is often a reflection of a melodramatic mood.')}}</p>
                    </div>
                </div>
            </div>
            <div class="result">
                <h1>{{__('FULL Birth Date NUMBERS')}}</h1>
                <h2 id="birthNumerology"></h2>
                <div class="my-content">
                    <div class="my-card card">
                        <img src="http://www.numeroscop.ru/img/icons/normal-number-icon.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h2 id="lifePathNum" class="card-title numbers"></h2>
                            <p class="card-text">{{__('Life Path Number')}}</p>
                        </div>
                    </div>
                    <div class="my-card card">
                        <img src="http://www.numeroscop.ru/img/icons/normal-number-icon.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h2 id="dayNum" class="card-title numbers"></h2>
                            <p class="card-text">{{__('Birth Day number')}}</p>
                        </div>
                    </div>
                    <div class="my-card card">
                        <img src="http://www.numeroscop.ru/img/icons/normal-number-icon.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h2 id="monthNum" class="card-title numbers"></h2>
                            <p class="card-text">{{__('Month number')}}</p>
                        </div>
                    </div>
                </div>
                <div class="answer">
                    <h3>{{__('Life Path Number')}}</h3>
                    <h4>{{__('In numerology, the')}} <a href="">{{__('number of the life path')}}</a>
                     {{__('means what message your birth is carrying.')}}</h4>
                    <div class="jumbotron">
                        <h4 id="lifePathNum1">{{__('Your Life path number')}}: </h4>
                        <div id="arrowLifePath" class="arrow">
                            <svg width="16" height="16">
                                <polygon points="0,0 16,0 8,6" style="fill: black;">
                            </svg>
                        </div>
                        <br><br>
                        <p id="lifeNum1">
                            {{__('You are active, adventurous and very energetic. A spontaneous desire to create and an unconventional approach to business make you a pioneer person. Your abilities are endless. Opportunities to look to the future and visions of the future are sure to lead you to success. Activities that require the clear leadership qualities that you possess in full would suit you.')}}
                        </p>
                        <p id="lifeNum2">
                            {{__('You are a very versatile person. Many activities will be acceptable to you. You could easily find yourself both in creative activity and technical, for example, you could easily cope with the repair of intricate watch mechanisms. Your ability to tune in to the same wavelength with absolutely any person could contribute to a good career as a lawyer or politician.')}}
                        </p>
                        <p id="lifeNum3">
                            {{__('You have enough creative talents to devote yourself to art. You can fully reveal and develop your artistic gift by showing condescension and perseverance. In order not to miss the opportunity to develop your abilities, concentrate on one thing, on what you want to achieve more.')}}
                        </p>
                        <p id="lifeNum4">
                            {{__('Hard work and diligence in work from the early stages of your life will allow you to take a worthy niche in society. Your excessive punctuality and methodicalness, at times, can make people think of you as a tough person. Often these qualities do not allow you to achieve the desired results of your activity. You are able to achieve success in organizational activities, management, construction and much more if you change your character and be loyal to others.')}}
                        </p>
                        <p id="lifeNum5">
                            {{__('You are an unsurpassed speaker, you know how to win over absolutely any interlocutor and motivate him to take any action. You are characterized by flexibility in contact with people, openness and goodwill. Work in the service sector, show business, trade,tourism, finance or medicine is ideal for you')}}
                        </p>
                        <p id="lifeNum6">
                            {{__('You see your purpose in helping other people. You clearly feel the situation where help could be required from you, in no case interfering in other people&#180;s affairs for no reason. Your ability to identify new opportunities for success could help you achieve good business results. You are a truthful and trustworthy person, this will contribute to a productive business.')}}
                        </p>
                        <p id="lifeNum7">
                            {{__('A person with a life path of "seven" is endowed with qualities that allow him to play the role of a researcher. You are able to identify and correctly formulate problems, analyze them and find solutions. Whether in science, innovation, religion, insurance or invention, you will find something to your liking.')}}
                        </p>
                        <p id="lifeNum8">
                            {{__('You are the owner of an active life position, ready to take the initiative into your own hands, you know how to motivate yourself and others. Everything, no matter what a person who owns the number of life path 8 takes, is subject to him. Would you be able to cope with absolutely any kind of activity. The qualities of a confident leader are especially helpful in coping with running a large business. Life every now and then will test you for resilience, from which you will only become stronger and will be able to achieve the most ambitious goals.')}}
                        </p>
                        <p id="lifeNum9">
                            {{__('You have the ability to think creatively, representing the world around you in an original way. You can turn your ideas into reality as a designer or architect. People whose life path is associated with the number 9 are socially active individuals, you are fair, honest, impartial and capable of representing common interests. You have every chance of becoming an excellent politician, lawyer, teacher or doctor.')}}
                        </p>
                    </div>
                    <h3>{{__('Day Number')}}</h3>
                    <h4>{{__('Using the information that')}} <a href=""> {{__('the Birthday Number')}}</a>{{__('carries, it is possible to develop a way of action based on the actually existing innate qualities.')}} </h4>
                    <div class="jumbotron">
                        <h4 id="dayNum1">{{__('Your day number')}}: </h4>
                        <div id="arrowDay" class="arrow">
                            <svg width="16" height="16">
                                <polygon points="0,0 16,0 8,6" style="fill: black;">
                            </svg>
                        </div>
                        <p id="dNum1">1 - {{__('a person with all the necessary traits of a leader. At any time, absolutely in any situation, you try to bring the matter to the end, without retreating until all possible solutions to a particular problem run out. You are always ready to take the initiative and take control of the situation. You have excellent business skills, you could achieve tremendous results in highly significant areas or big business.')}}</p>
                        <p id="dNum2">2 - {{__('this birthday number characterizes you as a restrained, balanced person, a supporter of resolving conflict situations by finding a compromise. You often contradict yourself and often strive to interfere in the affairs of others, which more often')}}</p>
                        <p id="dNum3">3 - {{__('from an early age, you have an amazing ability to grasp everything on the fly. You can easily perceive and assimilate new knowledge. An incredibly talented person in many spheres of activity, capable of much. However, in order to achieve your goals, you need significant support from others. You live in the present and do not think about tomorrow')}}.</p>
                        <p id="dNum4">4 - {{__('you are a person who avoids risks, treats many things with trepidation and caution. You are very hardworking and persistent, able to achieve a lot alone without relying on anyone. With all this, the number 4 does not guarantee you a bright future if you do not set high goals for yourself, but it lays in you a solid foundation for further development and a lot of skills suitable for many specialties.')}}</p>
                        <p id="dNum5">5 - {{__('you are ruled by a constant attraction to everything extraordinary, previously unknown. You are inspired and filled with enthusiasm, do not like to stay in one place for a long time. Wherever you are, you feel at home. Adventure and travel is like a mouthful for you')}}</p>
                        <p id="dNum6">6 - {{__('the number of the birthday of a sincere, open, reliable person. You are ready to take orders and work entrusted to you with full responsibility. You consider one of the main tasks in life to make a name for yourself and achieve high success in anything. The restraint and composure with which you are ready to succeed does not arouse the sympathy of others and creates an image of a hypocrite in you.')}}</p>
                        <p id="dNum7">7 - {{__('you are a diligent, creative person with a poetic soul and some weirdness. The owner of an analytical mindset, brilliant imagination and a very developed intuition. From the birthday number 7 people are often born inclined to become musicians, composers, artists, philosophers, poets or writers in the future')}}</p>
                        <p id="dNum8">8 {{__('is a number symbolizing endless business opportunities. You are adventurous and fearless about any activity, especially in a commercial environment. Obstacles and difficulties on the path of life are not obstacles to development, on the contrary, they increase your ability to work. You have good management skills and the ability to lead a team.')}}</p>
                        <p id="dNum9">9 - {{__('highly developed intellect and infinite potential are characteristic features of people with a life number 9. Craftsmanship and artistic talent give success in the art world. You should not waste time and give up activities not related to your abilities, you should not expect strong success outside of art. The only obstacle may be the fact that it is far from immediately possible for a person to see and reveal his talents.')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //Calculate name and date

        function numerology() {
            $('.body-input').hide();
            $('#myResult').fadeIn();
            var name = document.getElementById('fullName').value;
            var date = document.getElementById('birthDay').value + " " + document.getElementById('birthMonth').value + " " +
                document.getElementById('birthYear').value;

            var nameArr = name.split(' ');
            var firstName = nameArr[0];
            var lastName = nameArr[1];

            var numerology = new Numerology();
            //Calculating Expression Number
            var firstExpressionNumber = numerology.calculate_Expression_Number(firstName);
            var lastExpressionNumber = numerology.calculate_Expression_Number(lastName);
            var expressionNumber = numerology.recursive_Function(firstExpressionNumber + lastExpressionNumber);
            //Calculating Desire Number
            var desireNumber = numerology.calculate_Desire_Number(firstName + " " + lastName);
            //Calculating Personality Number
            var firstPersonalityNumber = numerology.calculate_Personality_Number(firstName);
            var lastPersonalityNumber = numerology.calculate_Personality_Number(firstName);
            var personalityNumber = numerology.recursive_Function(firstPersonalityNumber + lastPersonalityNumber);

            var arr = date.split(" ");
            //Calculating Life Path
            var lifePathNumber = numerology.calculate_LifePath_Number(arr);
            //Day and Month Number
            var dayNumber = numerology.calculate_Day_Number(arr);
            var monthNumber = numerology.calculate_Month_Number(arr);

            document.getElementById("nameNumerology").innerHTML = name;

            document.getElementById('expressionNum').innerHTML = expressionNumber;
            document.getElementById('desireNum').innerHTML = desireNumber;
            document.getElementById('personalityNum').innerHTML = personalityNumber;

            var expressionResult = document.getElementById('expressionNum1').innerHTML;
            document.getElementById('expressionNum1').innerHTML = expressionResult + document.getElementById('expressionNum').innerHTML;
            document.getElementById('arrowExpression').addEventListener('click', function() {
                show_Expression_Number(expressionNumber);
            });

            document.getElementById('desireNum1').innerHTML =
                document.getElementById('desireNum1').innerHTML + document.getElementById('desireNum').innerHTML;
            document.getElementById('arrowDesire').addEventListener('click', function() {
                show_Desire_Number(desireNumber);
            });

            document.getElementById('personalityNum1').innerHTML += document.getElementById('personalityNum').innerHTML;
            document.getElementById('arrowPerson').addEventListener('click', function() {
                show_Personality_Number(personalityNumber);
            });

            document.getElementById('birthNumerology').innerHTML = date;

            document.getElementById('lifePathNum').innerHTML = lifePathNumber;
            document.getElementById('dayNum').innerHTML = dayNumber;
            document.getElementById('monthNum').innerHTML = monthNumber;

            document.getElementById('lifePathNum1').innerHTML =
                document.getElementById('lifePathNum1').innerHTML + document.getElementById('lifePathNum').innerHTML;
            document.getElementById('arrowLifePath').addEventListener('click', function() {
                show_LifePath_Number(lifePathNumber);
            });

            document.getElementById('dayNum1').innerHTML += document.getElementById('dayNum').innerHTML;
            document.getElementById('arrowDay').addEventListener('click', function() {
                show_Day_Number(dayNumber);
            });
        }

        function show_Expression_Number(eNum) {
            var result = "eNum" + eNum;
            var element = document.getElementById(result).style.display;
            $("#" + result).slideToggle();
        }

        function show_Desire_Number(desNum) {
            var result = "desNum" + desNum;
            var element = document.getElementById(result).style.display;
            $("#" + result).slideToggle();
        }

        function show_Personality_Number(personNum) {
            var result = "personNum" + personNum;
            var element = document.getElementById(result).style.display;
            $("#" + result).slideToggle();
        }

        function show_LifePath_Number(lifeNum) {
            var result = "lifeNum" + lifeNum;
            var element = document.getElementById(result).style.display;
            $("#" + result).slideToggle();
        }

        function show_Day_Number(dayNum) {
            var result = "dNum" + dayNum;
            var element = document.getElementById(result).style.display;
            $("#" + result).slideToggle();
        }
    </script>
    <div class="features">
        <div class=" index-main-links">
            <div class="col-md-4">
                <h2>{{__('Name Numerology')}}</h2>
                <div class="pre-header">{{__('Reveal the secrets of your hidden talents')}}</div>
                <div>
                    <p><img src="https://numeroscop.net/img/index/name-numerology.png" style="float: left;" width="102" height="102" alt="Name Numerology">{{__("Materials of this section are based on the most ancient and cutting-edge studies on the impact of name on the individual's life. Full range of analysis parameters! All the information encoded in the name – presented in figures, charts, tables, and detailed interpretations.")}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <h2>{{__('Birthday Meanings')}}</h2>
                <div class="pre-header">{{__('Learn what the fate has in store for you')}}</div>
                <div>
                    <p><img src="https://numeroscop.net/img/index/birthday-numerology.png" width="99" height="99" style="float: left;" alt="Birthday Meanings">{{__("Birth Date is an inexhaustible source of information on a person's destiny. Recommendations in this section are based on the results of detailed studies, and intended for daily practical use.")}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <h2>{{__('Numerological Forecasts')}}</h2>
                <div class="pre-header">{{__('For 15 years, a year, a month or a day')}}</div>
                <div>
                    <p><img src="https://numeroscop.net/img/index/future-numerology.png" width="99" height="99" style="float: left;" alt="Birthday Meanings">{{__('Numerological forecast gives you the ability to control your life, eliminating unforeseen circumstances. Thousands of people have already mastered the skill of managing the luck – thanks to forecasts of Numeroscope web portal. It is available to everyone!')}}</p>
                </div>
            </div>
            <div class="col-sm-4">
                <h2>{{__('Name Numerology')}}</h2>
                <div class="pre-header">{{__('Reveal the secrets of your hidden talents')}}</div>
                <div>
                    <p><img src="https://numeroscop.net/img/index/name-numerology.png" style="float: left;" width="102" height="102" alt="Name Numerology">{{__("Materials of this section are based on the most ancient and cutting-edge studies on the impact of name on the individual's life. Full range of analysis parameters! All the information encoded in the name – presented in figures, charts, tables, and detailed interpretations.")}}</p>
                </div>
            </div>
            <div class="col-sm-4">
                <h2>{{__('Birthday Meanings')}}</h2>
                <div class="pre-header">{{__('Learn what the fate has in store for you')}}</div>
                <div>
                    <p><img src="https://numeroscop.net/img/index/birthday-numerology.png" width="99" height="99" style="float: left;" alt="Birthday Meanings">{{__("Birth Date is an inexhaustible source of information on a person's destiny. Recommendations in this section are based on the results of detailed studies, and intended for daily practical use.")}}</p>
                </div>
            </div>
            <div class="col-sm-4">
                <h2>{{__('Numerological Forecasts')}}</h2>
                <div class="pre-header">{{__('For 15 years, a year, a month or a day')}}</div>
                <div>
                    <p><img src="https://numeroscop.net/img/index/future-numerology.png" width="99" height="99" style="float: left;" alt="Birthday Meanings">{{__('Numerological forecast gives you the ability to control your life, eliminating unforeseen circumstances. Thousands of people have already mastered the skill of managing the luck – thanks to forecasts of Numeroscope web portal. It is available to everyone!')}}</p>
                </div>
            </div>
            <div class="div-sm">
                <h2>{{__('Name Numerology')}}</h2>
                <div class="pre-header">{{__('Reveal the secrets of your hidden talents')}}</div>
                <div>
                    <p><img class="div-img" src="https://numeroscop.net/img/index/name-numerology.png" style="float: left;" alt="Name Numerology">{{__("Materials of this section are based on the most ancient and cutting-edge studies on the impact of name on the individual's life. Full range of analysis parameters! All the information encoded in the name – presented in figures, charts, tables, and detailed interpretations.")}}</p>
                </div>
            </div>
            <div class="div-sm">
                <h2>{{__('Birthday Meanings')}}</h2>
                <div class="pre-header">{{__('Learn what the fate has in store for you')}}</div>
                <div>
                    <p><img class="div-img" src="https://numeroscop.net/img/index/birthday-numerology.png" style="float: left;" alt="Birthday Meanings">{{__("Birth Date is an inexhaustible source of information on a person's destiny. Recommendations in this section are based on the results of detailed studies, and intended for daily practical use.")}}</p>
                </div>
            </div>
            <div class="div-sm">
                <h2>{{__('Numerological Forecasts')}}</h2>
                <div class="pre-header">{{__('For 15 years, a year, a month or a day')}}</div>
                <div>
                    <p><img class="div-img" src="https://numeroscop.net/img/index/future-numerology.png" style="float: left;" alt="Birthday Meanings">{{__('Numerological forecast gives you the ability to control your life, eliminating unforeseen circumstances. Thousands of people have already mastered the skill of managing the luck – thanks to forecasts of Numeroscope web portal. It is available to everyone!')}}</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
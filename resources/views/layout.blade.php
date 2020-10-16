<!DOCTYPE html>
<html lang="en">
    <head>
        @yield('content')
    </head>
    @php
        $path = Request::path();
    @endphp
<body>
    <div class="page">
    <header id="header">
    <div id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="brand put-left">
                        <h1>
                            <a href="/">
                                <img src="images/logo.png" alt="Logo"/>
                            </a>
                        </h1>
                    </div>
                    <nav class="nav put-right">
                        <ul class="sf-menu">
                            <li ><a class="{{'/' == $path ? 'active' :''}}" href="{{url('/')}}">Home</a></li>
                            <li>
                                <a class= "{{'about' == $path ? 'active' :''}}" href="{{url('about')}}">About</a>
                                <ul>
                                    <li><a href="#">Lorem ipsum</a></li>
                                    <li><a href="#">Dolor sit amet</a>
                                    <li><a href="#">Ctetur adipisicing</a>
                                    <li><a href="#">Elit sed do</a>
                                        <ul>
                                            <li><a href="#">Iusmod tempor</a></li>
                                            <li><a href="#">Incididunt ut labore</a></li>
                                            <li><a href="#">Et dolore magna</a></li>
                                            <li><a href="#">Aliqua Ut enim</a></li>
                                            <li><a href="#">Minim veniam</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="{{'services' == $path ? 'active' :''}}" href="{{url('services')}}">Services</a></li>
                            <li><a class="{{'blog' == $path ? 'active' :''}}" href="{{url('blog')}}">Blog</a></li>
                            <li><a class="{{'contacts' == $path ? 'active' :''}}" href="{{url('contacts')}}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('second')

<footer id="footer" class="color_9">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <p class="info text_4 color_4">
                    © <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br/>
                    Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="js/script.js"></script>
</body>
</html>

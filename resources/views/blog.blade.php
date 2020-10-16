@extends('layout')

@section('content')
<head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</head>
@endsection

@section('second')
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - September08, 2014!</div>
    <div class="container">
        <div class="row wrap_11">
            <div class="grid_8">
                <div class="wrap_10">
                    <h2 class="header_2 indent_3">Latest Posts</h2>
                    {{-- <div class="box_6">
                        <div class="put-left">
                            <div class="caption">
                                <img src="images/nature1.jpg" alt="Image 1"/>
                                <p class="text_2 color_1">
                                    July 20, 2014
                                </p>
                            </div>
                        </div>
                        <div class="caption">
                            <h3 class="text_2 color_2"><a href="#"></a></h3>
                            <p class="text_3">
                                Horem ipsum dolor sit amettetur ing elit. In mollis erat mattis neque cilisis, sit
                                amet <br/>
                                ultries wertolio dasererat rutrume. <br/>
                                <br/>
                                In mollis erat mattis neque cilisis, sit amet ultries wertolio dasererat rutrume.
                            </p>
                            <a class="btn_2" href="#">read more</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="box_6">
                        <div class="put-left">
                            <div class="caption">
                                <img src="images/nature2.jpg" alt="Image 2"/>
                                <p class="text_2 color_1">
                                    July 28, 2014
                                </p>
                            </div>
                        </div>
                        <div class="caption">
                            <h3 class="text_2 color_2"><a href="#">Hertomino vertoe</a></h3>
                            <p class="text_3">
                                Lorem ipsum dolor sit amettetur ing elit. In mollis erat mattis neque cilisis, sit
                                amet
                                ultries wertolio dasererat rutrume. <br/>
                                <br/>
                                In mollis erat mattis neque cilisis, sit amet ultries wertolio dasererat rutrumew.
                            </p>
                            <a class="btn_2" href="#">read more</a>
                        </div>
                        <div class="clearfix"></div>
                    </div> --}}

                    @php
                     $images = ['images/nature1.jpg','images/nature2.jpg','images/nature3.jpg'];
                     $i=0;
                    @endphp
                    @foreach ( $assignments as $assignment )
                    <div class="box_6">
                        <div class="put-left">
                            <div class="caption">
                            <img src="{{$images[$i]}}" alt="Image 3"/>
                                <p class="text_2 color_1">
                                   {{ $assignment->created_at}}
                                </p>
                            </div>
                        </div>
                        <div class="caption">
                            <h3 class="text_2 color_2"><a href="#">{{$assignment->title}}</a></h3>
                            <p class="text_3">
                                {{$assignment->body}}
                            </p>
                            <a class="btn_2" href="#">read more</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @php
                     $i++;
                    @endphp
                    @endforeach

                </div>
            </div>
            <div class="grid_4">
                <div class="wrap_10">
                    <h2 class="header_2 indent_3">
                        Categories
                    </h2>
                    <ul class="list_2 text_3 color_5">
                        <li><a href="#">Gorem ipsum dolor sit </a></li>
                        <li><a href="#">Amettetur ing elit</a></li>
                        <li><a href="#">In mollis erat mattis neque </a></li>
                        <li><a href="#">Cilisis, sit amet wertolio </a></li>
                        <li><a href="#">Dasererat rutrumeerat </a></li>
                        <li><a href="#">Meque cilisis, sit amet </a></li>
                        <li><a href="#">Wertolio dasererat </a></li>
                        <li><a href="#">Jpsum dolor situr </a></li>
                        <li><a href="#">In mollis erat mattis neque </a></li>
                        <li><a href="#">Asit amet wertolio </a></li>
                        <li><a href="#">Kasererat rutrumeerat </a></li>
                        <li><a href="#">Neque cilisis, sit amet </a></li>
                        <li><a href="#">Bertolio dasererate </a></li>
                        <li><a href="#">Wertolio dasererat </a></li>
                        <li><a href="#">Jpsum dolor situr </a></li>
                        <li><a href="#">In mollis erat sererate </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row wrap_9 wrap_4 wrap_10">
            <div class="grid_12">
                <div class="header_1 wrap_3 color_3">
                    Get in Touch
                </div>
                <div class="box_3">
                    <ul class="list_1">
                        <li><a class="fa fa-twitter" href="#"></a></li>
                        <li><a class="fa fa-facebook" href="#"></a></li>
                        <li><a class="fa fa-google-plus" href="#"></a></li>
                        <li><a class="fa fa-pinterest" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

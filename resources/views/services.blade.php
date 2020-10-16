@extends('layout')

@section('content')
<head>
    <title>Services</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/isotope.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src='js/isotope.min.js'></script>
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
        <div class="row wrap_11 wrap_20">
            <div class="grid_12">
                <div class="text_7 color_2">
                    Categories:
                    <ul id="filters">
                        <li><a href="#" data-filter="*">Show All</a></li>
                        <li><a href="#" data-filter="c1">Category 1</a></li>
                        <li><a href="#" data-filter="c2">Category 2</a></li>
                        <li><a href="#" data-filter="c3">Category 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bg_1 wrap_17">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="isotope row">
                        <div class="element-item grid_4 c1">
                            <div class="box_7">
                                <div class="img-wrap">
                                    <img src="images/index-2_img01.jpg" alt="Image 1"/>
                                </div>
                                <div class="caption">
                                    <h3 class="text_2 color_2"><a href="#">Tertomino verto</a></h3>
                                    <p class="text_3">
                                        Horem ipsum dolor sit amettetur ing elit. In mollis erat mattis neque
                                        cilisis, sit amet <br/>
                                        ultries wertolio dasererat rutrume. In mollis erat mattis
                                        neque cilisis, sit amet ultries
                                    </p>
                                    <a class="btn_2" href="#">read more</a></div>
                            </div>
                        </div>
                        <div class="element-item grid_4 c1">
                            <div class="box_7">
                                <div class="img-wrap">
                                    <img src="images/index-2_img02.jpg" alt="Image 2"/>
                                </div>
                                <div class="caption">
                                    <h3 class="text_2 color_2"><a href="#">Dertomino vertom</a></h3>
                                    <p class="text_3">
                                        Gorem ipsum dolor sit amettetur ing elit. In mollis erat mattis neque
                                        cilisis, sit amet <br/>
                                        ultries wertolio dasererat rutrume. In mollis erat mattis
                                        neque cilisis, sit amet ultrie
                                    </p>
                                    <a class="btn_2" href="#">read more</a></div>
                            </div>
                        </div>
                        <div class="element-item grid_4 c1">
                            <div class="box_7">
                                <div class="img-wrap">
                                    <img src="images/index-2_img03.jpg" alt="Image 3"/>
                                </div>
                                <div class="caption">
                                    <h3 class="text_2 color_2"><a href="#">Kertomino vertu</a></h3>
                                    <p class="text_3">
                                        Lorem ipsum dolor sit amettetur ing elit. In mollis erat mattis neque
                                        cilisis, sit amet <br/>
                                        ultries wertolio dasererat rutrume. In mollis erat mattis
                                        neque cilisis, sit amet ultesas
                                    </p>
                                    <a class="btn_2" href="#">read more</a></div>
                            </div>
                        </div>
                        <div class="element-item grid_4 c2">
                            <div class="box_7">
                                <div class="img-wrap">
                                    <img src="images/index-2_img04.jpg" alt="Image 4"/>
                                </div>
                                <div class="caption">
                                    <h3 class="text_2 color_2"><a href="#">Hertomino ertoq</a></h3>
                                    <p class="text_3">
                                        Horem ipsum dolor sit amettetur ing elit. In mollis erat mattis neque
                                        cilisis, sit amet <br/>
                                        ultries wertolio dasererat rutrume. In mollis erat mattis
                                        neque cilisis, sit amet ultries
                                    </p>
                                    <a class="btn_2" href="#">read more</a></div>
                            </div>
                        </div>
                        <div class="element-item grid_4 c2">
                            <div class="box_7">
                                <div class="img-wrap">
                                    <img src="images/index-2_img05.jpg" alt="Image 5"/>
                                </div>
                                <div class="caption">
                                    <h3 class="text_2 color_2"><a href="#">Tertomino verto</a></h3>
                                    <p class="text_3">
                                        Forem ipsum dolor sit amettetur ing elit. In mollis erat mattis neque
                                        cilisis, sit amet <br/>
                                        ultries wertolio dasererat rutrume. In mollis erat mattis
                                        neque cilisis, sit amet ultries
                                    </p>
                                    <a class="btn_2" href="#">read more</a></div>
                            </div>
                        </div>
                        <div class="element-item grid_4 c3">
                            <div class="box_7">
                                <div class="img-wrap">
                                    <img src="images/index-2_img06.jpg" alt="Image 6"/>
                                </div>
                                <div class="caption">
                                    <h3 class="text_2 color_2"><a href="#">Nertomino rtoas</a></h3>
                                    <p class="text_3">
                                        Korem ipsum dolor sit amettetur ing elit. In mollis erat mattis neque cilisis,
                                        sit amet <br/>
                                        ultries wertolio dasererat rutrume. In mollis erat mattis neque
                                        cilisis, sit amet ultriede
                                    </p>
                                    <a class="btn_2" href="#">read more</a></div>
                            </div>
                        </div>
                    </div>
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
</div>
@endsection()

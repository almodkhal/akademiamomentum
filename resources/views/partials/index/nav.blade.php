<!--HEADER-->
<header>
    <div id="lgx-header" class="lgx-header"> <!--lgx-header-container lgx-header-container-white lgx-header-container-brand lgx-header-singlemenu-->
        <div class="header-top"> <!--header-top-white header-top-brand-->
            <div class="header-top-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact">
                                <ul class="list-inline">
                                    <li><span class="question-text">Kontaktoni</span> <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+355674004445">+355 67 400 4445</a></li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i> username@domain.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-menu">
                                <ul class="list-inline">
                                    <li class="login-register"><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--//.header-top-->
        <div class="lgx-header-bottom lgx-header-bottom-fixed-black lgx-header-bottom-fixed-transparent lgx-header-bottom-scrol-black"> <!--lgx-header-bottom-black lgx-header-bottom-brand--><!--lgx-header-bottom-fixed lgx-header-bottom-fixed-black lgx-header-bottom-fixed-brand lgx-header-bottom-fixed-transparent--><!--lgx-header-bottom-scrol-black lgx-header-bottom-scrol-brand-->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <nav class="navbar navbar-default lgx-navbar">
                            <div class="container">
                                <nav class="navbar navbar-default lgx-navbar lgx-navbar-search">
                                    <div class="lgxcontainer">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                    data-target=".navbar-collapse">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a href="#toggle-search" class="hidden-lg hidden-md hidden-sm lgx-search-mobile search-animate"><span class="glyphicon glyphicon-search"></span></a>
                                            <div class="lgx-logo">
                                                <a href="/" class="lgx-scroll">
                                                    <img src="{{asset('img/logo2.png') }}" alt="Logo"/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav lgx-nav">
                                                <li>
                                                    <a href="index.html" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
                                                    <ul class="dropdown-menu multi-level">
                                                        <li><a href="index.html">Home (Default)</a></li>
                                                        <li><a href="home-slider.html">Home Slider</a></li>
                                                        <li><a href="home-contentslider.html">Home Content Slider</a></li>
                                                        <li><a href="home-typed.html">Home Typed</a></li>
                                                        <li><a href="home-five.html">Home Five</a></li>
                                                        <li><a href="home-six.html">Home Six</a></li>
                                                        <li><a href="home-seven.html">Home Seven</a></li>
                                                        <li><a href="home-eight.html">Home Eight</a></li>
                                                    </ul>
                                                <li>
                                                <li>
                                                    <a href="index.html" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                                                    <ul class="dropdown-menu multi-level">
                                                        <li><a href="about.html">About</a></li>
                                                        <li><a href="service.html">Services</a></li>
                                                        <li class="dropdown-submenu">
                                                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses<span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="courses.html">Courses</a></li>
                                                                <li><a href="course-single.html">Courses Single</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="registration.html">Registration</a></li>
                                                        <li class="dropdown-submenu">
                                                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teachers<span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="teachers.html">Teachers</a></li>
                                                                <li><a href="teacher-single.html">Teacher Single</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="events.html">Events</a></li>
                                                                <li><a href="event-single.html">Event Single</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="news.html">News</a></li>
                                                                <li><a href="news-single.html">News Single</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="gallery.html">Gallery</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                        <li class="dropdown-submenu">
                                                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu">
                                                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown Two<span class="caret"></span></a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Dropdown Three</a></li>
                                                                        <li><a href="#">Dropdown Three</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="#">Dropdown Two</a></li>
                                                                <li><a href="#">Dropdown Two</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class="lgx-scroll active" href="#lgx-about">About</a></li>
                                                <li><a class="lgx-scroll" href="#lgx-courses">Courses</a></li>
                                                <li><a class="lgx-scroll" href="#lgx-events">Events</a></li>
                                                <li><a class="lgx-scroll" href="#lgx-news">News</a></li>
                                                <li><a class="lgx-scroll" href="contact.html">Contact</a></li>
                                                <li class="hidden-xs"><a href="#toggle-search" class="search-animate"><span class="glyphicon glyphicon-search"></span></a></li>
                                            </ul>
                                        </div>
                                        <!--/.nav-collapse -->
                                    </div>
                                    <div class="lgx-menu-search search-animate">
                                        <div class="container">
                                            <form action="#" method="GET" role="search">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="q" placeholder="Search for snippets and hit enter">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <!-- /.container -->
                        </nav>
                    </div>
                </div>
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.INNER-->
    </div>
</header>
<!--HEADER END-->


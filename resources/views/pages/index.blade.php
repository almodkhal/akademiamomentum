
@extends('layouts.app')

<title>Akademia Momentum - Familja e Edukimit Europian</title>

@section('content')



<div class="lgx-container ">
<!-- ***  ADD YOUR SITE CONTENT HERE *** -->



<!--BANNER-->
<section>
    <div class="lgx-banner">
        <div class="lgx-banner-style">
            <div class="lgx-inner lgx-inner-fixed">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-banner-info  lgx-banner-info-white">
                                <h3 class="subtitle">Premeum Quality</h3>
                                <h2 class="title">Education <span>Template</span></h2>
                                <p class="text">Aentegers sollicitudin molestie ante et dictum laoreet we are the Excilent. <br/> Nascetur ridiculus mus. Proin porta lectus eleifend. </p>
                                <div class="btn-area">
                                    <a class="lgx-btn" href="registration.html">Registration</a>
                                    <a class="lgx-btn lgx-btn-border" href="courses.html">All Cources</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//.ROW-->
                </div>
                <!-- //.CONTAINER -->
            </div>
            <!-- //.INNER -->
        </div>
    </div>
</section>
<!--BANNER END-->


<!--ABOUT-->
<section>
    <div id="lgx-about" class="lgx-about lgx-about-bottom"> <!--lgx-about-bottom-->
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="lgx-about-area">
                            <div class="lgx-heading">
                                <h2 class="heading-title">Learn To Education Plus</h2>
                                <h4 class="heading-subtitle">Pellentesque habitant morbi tristique senectus et netus et malesuada habitant morbi tristique senectus netus fames ac turpis.</h4>
                            </div>
                            <div class="lgx-about-content">
                                <p class="text">
                                    Pellentesque habitant morbi tristique senectus netus et malesuada fames turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris Eonec eu ribero sit amet quam egestas semper. Aenean are ultricies mi vitae est tristique senectus et netus et malesuada placerat leo.
                                </p>
                                <a class="lgx-btn lgx-btn-sm lgx-btn-border" href="about.html">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.INNER -->
    </div>
</section>
<!--ABOUT END-->



<!--SERVICE-->
<section>
    <div id="lgx-services" class="lgx-services"> <!--lgx-services-white-->
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-sm-6 col-md-4">
                            <div class="lgx-single-service"> <!--lgx-single-service-white-->
                                <span class="icon"><img src="{{ asset('storage/images/'.$post->png) }}" alt="dep_icon"/></span>
                                <h2 class="title"><a href="{{ route('pages.department', $post->id) }}">{{ $post->title }}</a></h2>
                                <p>{{ $post->short_description }}</p>
                                <a class="lgx-btn-simple" href="{{ route('pages.department', $post->id) }}">Më Shumë</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
<!--SERVICE END-->


<section>
    <div id="lgx-courses" class="lgx-courses">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading-title">Offerd Courses</h2>
                            <h4 class="heading-subtitle">Some Trendy And Popular Courses Offerd</h4>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
                <div class="lgx-tab">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-filter-area">
                                <ul id="lgx-filter" class="lgx-filter list-inline text-center">
                                    <li class="active"><a class="lgx-filter-item" href="javascript:void(0)" data-filter="*">All</a></li>
                                    <li><a class="lgx-filter-item" href="javascript:void(0)" data-filter=".design">Design</a></li>
                                    <li><a class="lgx-filter-item" href="javascript:void(0)" data-filter=".html">Python</a></li>
                                    <li><a class="lgx-filter-item" href="javascript:void(0)" data-filter=".wordpress">Wordpres</a></li>
                                    <li><a class="lgx-filter-item" href="javascript:void(0)" data-filter=".joomla">Joomla</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--//. ROW-->

                    <div class="row">
                        <div id="lgx-grid-wrapper" class="lgx-grid-wrapper"> <!--lgx-list-wrapper-->

                            <div class="lgx-grid-item col-xs-12 col-sm-6 col-md-4 design">
                                <div class="lgx-single-course">
                                    <div class="lgx-single-course-inner">
                                        <figure>
                                            <img src="{{ asset('img/courses/course1.jpg') }}" alt="course">
                                            <figcaption>
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a href="course-single.html">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="course-info">
                                            <div class="course-author">
                                                <img src="{{ asset('img/news/author1.jpg') }}" alt="course">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Jonathon Doe</a></h4>
                                                    <h5 class="subtitle">Lecturar of Eduplus</h5>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="course-single.html"> Learn Python – Interactive Python</a></h3>
                                            <div class="course-bottom">
                                                <ul class="list-inline">
                                                    <li><a href="#"><i class="fa fa-user-circle"></i>558</a></li>
                                                    <li><a href="#"><i class="fa fa-commenting"></i>55</a></li>
                                                    <li><a href="#">75 <span>$</span></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--//ITEM-->

                            <div class="lgx-grid-item col-xs-12 col-sm-6 col-md-4 html">
                                <div class="lgx-single-course">
                                    <div class="lgx-single-course-inner">
                                        <figure>
                                            <img src="{{ asset('img/courses/course2.jpg') }}" alt="course">
                                            <figcaption>
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a href="course-single.html">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="course-info">
                                            <div class="course-author">
                                                <img src="{{ asset('img/news/author2.jpg') }}" alt="course">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Riaz Sagar</a></h4>
                                                    <h5 class="subtitle">Lecturar of Education plus</h5>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="course-single.html"> Advance Oracle – Learn Intermediate Oracle</a></h3>
                                            <div class="course-bottom">
                                                <ul class="list-inline">
                                                    <li><a href="#"><i class="fa fa-user-circle"></i>558</a></li>
                                                    <li><a href="#"><i class="fa fa-commenting"></i>55</a></li>
                                                    <li><a href="#">75 <span>$</span></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--//ITEM-->

                            <div class="lgx-grid-item col-xs-12 col-sm-6 col-md-4 joomla design">
                                <div class="lgx-single-course">
                                    <div class="lgx-single-course-inner">
                                        <figure>
                                            <img src="{{ asset('img/courses/course3.jpg') }}" alt="course">
                                            <figcaption>
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a href="course-single.html">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="course-info">
                                            <div class="course-author">
                                                <img src="{{ asset('img/news/author5.jpg') }}" alt="course">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Vaskar Roy</a></h4>
                                                    <h5 class="subtitle">Lecturar of Edumaster</h5>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="course-single.html"> Basic PHP – Learn Basic PHP Language</a></h3>
                                            <div class="course-bottom">
                                                <ul class="list-inline">
                                                    <li><a href="#"><i class="fa fa-user-circle"></i>558</a></li>
                                                    <li><a href="#"><i class="fa fa-commenting"></i>55</a></li>
                                                    <li><a href="#">75 <span>$</span></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--//ITEM-->

                            <div class="lgx-grid-item col-xs-12 col-sm-6 col-md-4 wordpress">
                                <div class="lgx-single-course">
                                    <div class="lgx-single-course-inner">
                                        <figure>
                                            <img src="{{ asset('img/courses/course4.jpg') }}" alt="course">
                                            <figcaption>
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a href="course-single.html">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="course-info">
                                            <div class="course-author">
                                                <img src="{{ asset('img/news/author3.jpg') }}" alt="course">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Jonathon Talukdar</a></h4>
                                                    <h5 class="subtitle">Lecturar of Edumaster</h5>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="course-single.html"> Learn Electronics From Education Plus</a></h3>
                                            <div class="course-bottom">
                                                <ul class="list-inline">
                                                    <li><a href="#"><i class="fa fa-user-circle"></i>558</a></li>
                                                    <li><a href="#"><i class="fa fa-commenting"></i>55</a></li>
                                                    <li><a href="#">75 <span>$</span></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--//ITEM-->

                            <div class="lgx-grid-item col-xs-12 col-sm-6 col-md-4 html design">
                                <div class="lgx-single-course">
                                    <div class="lgx-single-course-inner">
                                        <figure>
                                            <img src="{{ asset('img/courses/course5.jpg') }}" alt="course">
                                            <figcaption>
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a href="course-single.html">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="course-info">
                                            <div class="course-author">
                                                <img src="{{ asset('img/news/author4.jpg') }}" alt="course">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Jonathon Doe</a></h4>
                                                    <h5 class="subtitle">Lecturar of Edumaster</h5>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="course-single.html"> Learn Python Interactive Python Code</a></h3>
                                            <div class="course-bottom">
                                                <ul class="list-inline">
                                                    <li><a href="#"><i class="fa fa-user-circle"></i>558</a></li>
                                                    <li><a href="#"><i class="fa fa-commenting"></i>55</a></li>
                                                    <li><a href="#">75 <span>$</span></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--//ITEM-->

                            <div class="lgx-grid-item col-xs-12 col-sm-6 col-md-4 joomla">
                                <div class="lgx-single-course">
                                    <div class="lgx-single-course-inner">
                                        <figure>
                                            <img src="{{ asset('img/courses/course6.jpg') }}" alt="course">
                                            <figcaption>
                                                <div class="lgx-hover-link">
                                                    <div class="lgx-vertical">
                                                        <a href="course-single.html">
                                                            <i class="fa fa-book"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <div class="course-info">
                                            <div class="course-author">
                                                <img src="{{ asset('img/courses/courses-author1.jpg') }}" alt="courses author">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Jonathon Doe</a></h4>
                                                    <h5 class="subtitle">Lecturar of Edumaster</h5>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="course-single.html"> Learn Java Interactive Java Resources</a></h3>
                                            <div class="course-bottom">
                                                <ul class="list-inline">
                                                    <li><a href="#"><i class="fa fa-user-circle"></i>558</a></li>
                                                    <li><a href="#"><i class="fa fa-commenting"></i>55</a></li>
                                                    <li><a href="#">850 <span>$</span></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--//ITEM-->
                        </div>
                    </div><!--//. ROW-->
                </div>
            </div>
        </div>
    </div>
</section>




<!--MILESTONE-->
<section>
    <div id="lgx-register" class="lgx-register">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="lgx-registration-area">
                            <div class="lgx-heading-registration">
                                <h3 class="subtitle">You’re Learning Free</h3>
                                <h2 class="title">Started Today!</h2>
                            </div>
                            <div class="lgx-registration-info">
                                <p class="text">Mauris sagittis felis vitae augue posuere fringilla. Nulla tincidunt, magna non sceleris tempor, libero arcu tempor erat, quis imperdiet mi purus eget arcu. Sed luctus viverra libero, non rutrum ligula volutpat a. Etiam commodo bibendum elit at vestibulum</p>
                                <a class="lgx-btn registration-btn" href="registration.html">Registration</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="lgx-video-area">
                            <figure>
                                <figcaption>
                                    <div class="video-icon">
                                        <div class="lgx-vertical">
                                            <span>Watch</span>
                                            <a id="myModalLabel" class="icon" href="#" data-toggle="modal" data-target="#lgx-modal">
                                                <i class="fa fa-play " aria-hidden="true"></i>
                                            </a>
                                            <span>Video</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <!-- Modal-->
                            <div id="lgx-modal" class="modal fade lgx-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe id="modalvideo" src="https://www.youtube.com/embed/GJW2i5urzVk" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- //.Modal-->
                        </div>
                    </div>
                </div>
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
<!--MILESTONE END-->



<!--TEACHERS-->
<section>
    <div id="lgx-teachers" class="lgx-teachers">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading-title">Qualified Teachers</h2>
                            <h4 class="heading-subtitle">Some Special Teachers From The Industry!</h4>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
                <div class="row">
                    <div id="lgx-owlteachers" class="owl-carousel lgx-owlteachers">
                        @foreach ($staff as $staf)


                        <div class="item">
                            <div class="lgx-single-teacher"> <!--lgx-teacher-circle-->
                                <figure>
                                    <a href="teacher-single.html"><img src="{{ asset('storage/images/'.$staf->image) }}" alt="teacher"/></a>
                                    <figcaption>
                                        <h3 class="teacher-name"><a href="teacher-single.html">{{ $staf->name }}</a><span>{{ $staf->post->title }}</span></h3>
                                        <p class="text">Bio (short description add later)</p>
                                        <div class="teacher-bottom">
                                            <ul class="list-inline social-group">
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <a class="link" href="teacher-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="item">
                            <div class="lgx-single-teacher"> <!--lgx-teacher-circle-->
                                <figure>
                                    <a href="teacher-single.html"><img src="{{ asset('img/teachers/teacher2.jpg') }}" alt="teacher"/></a>
                                    <figcaption>
                                        <h3 class="teacher-name"><a href="teacher-single.html">Enathon Jackson</a><span>Lecturer</span></h3>
                                        <p class="text">Integer sollicitudin molestie ante etme natoque penatibus et magnie nasceur nulla eleifend ollicitudin molestie</p>
                                        <div class="teacher-bottom">
                                            <ul class="list-inline social-group">
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <a class="link" href="teacher-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="item">
                            <div class="lgx-single-teacher">
                                <figure>
                                    <a href="teacher-single.html"><img src="{{ asset('img/teachers/teacher3.jpg') }}" alt="teacher"/></a>
                                    <figcaption>
                                        <h3 class="teacher-name"><a href="teacher-single.html">Enathon Jackson</a><span>Lecturer</span></h3>
                                        <p class="text">Integer sollicitudin molestie ante etme natoque penatibus et magnie nasceur nulla eleifend ollicitudin molestie</p>
                                        <div class="teacher-bottom">
                                            <ul class="list-inline social-group">
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <a class="link" href="teacher-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="item">
                            <div class="lgx-single-teacher">
                                <figure>
                                    <a href="teacher-single.html"><img src="{{ asset('img/teachers/teacher2.jpg') }}" alt="teacher"/></a>
                                    <figcaption>
                                        <h3 class="teacher-name"><a href="teacher-single.html">Enathon Jackson</a><span>Lecturer</span></h3>
                                        <p class="text">Integer sollicitudin molestie ante etme natoque penatibus et magnie nasceur nulla eleifend ollicitudin molestie</p>
                                        <div class="teacher-bottom">
                                            <ul class="list-inline social-group">
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <a class="link" href="teacher-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div> <!--//.Item--> --}}
                    </div><!--l//#lgx-OWL NEWS-->
                </div>
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.INNER -->
    </div>
</section>
<!--TEACHERS END-->


<!--EVENTS-->
<section>
    <div id="lgx-events" class="lgx-events">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading-title">Upcoming Events</h2>
                            <h4 class="heading-subtitle">Our Upcoming Seminars You Dont Miss Out!</h4>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-events-area">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="lgx-featured-event">
                                        <figure>
                                            <a href="#"><img src="assets/img/events/event1.jpg" alt="featured event"></a>
                                            <figcaption>
                                                <div class="figcaption">
                                                </div>
                                                <div class="event-info">
                                                    <div class="date">
                                                        <h4>12<span>jan</span></h4>
                                                    </div>
                                                    <div class="info-right">
                                                        <p>6:30 AM - 5:00 PM</p>
                                                        <h4 class="location"> Swick Hill Street, Charlotte, UK</h4>
                                                        <h3 class="title">
                                                            <a href="event-single.html">The 10 best educational websites apps to learn new stuff for free</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="lgx-single-event">
                                        <div class="thumb">
                                            <a href="event-single.html"><img src="assets/img/events/event2.jpg" alt="event"></a>
                                        </div>
                                        <div class="event-info">
                                            <a class="date" href="#">June 14, 2017</a>
                                            <h4 class="location"> Swick Hill Street, Charlotte, UK</h4>
                                            <h3 class="title"><a href="event-single.html">I no longer understand my PhD dissertation on Education</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="lgx-single-event">
                                        <div class="thumb">
                                            <a href="event-single.html"><img src="assets/img/events/event3.jpg" alt="event"></a>
                                        </div>
                                        <div class="event-info">
                                            <a class="date" href="#">December 24, 2016</a>
                                            <h4 class="location"> Swick Hill Street, Charlotte, UK</h4>
                                            <h3 class="title"><a href="event-single.html">The digital revolution in higher education has already happened</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="lgx-single-event">
                                        <div class="thumb">
                                            <a href="event-single.html"><img src="assets/img/events/event4.jpg" alt="event"></a>
                                        </div>
                                        <div class="event-info">
                                            <a class="date" href="#">March 30, 2015</a>
                                            <h4 class="location"> Swick Hill Street, Charlotte, UK</h4>
                                            <h3 class="title"><a href="event-single.html">UX Education: Designing free Online Learning Curriculum</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.INNER -->
    </div>
</section>
<!--EVENTS END-->



<!--BLOG -->
<section>
    <div id="lgx-blog" class="lgx-blog">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading lgx-heading-white">
                            <h2 class="heading-title">News Updates</h2>
                            <h4 class="heading-subtitle">Latest News Updates You Dont Miss Out!</h4>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
                <div class="row">
                    <div id="lgx-owlnews" class="owl-carousel lgx-owlnews">

                        <div class="item">
                            <!--News-single-->
                            <div class="lgx-news-single">
                                <figure>
                                    <img src="assets/img/news/news1.jpg" alt="Adv" title="Adv"/>
                                    <figcaption>
                                        <div class="figcaption">
                                            <div class="lgx-hover-link">
                                                <div class="lgx-vertical">
                                                    <a href="news-single.html"><i class="fa fa-book"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <div class="author-info">
                                                <img src="assets/img/news/author1.jpg" alt="author">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Jonathon Doe</a></h4>
                                                    <h5 class="subtitle">Lecturar of Education</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="text-area">
                                    <h3 class="title"><a href="news-single.html">The 10 best educational websites apps to learn new stuff for free</a></h3>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetuer adir elit. Aenean commodo ligula eget ...</p>
                                    <div class="hits-area">
                                        <span class="date"></span>
                                    </div>
                                    <div class="text-bottom">
                                        <a class="date" href="#">25 July 2016</a>
                                        <a class="link" href="news-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> <!--//.News-single-->
                        </div> <!--//.Item-->
                        <div class="item">
                            <!--News-single-->
                            <div class="lgx-news-single">
                                <figure>
                                    <img src="assets/img/news/news2.jpg" alt="Adv" title="Adv"/>
                                    <figcaption>
                                        <div class="figcaption">
                                            <div class="lgx-hover-link">
                                                <div class="lgx-vertical">
                                                    <a href="news-single.html"><i class="fa fa-book"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <div class="author-info">
                                                <img src="assets/img/news/author2.jpg" alt="author">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Riazul Islam</a></h4>
                                                    <h5 class="subtitle">Head of Education</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="text-area">
                                    <h3 class="title"><a href="news-single.html">UX Education: Designing free Online Learning Curriculum</a></h3>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetuer adir elit. Aenean commodo ligula eget ...</p>
                                    <div class="hits-area">
                                        <span class="date"></span>
                                    </div>
                                    <div class="text-bottom">
                                        <a class="date" href="#">25 July 2016</a>
                                        <a class="link" href="news-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> <!--//.News-single-->
                        </div> <!--//.Item-->
                        <div class="item">
                            <!--News-single-->
                            <div class="lgx-news-single">
                                <figure>
                                    <img src="assets/img/news/news3.jpg" alt="Adv" title="Adv"/>
                                    <figcaption>
                                        <div class="figcaption">
                                            <div class="lgx-hover-link">
                                                <div class="lgx-vertical">
                                                    <a href="news-single.html"><i class="fa fa-book"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <div class="author-info">
                                                <img src="assets/img/news/author3.jpg" alt="author">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Jewel Jonathon</a></h4>
                                                    <h5 class="subtitle">Professor of Education</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="text-area">
                                    <h3 class="title"><a href="news-single.html">The digital revolution in higher education has already happened</a></h3>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetuer adir elit. Aenean commodo ligula eget ...</p>
                                    <div class="hits-area">
                                        <span class="date"></span>
                                    </div>
                                    <div class="text-bottom">
                                        <a class="date" href="#">25 July 2016</a>
                                        <a class="link" href="news-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> <!--//.News-single-->
                        </div> <!--//.Item-->
                        <div class="item">
                            <!--News-single-->
                            <div class="lgx-news-single">
                                <figure>
                                    <img src="assets/img/news/news4.jpg" alt="Adv" title="Adv"/>
                                    <figcaption>
                                        <div class="figcaption">
                                            <div class="lgx-hover-link">
                                                <div class="lgx-vertical">
                                                    <a href="news-single.html"><i class="fa fa-book"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <div class="author-info">
                                                <img src="assets/img/news/author4.jpg" alt="author">
                                                <div class="author-info">
                                                    <h4 class="title"><a href="#">Devid Talukdar</a></h4>
                                                    <h5 class="subtitle">Master of Education</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="text-area">
                                    <h3 class="title"><a href="news-single.html">I no longer understand my PhD dissertation on Education</a></h3>
                                    <p class="text">Lorem ipsum dolor amet, consectetuer adir elit. Aenean commodo ligula dolor ...</p>
                                    <div class="hits-area">
                                        <span class="date"></span>
                                    </div>
                                    <div class="text-bottom">
                                        <a class="date" href="#">25 July 2016</a>
                                        <a class="link" href="news-single.html"><i class="fa  fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> <!--//.News-single-->
                        </div> <!--//.Item-->
                    </div><!--l//#lgx-OWL NEWS-->
                </div>
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section>
<!--BLOG END-->



<!--PHOTO GALLERY-->
<section>
    <div id="lgx-photo-gallery" class="lgx-photo-gallery"> <!--lgx-gallery-without-subsctibe-->
        <div id="lgx-memorisinner" class="lgx-memorisinner">
            <div class="lgx-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading">
                                <h2 class="heading-title">Photo Gallery</h2>
                                <h4 class="heading-subtitle">Some Amazing Think From Our Campus</h4>
                            </div>
                        </div>
                    </div>
                    <div class="lgx-gallery-area">
                        <div  class="lgx-gallery-single">
                            <figure>
                                <img title="Memories One" src="assets/img/gallery/gallery1.jpg" alt="Memories one"/>
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories One" href="assets/img/gallery/gallery1.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-gallery-single">
                            <figure>
                                <img src="assets/img/gallery/gallery2.jpg" alt="Memories Two" title="Memories Two" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Two" href="assets/img/gallery/gallery2.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-gallery-single">
                            <figure>
                                <img src="assets/img/gallery/gallery3.jpg" alt="Memories Three" title="Memories Three" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Three" href="assets/img/gallery/gallery3.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div  class="lgx-gallery-single">
                            <figure>
                                <img src="assets/img/gallery/gallery4.jpg" alt="Memories Four" title="Memories Four" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Four" href="assets/img/gallery/gallery4.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="lgx-gallery-single">
                            <figure>
                                <img src="assets/img/gallery/gallery5.jpg" alt="Memories Five" title="Memories Five" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Five" href="assets/img/gallery/gallery5.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="lgx-gallery-single">
                            <figure>
                                <img src="assets/img/gallery/gallery6.jpg" alt="Memories Six" title="Memories Six" />
                                <figcaption class="lgx-figcaption">
                                    <div class="lgx-hover-link">
                                        <div class="lgx-vertical">
                                            <a title="Memories Six" href="assets/img/gallery/gallery6.jpg">
                                                <i class="fa fa-search fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div> <!--//.CONAINER-->
            </div>
        </div><!--//.lgx CONTACT INNER-->
    </div>
</section>
<!--PHOTO GALLERY END-->


<!--Subscription-->
<section>
    <div id="lgx-subscription" class="lgx-subscription">
        <div class="lgx-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading">
                            <h2 class="heading-title">Our Newsletter</h2>
                            <h4 class="heading-subtitle">Dont Miss Out on the Updates</h4>
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="lgx-subscriber-area">
                            <h4 class="title">Don’t miss any updates of our new templates and extensions and all the astonishing offers we bring for you.</h4>
                            <div class="lgx-subscriber">
                                <form class="subscribe-form lgx-subscribe-form" >
                                    <div class="form-group">
                                        <input type="email" id="subscribe" placeholder="Ex: themearth@gmail.com" class="form-control lgx-input-form form-control"  />
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="lgx-submit" id="lgx-submit" class="lgx-submit the-submit-btn rippler rippler-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div> <!--//.SUBSCRIBE-->
                        </div>
                    </div>
                </div>
                <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.INNER -->
    </div>
</section>
<!--Subscription END-->




<!--FOOTER-->
<footer>
    <div id="lgx-footer" class="lgx-footer">
        <div class="lgx-getintouch-area">
            <div class="lgx-getintouch-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="lgx-getintouch">
                                If you Have Any Questions Call Us On <span>(088)920-456-7890</span>
                                <a class="lgx-btn lgx-btn-contact rippler rippler-default" href="contact.html">Get In Touch</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lgx-footer-middle"> <!--lgx-footer-middle-white-->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="lgx-footer-single">
                            <a class="logo" href="index.html"><img src="assets/img/logo2.png" alt="Logo"></a>
                            <address>
                                51 Francis Street, Darlinghurst <br>
                                NSW 2010, United States
                            </address>
                            <ul class="list-unstyled lgx-address-info">
                                <li><i class="fa fa-phone"></i>+61 1900 654 368</li>
                                <li><i class="fa fa-envelope"></i>office@educationplus.com</li>
                                <li><i class="fa fa-envelope"></i>office2@educationplus.com.au</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="lgx-footer-single">
                            <h2 class="title">The Education</h2>
                            <ul class="list-unstyled">
                                <li><a href="#">Admision Area</a></li>
                                <li><a href="#">Guidance Documents</a></li>
                                <li><a href="#">Help Desk</a></li>
                                <li><a href="#">FAQ Area</a></li>
                                <li><a href="#">Professional Point</a></li>
                                <li><a href="#">Courses in Education</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="lgx-footer-single">
                            <h2 class="title">Cources</h2>
                            <ul class="list-unstyled">
                                <li><a href="#">Interactive Python</a></li>
                                <li><a href="#">Advance Oracle</a></li>
                                <li><a href="#">Basic PHP</a></li>
                                <li><a href="#">Electronics</a></li>
                                <li><a href="#">Java Resources</a></li>
                                <li><a href="#">Courses Education</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="lgx-footer-single">
                            <h2 class="title">Instagram Feed</h2>
                            <div id="instafeed">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lgx-footer-bottom">
                    <div class="lgx-copyright">
                        <ul class="list-inline">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                        <p>© 2017 EducationPlus is powered by <a href="http://www.themearth.com/">themearth.</a> Brands are the property of their respective owners.</p>
                    </div>
                    <ul class=" list-inline lgx-social-footer">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>

            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.footer Middle -->
    </div>
</footer>
<!--FOOTER END-->


</div>


@endsection



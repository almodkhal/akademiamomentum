@extends('layouts.app')

<title>Akademia Momentum - {{ $post->title }}</title>

@section('content')
    <body class="single single-post">

    <div class="lgx-container ">
    <!-- ***  ADD YOUR SITE CONTENT HERE *** -->

    <section>
        <div class="lgx-banner lgx-banner-inner">
            <div class="lgx-inner">

            </div><!-- //.INNER -->
        </div>
    </section>




    <!--NEWS-->
    <section>
        <div id="lgx-course" class="lgx-event lgx-normal-single">
            <div class="lgx-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">


                            <article>
                                <header>
                                    <div class="lgxpage-header">
                                        <figure>
                                            <img src="{{ asset('storage/images/'. $post->image) }}" alt=""/>
                                            <figcaption>
                                                <p class="figcaption-text"><span>{{ $courses->count() }} Kurse Totale</span> ( 2 Interested 2 Going )</p>
                                            </figcaption>
                                        </figure>
                                        <div class="header-text">
                                            <h1 class="h2 title">{{ $post->title }}</h1>
                                            <p><span>Akademia Momentum</span> - Familja e Edukimit Europian</p>
                                            <p></p>
                                        </div>
                                        <div class="header-action">
                                            <a class="lgx-btn" href="#">Interested</a>
                                            <a class="lgx-btn" href="#">Going</a>
                                        </div>
                                    </div> <!--//.page-header-->
                                </header>
                                <section>
                                    <div class="lgx-single-section lgx-details">
                                        <p>
                                           {{ $post->description }}
                                        </p>
                                    </div> <!--//.About-->

                                    <div class="lgx-single-section lgx-speakers">
                                        <div class="heading">
                                            <h2>Speakers</h2>
                                        </div> <!--//.heading-->
                                        <div class="lgxevent_speaker_items">
                                            <div class="lgxevent_speaker_item">
                                                <div class="lgxcpanelbox">
                                                    <a href="#">
                                                        <figure>
                                                            <img src="assets/img/teachers/teacher1.jpg" alt="speaker"/>
                                                            <figcaption>
                                                                <p class="eventboxitem_title">Mr. Devid Jonathon</p>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div> <!--//.lgxevent_speaker_item-->
                                            <div class="lgxevent_speaker_item">
                                                <div class="lgxcpanelbox">
                                                    <a href="#">
                                                        <figure>
                                                            <img src="assets/img/teachers/teacher2.jpg" alt="speaker"/>
                                                            <figcaption>
                                                                <p class="eventboxitem_title">Mr. Devid Jonathon</p>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div> <!--//.lgxevent_speaker_item-->
                                            <div class="lgxevent_speaker_item">
                                                <div class="lgxcpanelbox">
                                                    <a href="#">
                                                        <figure>
                                                            <img src="assets/img/teachers/teacher3.jpg" alt="speaker"/>
                                                            <figcaption>
                                                                <p class="eventboxitem_title">Mr. Devid Jonathon</p>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div> <!--//.lgxevent_speaker_item-->
                                            <div class="lgxevent_speaker_item">
                                                <div class="lgxcpanelbox">
                                                    <a href="#">
                                                        <figure>
                                                            <img src="assets/img/teachers/teacher1.jpg" alt="speaker"/>
                                                            <figcaption>
                                                                <p class="eventboxitem_title">Mr. Devid Jonathon</p>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div> <!--//.lgxevent_speaker_item-->
                                            <div class="lgxevent_speaker_item">
                                                <div class="lgxcpanelbox">
                                                    <a href="#">
                                                        <figure>
                                                            <img src="assets/img/teachers/teacher2.jpg" alt="speaker"/>
                                                            <figcaption>
                                                                <p class="eventboxitem_title">Mr. Devid Jonathon</p>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div> <!--//.lgxevent_speaker_item-->
                                            <div class="lgxevent_speaker_item">
                                                <div class="lgxcpanelbox">
                                                    <a href="#">
                                                        <figure>
                                                            <img src="assets/img/teachers/teacher1.jpg" alt="speaker"/>
                                                            <figcaption>
                                                                <p class="eventboxitem_title">Mr. Devid Jonathon</p>
                                                            </figcaption>
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div> <!--//.lgxevent_speaker_item-->

                                        </div>
                                    </div>
                                    <div class="lgx-single-section lgx-sessions">
                                        <div class="heading">
                                            <h2>Sessions / Schedule</h2>
                                        </div> <!--//.heading-->
                                        <div class="sessions-details">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <div class="date">
                                                        dec <span>16</span>
                                                    </div>
                                                    <div class="session-info">
                                                        <p class="info-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:19:00 am - 8:19:10 pm</p>
                                                        <h3 class="title"><a href="#">Creative Conference Introduction</a></h3>
                                                        <p class="speaker">By <span>Devid Jonathon</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="date">
                                                        dec <span>17</span>
                                                    </div>
                                                    <div class="session-info">
                                                        <p class="info-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:19:00 am - 8:19:10 pm</p>
                                                        <h3 class="title"><a href="#">Design Conference and Prize-giving</a></h3>
                                                        <p class="speaker">By <span>Devid Jonathon</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="date">
                                                        dec <span>18</span>
                                                    </div>
                                                    <div class="session-info">
                                                        <p class="info-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:19:00 am - 8:19:10 pm</p>
                                                        <h3 class="title"><a href="#">Awards - Web Design Conference</a></h3>
                                                        <p class="speaker">By <span>Devid Jonathon</span></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="date">
                                                        dec <span>19</span>
                                                    </div>
                                                    <div class="session-info">
                                                        <p class="info-date"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:19:00 am - 8:19:10 pm</p>
                                                        <h3 class="title"><a href="#">Web Design Conference</a></h3>
                                                        <p class="speaker">By <span>Devid Jonathon</span></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> <!--//.Sessions-->
                                </section>
                                <footer>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="title">Share</h4>
                                            <div class="lgx-share">
                                                <ul class="list-inline lgx-social">
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </footer>
                            </article>

                        </div>
                    </div>
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section> <!--//.NEWS-->

@endsection

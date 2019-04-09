@extends('layouts.template')
@section('content')
<!--Invest Section-->
<section class="invest-section" style="background-image:url(images/index/empleados-surtivalle.png)">
    <div class="auto-container">
        <div class="content-box">
            <!--<div class="icon-box">
                        <span class="icon flaticon-bank"></span>
                    </div>-->
            <br><br>
            <h2>{{trans('welcomes.slogan')}}</h2>
            <br>
            <h2>{{trans('welcomes.company')}}</h2>
            <br><br>
            <a href=" {{url('/we')}} " class="theme-btn btn-style-six">Ver Mas</a>
        </div>
    </div>
</section>
<!--End Invest Section-->

<!--Services Section-->
<section class="services-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
            <div class="title">What We Do For ___ </div>
            <h2>Our Main Services </h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme">

            <!--Services Block Two-->
            <div class="services-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/service-2.jpg" alt="" />
                        <div class="icon-box">
                            <span class="icon flaticon-employee"></span>
                        </div>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="overlay-icon">
                                        <span class="icon flaticon-employee"></span>
                                    </div>
                                    <div class="text">Priority interst for many _____________, when comes
                                        sustainbility & _________ responsiblty, normal rules of _______ ...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="services-single.html">Audit & Assurance </a></h3>
                        <a href="services-single.html" class="arrow-box"><span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!--Services Block Two-->
            <div class="services-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/service-3.jpg" alt="" />
                        <div class="icon-box">
                            <span class="icon flaticon-money"></span>
                        </div>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="overlay-icon">
                                        <span class="icon flaticon-money"></span>
                                    </div>
                                    <div class="text">Priority interst for many _____________, when comes
                                        sustainbility & _________ responsiblty, normal rules of _______ ...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="services-single.html">Investment Planning </a></h3>
                        <a href="services-single.html" class="arrow-box"><span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!--Services Block Two-->
            <div class="services-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/service-4.jpg" alt="" />
                        <div class="icon-box">
                            <span class="icon flaticon-diagram"></span>
                        </div>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="overlay-icon">
                                        <span class="icon flaticon-diagram"></span>
                                    </div>
                                    <div class="text">Priority interst for many _____________, when comes
                                        sustainbility & _________ responsiblty, normal rules of _______ ...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="services-single.html">Marketing State </a></h3>
                        <a href="services-single.html" class="arrow-box"><span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!--Services Block Two-->
            <div class="services-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/service-2.jpg" alt="" />
                        <div class="icon-box">
                            <span class="icon flaticon-employee"></span>
                        </div>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="overlay-icon">
                                        <span class="icon flaticon-employee"></span>
                                    </div>
                                    <div class="text">Priority interst for many _____________, when comes
                                        sustainbility & _________ responsiblty, normal rules of _______ ...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="services-single.html">Audit & Assurance </a></h3>
                        <a href="services-single.html" class="arrow-box"><span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!--Services Block Two-->
            <div class="services-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/service-3.jpg" alt="" />
                        <div class="icon-box">
                            <span class="icon flaticon-money"></span>
                        </div>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="overlay-icon">
                                        <span class="icon flaticon-money"></span>
                                    </div>
                                    <div class="text">Priority interst for many _____________, when comes
                                        sustainbility & _________ responsiblty, normal rules of _______ ...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="services-single.html">Investment Planning </a></h3>
                        <a href="services-single.html" class="arrow-box"><span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!--Services Block Two-->
            <div class="services-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/service-4.jpg" alt="" />
                        <div class="icon-box">
                            <span class="icon flaticon-diagram"></span>
                        </div>
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="overlay-icon">
                                        <span class="icon flaticon-diagram"></span>
                                    </div>
                                    <div class="text">Priority interst for many _____________, when comes
                                        sustainbility & _________ responsiblty, normal rules of _______ ...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="services-single.html">Marketing State </a></h3>
                        <a href="services-single.html" class="arrow-box"><span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Services Section-->

<!--Choose Section-->
<section class="choose-section" style="background-image:url(images/background/5.jpg)">
    <div class="auto-container">
        <div class="sec-title light">
            <div class="title">What We Do For ___ </div>
            <h2>Why Choose Us </h2>
        </div>
        <div class="row clearfix">
            <!--Content Column-->
            <div class="content-column col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="text">
                        <p>There is some reason ______ why people choose Expo ____ 20 years for their ________
                            solutions. </p>
                        <p>We are trusted by ____ than 10,000 clients A _________ serenity has taken possession
                            __ my entire soul, like _____ sweet mornings of spring _____ I enjoy with my _____
                            heart. I am alone. </p>
                    </div>
                </div>
            </div>
            <!--Carousel Column-->
            <div class="carousel-column col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="three-item-carousel owl-carousel owl-theme">

                    <!--Services Block Three-->
                    <div class="services-block-three">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-briefcase-1"></span>
                            </div>
                            <div class="lower-content">
                                <h3><a href="services-single.html">Business Knowledge </a></h3>
                                <div class="text">How all this mistaken ____ of all nouncing ut _________.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Three-->
                    <div class="services-block-three">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-clock-2"></span>
                            </div>
                            <div class="lower-content">
                                <h3><a href="services-single.html">Poject Based Work </a></h3>
                                <div class="text">How all this mistaken ____ of all nouncing ut _________.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Three-->
                    <div class="services-block-three">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-call-center"></span>
                            </div>
                            <div class="lower-content">
                                <h3><a href="services-single.html">Professional Advice </a></h3>
                                <div class="text">How all this mistaken ____ of all nouncing ut _________.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Three-->
                    <div class="services-block-three">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-briefcase-1"></span>
                            </div>
                            <div class="lower-content">
                                <h3><a href="services-single.html">Business Knowledge </a></h3>
                                <div class="text">How all this mistaken ____ of all nouncing ut _________.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Three-->
                    <div class="services-block-three">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-clock-2"></span>
                            </div>
                            <div class="lower-content">
                                <h3><a href="services-single.html">Poject Based Work </a></h3>
                                <div class="text">How all this mistaken ____ of all nouncing ut _________.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Services Block Three-->
                    <div class="services-block-three">
                        <div class="inner-box">
                            <div class="icon-box">
                                <span class="icon flaticon-call-center"></span>
                            </div>
                            <div class="lower-content">
                                <h3><a href="services-single.html">Professional Advice </a></h3>
                                <div class="text">How all this mistaken ____ of all nouncing ut _________.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Choose Section-->

<!--Default Section-->
<section class="default-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Accordian Column-->
            <div class="accordian-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <!--Sec Title-->
                    <div class="sec-title">
                        <div class="title">Some FAQ’s </div>
                        <h2>Frequently Asked Questions </h2>
                    </div>

                    <!--Accordian Box-->
                    <ul class="accordion-box">

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                        class="icon icon-minus fa fa-minus"></span></div>How to remove a
                                ________ risk ?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">The green zone is _________ to everyone, but not ____
                                        anyone can join. The _____ step into the green ____ is the step in __
                                        your client’s future and ____ back at the advice _________ and services
                                        you provided. </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                        class="icon icon-minus fa fa-minus"></span></div>Evidence shows advisers
                                already _______ ?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">The green zone is _________ to everyone, but not ____
                                        anyone can join. The _____ step into the green ____ is the step in __
                                        your client’s future and ____ back at the advice _________ and services
                                        you provided. </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                        class="icon icon-minus fa fa-minus"></span></div>Conflicted advice can
                                substantially __________ ?
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">The green zone is _________ to everyone, but not ____
                                        anyone can join. The _____ step into the green ____ is the step in __
                                        your client’s future and ____ back at the advice _________ and services
                                        you provided. </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                        class="icon icon-minus fa fa-minus"></span></div>Our ethos reflects our
                                ______ ?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">The green zone is _________ to everyone, but not ____
                                        anyone can join. The _____ step into the green ____ is the step in __
                                        your client’s future and ____ back at the advice _________ and services
                                        you provided. </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

            <!--Stats Column-->
            <div class="stats-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <!--Sec Title-->
                    <div class="sec-title">
                        <div class="title">Some state skill </div>
                        <h2>Our Statistics Rate </h2>
                    </div>

                    <div class="text">This product is meant ___ educational purposes only. Resemblance __ real
                        persons, living or ____ is coincidental. </div>
                    <!--Skills-->
                    <div class="skills">
                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Strategy & Analysis </div>
                                <div class="skill-percentage">
                                    <div class="count-box"><span class="count-text" data-speed="2000" data-stop="80">0
                                        </span>% </div>
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="80"></div>
                                </div>
                            </div>
                        </div>
                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Eeconomic Growth </div>
                                <div class="skill-percentage">
                                    <div class="count-box"><span class="count-text" data-speed="2000" data-stop="65">0
                                        </span>% </div>
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="65"></div>
                                </div>
                            </div>
                        </div>
                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Achieves Goals </div>
                                <div class="skill-percentage">
                                    <div class="count-box"><span class="count-text" data-speed="2000" data-stop="90">0
                                        </span>% </div>
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="90"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Default Section-->

<!--Fluid Section Two-->
<section class="fluid-section-two">
    <div class="outer-container clearfix">
        <!--Image Column-->
        <div class="image-column" style="background-image:url(images/resource/image-2.jpg);">
            <figure class="image-box"><img src="images/resource/image-2.jpg" alt="" /></figure>
        </div>
        <!--Content Column-->
        <div class="content-column">
            <div class="inner-column">
                <!--Sec Title-->
                <div class="sec-title light">
                    <div class="title">Join Our Team </div>
                    <h2>Want To Be A ____ Of Our Team? </h2>
                </div>
                <div class="team-content">
                    <h3>Business Development Manager </h3>
                    <div class="text">Organized and well-connected Business ___________ Manager focused on
                        solution _______ to build trusted relationships ____ companies. </div>
                </div>
                <div class="team-content">
                    <h3>Project Lead </h3>
                    <div class="text">We are home to _ team of smart, driven ___________ and leaders who come __
                        work every day to _____, grow, and achieve </div>
                </div>
                <div class="team-content">
                    <h3>Business Solutions Analyst </h3>
                    <div class="text">Consulting provide a hybrid __ business and strategy acumen ______ with
                        the know-how to _______ even tough client problems. </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Fluid Section Two-->

<!--News Section Two-->
<section class="news-section-two">
    <div class="auto-container">
        <div class="sec-title">
            <div class="title">REcent Blogs </div>
            <h2>Our Latest News </h2>
        </div>
        <div class="two-item-carousel owl-carousel owl-theme">

            <!--News Block Two-->
            <div class="news-block-two">
                <div class="inner-box">
                    <div class="row clearfix">
                        <!--Image Column-->
                        <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            <div class="image">
                                <img src="images/resource/news-4.jpg" alt="" />
                                <a href="blog-detail.html" class="overlay-box">
                                    <span class="icon fa fa-link"></span>
                                </a>
                                <div class="post-date"><span>feb </span> 13 </div>
                            </div>
                        </div>
                        <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            <div class="content-inner">
                                <h3><a href="blog-detail.html">Wealth building tips for ______ day. </a></h3>
                                <div class="text">Your design goals will __ outlined and occupancy objectives
                                    ____ be discussed. </div>
                                <ul class="post-meta clearfix">
                                    <li><a href="blog-detail.html"><span class="icon fa fa-commenting-o"></span>04
                                            Comments </a></li>
                                    <li class="read-more pull-right"><a href="blog-detail.html">Read More <span
                                                class="fa fa-angle-double-right"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--News Block Two-->
            <div class="news-block-two">
                <div class="inner-box">
                    <div class="row clearfix">
                        <!--Image Column-->
                        <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            <div class="image">
                                <img src="images/resource/news-5.jpg" alt="" />
                                <a href="blog-detail.html" class="overlay-box">
                                    <span class="icon fa fa-link"></span>
                                </a>
                                <div class="post-date"><span>mar </span> 15 </div>
                            </div>
                        </div>
                        <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            <div class="content-inner">
                                <h3><a href="blog-detail.html">Wealth building tips for ______ day. </a></h3>
                                <div class="text">Your design goals will __ outlined and occupancy objectives
                                    ____ be discussed. </div>
                                <ul class="post-meta clearfix">
                                    <li><a href="blog-detail.html"><span class="icon fa fa-commenting-o"></span>04
                                            Comments </a></li>
                                    <li class="read-more pull-right"><a href="blog-detail.html">Read More <span
                                                class="fa fa-angle-double-right"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--News Block Two-->
            <div class="news-block-two">
                <div class="inner-box">
                    <div class="row clearfix">
                        <!--Image Column-->
                        <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            <div class="image">
                                <img src="images/resource/news-4.jpg" alt="" />
                                <a href="blog-detail.html" class="overlay-box">
                                    <span class="icon fa fa-link"></span>
                                </a>
                                <div class="post-date"><span>feb </span> 13 </div>
                            </div>
                        </div>
                        <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            <div class="content-inner">
                                <h3><a href="blog-detail.html">Wealth building tips for ______ day. </a></h3>
                                <div class="text">Your design goals will __ outlined and occupancy objectives
                                    ____ be discussed. </div>
                                <ul class="post-meta clearfix">
                                    <li><a href="blog-detail.html"><span class="icon fa fa-commenting-o"></span>04
                                            Comments </a></li>
                                    <li class="read-more pull-right"><a href="blog-detail.html">Read More <span
                                                class="fa fa-angle-double-right"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--News Block Two-->
            <div class="news-block-two">
                <div class="inner-box">
                    <div class="row clearfix">
                        <!--Image Column-->
                        <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            <div class="image">
                                <img src="images/resource/news-5.jpg" alt="" />
                                <a href="blog-detail.html" class="overlay-box">
                                    <span class="icon fa fa-link"></span>
                                </a>
                                <div class="post-date"><span>mar </span> 15 </div>
                            </div>
                        </div>
                        <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            <div class="content-inner">
                                <h3><a href="blog-detail.html">Wealth building tips for ______ day. </a></h3>
                                <div class="text">Your design goals will __ outlined and occupancy objectives
                                    ____ be discussed. </div>
                                <ul class="post-meta clearfix">
                                    <li><a href="blog-detail.html"><span class="icon fa fa-commenting-o"></span>04
                                            Comments </a></li>
                                    <li class="read-more pull-right"><a href="blog-detail.html">Read More <span
                                                class="fa fa-angle-double-right"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End News Section-->

<!--Message Section-->
<section class="message-section">
    <div class="image-layer" style="background-image:url(images/index/empleados-surtivalle.png)"></div>
    <div class="auto-container">
        <div class="form-container" style="background-image:url(images/index/job.jpg)">
            <div class="title">ESCRIBE TU MENSAJE</div>
            <h2>Have Any Questions? </h2>
            <div class="text">Thank you very much ___ your interest in our _______ and our services and <br />
                if you have ___ questions, please write us _ message now! </div>

            <!--Default Form-->
            <div class="default-form">
                <form method="post" action="contact.html">
                    <div class="row clearfix">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="firstname" value="" placeholder="Your name" required="" />
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="email" name="email" value="" placeholder="Your Email" required="" />
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea name="message" placeholder="Your Massage"></textarea>
                        </div>

                        <div class="form-group text-center col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="theme-btn message-btn">Send Massage </button>
                        </div>
                    </div>
                </form>
            </div>
            <!--End Default Form-->

        </div>
    </div>
</section>
<!--End Message Section-->

<!--Clients Section-->
<section class="clients-section">
    <div class="auto-container">

        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt="" /></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt="" /></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt="" /></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt="" /></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt="" /></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt="" /></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt="" /></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt="" /></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt="" /></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt="" /></a></figure>
                </li>
            </ul>
        </div>

    </div>
</section>
<!--End Clients Section-->
@endsection
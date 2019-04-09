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
            <h2>¡Eres El Mejor, Porque Haces Parte Del Mejor Equipo!</h2>
            <br>
            <h2>{{trans('welcomes.company')}}</h2>
            <br><br>
            <!--<div class="text">Each business niche may _______ a unique functionality of ___ own… With that
                        notion __ mind, our team of ____________ WordPress </div>-->
            <a href="#" class="theme-btn btn-style-six">Nuestros Servicios</a>
        </div>
    </div>
</section>
<!--End Invest Section-->
<br><br>
<!--Message Section-->
<section class="message-section">
    <div class="image-layer" style="background-image:url(images/background/3.jpg)"></div>
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
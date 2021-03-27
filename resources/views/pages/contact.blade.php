@extends('layouts.master-main')

@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="">Contact Us</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">@ College of Education, Agbor, Delta State, Nigeria. P.M.B 2090</p>
                </div>;2
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- contact -->
    <section class="section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="">Send Message</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <form action="#">
                        <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name">
                        <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email">
                        <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
                        <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
                        <button type="submit" value="send" class="btn btn-primary">SUBMIT</button>
                    </form>
                </div>
                <div class="col-lg-5">
                    <p class="mb-5"; style: align="justify"> The Journal of Studies in Education (JOSTED) is an open-access multi-disciplinary peer-reviewed Journal devoted to the publication of original (empirical and theoretical) research papers, critical, up-to-date and concise reviews on all themes related to all aspects of Education...</p>
                    <a href="tel:+8802057843248" class="text-color h5 d-block">+2348101292500, &nbsp;+2348107969220, <br>+2348037202989, &nbsp; +2348037120137,</a>
                    <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">info@josted.org</a>
                    <p> P.M.B 2090, College of Education, Agbor, Delta State, Nigeria.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact -->
@endsection

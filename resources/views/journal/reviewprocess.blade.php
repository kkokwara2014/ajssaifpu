<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('bootstrap_assets/img/ajssaifpu_logo.jpg')}}" type="image/png/jpg">
        <title>{{ $title }}</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/animate-css/animate.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap_assets/css/responsive.css')}}">
    </head>

    <body>

        <!--================Header Menu Area =================-->
        @include('layout.headmenu')
        <!--================Header Menu Area =================-->

        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                    data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <div class="page_link">
                            <a href="{{ route('index') }}">Home</a>
                            <a href="#">Publication</a>
                            <a href="{{ route('steps') }}">Review Process</a>
                        </div>
                        <h2>Review Process</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->


        <!--================Welcome Area =================-->
        <section class="welcome_area pad_btm">
            <div class="container">

                <div class="welcome_inner row" style="margin-top: 50px;">

                    <div class="col-lg-9 col-sm-9">
                        <div class="welcome_text">
                            <h3>Publication Review Process</h3>

                            <p style="text-align: justify">
                                When a paper arrives at a journal's editorial office a few things can happen:
                                <br>
                                A. Editor in Chief reviews paper herself/himself
                               <br>
                                B. Editor in Chief assigns to Associate Editor 
                                <br>
                                C. Editor or AE assigns to Peer Reviewers
                                <br><br>
                                Editors in Chief /Associate Editors look for: <br>
                                1. Appropriateness for the journal <br>
                                Is the topic relevant to the journal?<br>
                                Is the topic timely?<br>
                                Is the topic significant?<br>
                                Is the study unique? If so, How?<br><br>
                                2. What type of paper/research is it?<br>
                                If research, how is it structured?<br>
                                Randomized, controlled, blinded Meta-analysis? <br> 
                                Retrospective?
                                Case series or single case <br><br>
                                3. Did the author follow the instructions of the journal? <br>
                                Correct Number of Authors? <br>
                                Conflict of Interest/Disclosure Statement? <br>

                                Copyright release signed? <br>
                                Informed consent (if applicable)/Ethics considerations <br><br>
                                4. Did the author follow the Instructions of the journal? <br>
                                Is the article format correct? <br>
                                Structured abstract? <br>
                                Correct article format (Abstract, Introduction, Methods, Results,
                                Discussion, Conclusion, Refs?) <br>
                                Are References in correct format? Peer Reviewers look for: <br>
                                1. Are the technical aspects correct? <br>
                                Research Structure: <br>
                                Correctly described and performed? <br>
                                Statistics:
                                Correct analysis? <br> Accurate interpretation? <br> Clear presentation
                                Tables and Figures: <br>
                                Accurate and clear structure, presentation, and presentation? <br>
                                Do the numbers add up? <br>
                                Are the data consistent with the body of the paper? <br>
                                Abstract & Body of paper <br>
                                Do number of patients, other data match? Conclusions consistent? <br>
                               

                            </p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        @include('layout.rightsidebar')
                    </div>
                </div>
            </div>
        </section>
        <!--================End Welcome Area =================-->


        <!--================ start footer Area  =================-->
        @include('layout.footerwriteup')
        <!--================ End footer Area  =================-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('bootstrap_assets/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/popper.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/stellar.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/isotope/isotope-min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/flipclock/timer.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/vendors/counter-up/jquery.counterup.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/mail-script.js')}}"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{asset('bootstrap_assets/js/gmaps.min.js')}}"></script>
        <script src="{{asset('bootstrap_assets/js/theme.js')}}"></script>
    </body>

</html>
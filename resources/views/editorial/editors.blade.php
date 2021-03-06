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
                            <a href="{{ route('editors') }}">Editorial Board</a>
                        </div>
                        <h2>Editorial Board</h2>
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

                            <h3>Editorial Board</h3>
                            <p style="text-align: justify">
                                Our outstanding Editorial Board team are working round the
                                clock to ensure that quality research work are published.
                                Submitted papers are thoroughly reviewed before publication
                                is made.
                                Please click on the image to see more details of the Editor.
                            </p>

                            {{-- editorial board members begin here --}}
                            <div class="row team_inner">
                                <div class="col-lg-3 col-sm-6"></div>

                                <a href="#" data-toggle="modal" data-target="#dikeModal">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">
                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Dr. O. A Dike</h4>
                                                <p>Editor-in-Chief</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!--the modal for GM status-->
                                <div class="modal fade" id="dikeModal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog">
                                        <!--modal-sm-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><strong>Dr. O. A Dike's Profile</strong></h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-3 col-lg-3">
                                                        <img width="90" height="90"
                                                            src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}"
                                                            class="img-responsive pull-left">
                                                    </div>
                                                    <div class="col-sm-9 col-lg-9">
                                                        <p class="text-justify">
                                                            Cyril Ezeaku has over 20 years of Professional Safety &
                                                            Environment
                                                            experience in the Oil & Gas and Construction Industry,
                                                            within
                                                            Nigeria &
                                                            beyond, which includes excellent understanding of Oil spill
                                                            and
                                                            environmental
                                                            waste Management.
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success btn-sm"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div>

                                </div>


                                <a href="#">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">

                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Dr (Mrs.) S. N. Ezem</h4>
                                                <p>Managing Editor</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="col-lg-3 col-sm-6"></div>
                            </div>
                            <hr>
                            {{-- another team --}}
                            <div class="row team_inner">
                                <a href="#">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">
                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Prof. E. I. Akubugwo</h4>
                                                <p>Member</p>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                                <a href="#">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">
                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Prof. M. U. Onuu</h4>
                                                <p>Member</p>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                                <a href="#">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">
                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Dr. F. U Attah</h4>
                                                <p>Member</p>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                                <a href="#">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">
                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Prof. V. O. Nwaugo</h4>
                                                <p>Member</p>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <hr>
                            {{-- another team --}}
                            <div class="row team_inner">
                                <a href="#">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">
                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Prof. V. I. E. Ajiwe</h4>
                                                <p>Member</p>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                                <a href="#">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">
                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Dr. (Mrs.) A. U. Alo</h4>
                                                <p>Member</p>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                                <a href="#">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">
                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Dr. N. A Obasi</h4>
                                                <p>Member</p>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                                <a href="#">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">
                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Dr. V. U. Olugbue</h4>
                                                <p>Member</p>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>

                            {{-- another team --}}
                            <hr>
                            <div class="row team_inner">
                                <a href="#">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">
                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Dr. K. K. Ngele</h4>
                                                <p>Member</p>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                                <a href="#">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">
                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Dr. F. I. Nsude</h4>
                                                <p>Member</p>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                                <a href="#">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">
                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Dr. (Mrs.) U. R. Ali</h4>
                                                <p>Member</p>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                                <a href="#">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="team_item">
                                            <div class="team_img">
                                                <img class="img-fluid"
                                                    src="{{asset('bootstrap_assets/img/nouser_image.jpg')}}" alt="">
                                                <div class="hover">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="team_name">
                                                <h4>Dr. B. C. Anyaegbunam</h4>
                                                <p>Member</p>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>

                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        @include('layout.rightsidebar')
                    </div>
                </div>
            </div>
        </section>
        <!--================End Welcome Area =================-->

        {{-- modal --}}
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

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
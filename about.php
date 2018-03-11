<?php
/*
 * Template Name: About
 *
 *
 */
?>

<?php get_header(); ?>

<nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/">মেক-ইট-ইন-বাংলা</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" onclick="openLoginModal();" role="button" data-toggle="modal" data-target="#myModal">
                        <i class="icon-male-sign-alt icon-2x"></i>
                        প্রশিক্ষক পরিচিতি
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/MakeitinBangla" target="_blank" data-original-title="Like us on Facebook">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.youtube.com/channel/UCByvnPCMMKUnCSU7e--97oQ" target="_blank" data-original-title="Follow us on Youtube">
                        <i class="fa fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="profile-page page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/kit/city.jpg');"></div>
<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile">
                        <div class="avatar">
                            <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/2/005/05c/1b5/0d768d8.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                        </div>
                        <div class="name">
                            <h3 class="title">মোঃ রুহুল আমিন </h3>
                            <h6>Senior Software Engineer</h6>
                            <a href="https://www.facebook.com/ruhulAR" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/in/arruhulamin/" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="https://github.com/avastamin" class="btn btn-just-icon btn-link btn-github"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description text-center">
                <p>৮ বছর এর অধিক সময় ধরে <b>Full Stack Engineer </b>কাজ করেছেন। তিনি ২০১৩ সালে বাংলাদেশ BASIS থেকে বেস্ট <a href="http://outsourcingaward.basis.org.bd/winners/district/2013">outsourcing award</a> পেয়েছেন।
                   </p><p>এখন, <b>Senior Software Engineer </b> হিসাবে বার্লিন জার্মানির এক কোম্পানি তে কাজ করছেন । </p>
            </div>
        </div>
    </div>
</div>
    <?php get_footer(); ?>

<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Site main title';
?>

<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h1 class="mb-5"><em>The town's</em> number one place for <em>things</em></h1>
            </div>
            <div class="d-block d-sm-none mx-auto">
                <div class="row">
                    <div class="col-xl-12">
                        <a href="tel:+44##########" class="btn btn-primary custom-button green-btn"><i class="fa fa-3x fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-support m-auto text-primary"></i>
                    </div>
                    <h3>Lifesavers</h3>
                    <p class="lead mb-0">Bringing things back from the dead!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-wrench m-auto text-primary"></i>
                    </div>
                    <h3>Fixing stuff</h3>
                    <p class="lead mb-0">We fix broken things with wrenches!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-bubble m-auto text-primary"></i>
                    </div>
                    <h3>24/7/365 support</h3>
                    <p class="lead mb-0">We just love to chat!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image Showcases -->
<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row no-gutters">

            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background:red;"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>One thing</h2>
                <p class="lead mb-0">We do things and this is just one thing!</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background:green;"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>Another thing</h2>
                <p class="lead mb-0">Another thing we do!</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background:blue;"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>And another thing</h2>
                <p class="lead mb-0">This describes the third best thing we do!</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">Reviews</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/man-face-1jpg" alt="">
                    <h5>Name X.</h5>
                    <p class="font-weight-light mb-0">"How great is this!"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/woman-face-2.jpg" alt="">
                    <h5>Name Y.</h5>
                    <p class="font-weight-light mb-0">"I love it so much!"</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/man-face-3.jpg" alt="">
                    <h5>Name Z.</h5>
                    <p class="font-weight-light mb-0">"Totally not bad!"</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h2 class="mb-4"><?= Html::a('Contact us '.Html::tag('i', '', ['class' => 'fa fa-fw fa-angle-double-right']), ['site/contact'], ['class' => '', 'title' => 'Contact Us']) ?></h2>
            </div>
        </div>
    </div>
</section>

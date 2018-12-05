@extends('layouts.app')

@section('content')
    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="Images/LMD.mp4" type="video/mp4" >
        </video>
        <div class="container h-100">
            <div class="d-flex text-center h-100">
                <div class="my-auto w-100 text-white">
                    <h1 class="display-3 font-weight-bold font">LM&D Apparel</h1>
                    <h2 class="font-italic">Our standard is excellence</h2>
                </div>
            </div>
        </div>
    </header>
<br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img src="Images/example2.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-lg-6 col-sm-12">
                <h1>Welcome Valued Customer!</h1>
                <p>LM&amp;D specializes in screen printed apparel and embroidery services.
                    We are an experienced small team – responsive and ready to serve you, and we’re experts at what we do.</p>

            </div>
        </div>
    </div>
    <br><br>
        <section class="sec-spacer sec-color">
            <div class="container container-center">
                <h3 class="title text-center">Testimonials</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="tc-testimonial-style3">
                            <div class="testi-desc">
                                <p>
                                    "Excellent service, great quality and turn around time as scheduled with no delays. Awesome first experience!"
                                </p>
                            </div>
                            <div class="testi-photo">
                                <img src="Images/man.jpg" alt="Jhon Smith">
                            </div>
                            <div class="testi-info">
                                <span class="name">John Hasan</span>
                                <div class="position">
                                    <span class="meta">Manager</span> - <a href="#">ModernDesign</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="tc-testimonial-style3">
                            <div class="testi-desc">
                                <p>
                                    "Thank you for your consistent customer service, LOVE being able to deal with someone local who we can depend on!"
                                </p>
                            </div>
                            <div class="testi-photo">
                                <img src="Images/woman.jpg" alt="Jhon Smith">
                            </div>
                            <div class="testi-info">
                                <span class="name">Sarah Walters</span>
                                <div class="position">
                                    <span class="meta">Small Business Owner</span> - <a href="#">Innovative Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br><br>
    <br><br><br><br><br><br>
  @endsection

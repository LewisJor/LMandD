@extends('layouts.app')

@section('content')
    <div class="banner jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Our Services</h1>
        </div>
    </div>

    <section class="tc-post-grid-style2 sec-spacer">
        <div class="container container-center">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="post-grid-item">
                        <div class="post-grid-img">
                            <a href="#">
                                <img src="Images/screenprint.jpg" alt="screen print" width="auto" height="300">
                            </a>
                        </div>
                        <div class="post-grid-content">
                            <div class="post-grid-head">
                                <h3 class="post-grid-title">
                                    <a href="#">Screen Printing</a>
                                </h3>
                            </div>
                            <div class="post-grid-desc">
                                <p>Screen Printing is the most effective way of printing graphics
                                    on t-shirts and sweatshirts. Screen Printing is an art and our goal is to provide
                                    you with high quality apparel at reasonable prices.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                    <div class="post-grid-item">
                        <div class="post-grid-img">
                            <a href="#">
                                <img src="Images/embroidery.jpg" alt="embroidery" width="auto" height="300">
                            </a>
                        </div>
                        <div class="post-grid-content">
                            <div class="post-grid-head">
                                <h3 class="post-grid-title">
                                    <a href="#">Embroidery</a>
                                </h3>
                            </div>
                            <div class="post-grid-desc">
                                <p>Embroidery is the best way to decorate certain garments such as outerwear,
                                    hats, fleeces and some accessories. Embroidery is a long lasting, high detailed.</p>
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

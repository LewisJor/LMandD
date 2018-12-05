@extends('layouts.app')

@section('content')

    <div class="banner jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">About Us</h1>
        </div>
    </div>

    <div class="container-fluid">
    <!-- Portfolio Item Row -->
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="Images/Logo.svg" alt="" width="auto" height="100">
        </div>

        <div class="col-md-4">
            <h3 class="my-2">Who are we at LMandD?</h3>
            <p>LM & D was founded in 2000 by Amy and Dennis Trautsch</p>
                <p>We are a custom screen printing and embroidery company located in Mc Farland  WI.</p>
            <h3 class="my-2">What do we specialize in?</h3>
            <ul>
                <li>Company events</li>
                <li>Group Events</li>
                <li>Personalized Designs</li>
            </ul>
            <h4 class="font-italic">Our goal is to provide you with unique, high quality apparel at reasonable pricing</h4>
        </div>
    </div>
        <br><br>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4 text-center">Thank you for taking the time to look at our website and look forward to working with you in the future.</h3>
    <div class="row">
        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid aboutPics" src="Images/PurpleStide.jpg" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid aboutPics" src="Images/shirtstack.jpg" alt="" width="auto">
            </a>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid aboutPics" src="Images/bowling.png" alt="">
            </a>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid aboutPics" src="Images/embroideryEx.jpg" alt="">
            </a>
        </div>
    </div>
    <!-- /.row -->

    </div>
    <br><br>
    <br><br><br><br><br><br>
@endsection
@extends('layouts.app')

@section('content')
    <div class="banner jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Frequently Asked Questions</h1>
        </div>
    </div>
    <br>
        <div class="container-fluid">
            <div class="accordion" id="accordionExample">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6 mb-6">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button id="link" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What are the artwork requirements?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Black and white Vector  files work the best, such as adobe Illustrator (eps), adobe pdf.  Jpeg and tif files work as well.</p>
                                <p>Logos with more than one color would need to be color separated, for a small fee we would be happy to do that for you.</p>
                                <p>Just a reminder that shirts only print as good as the artwork is.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-6">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What are your order minimums?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>24 pieces of each design, you can mix and match different shirt styles
                                    and sizes to accommodate this</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-6">
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How much are your set up fees?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>All set up fees are included in pricing for screen printing, no screen charges.
                                    Embroidery a small one time set up fee (depending on complexity of design)</p>                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
            </div>
        </div>
        <br><br><br>
        <div class="container-fluid">
            <div class="accordion" id="accordionExample">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6 mb-6">
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    What is your turnaround time?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Two weeks + shipping time.  Larger orders may require additional time</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-6">
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can I mix and match shirt styles?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                Yes. On any one design you can mix and match such as 10 tshirts, 7 hoodies and 7 crew neck sweatshirts.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-6">
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How do I keep my pricing down?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Keep the print locations low. Instead of printing front AND back of the shirt, just choose one location.</p>
                                <p>The number of colors per design affects price.  The more colors you add increase pricing.</p>                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <br><br><br>
        <div class="container-fluid">
            <div class="accordion" id="accordionExample">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6 mb-6">
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                    Business Terms
                                </button>
                            </h5>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                            <div class="card-body">
                                <h5>Turnaround</h5>
                                <ul>
                                    <li>Starts with a 50% deposit for new customers and all the required information is completed.
                                        After relationship is established no deposit will be required.</li>
                                    <li>If you have a deadline a rush fee may apply</li>
                                </ul>
                                <h5>Minimums</h5>
                                <ul>
                                    <li>Screen Printing: 24 pieces</li>
                                    <li>Embroidery: 24 pieces</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-6">
                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Art Approval/Proofing.
                                </button>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Artwork is to be approved through mock up and emailed. Please check for color, spelling and accuracy of artwork by customer.  </p>                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-6">
                    <div class="card">
                        <div class="card-header" id="headingNine">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Out of stock items.
                                </button>
                            </h5>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>LM & D is not responsible for items that are out of stock.
                                    We do check inventory regularly, all items are ordered after your order is placed with us and cannot guarantee stock </p>                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <br><br>
    <br><br><br><br><br><br>
@endsection
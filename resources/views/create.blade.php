@extends('layouts.app')
<Style>
    form .form-field {margin-bottom: 20px;}
    form .form-field input {width: 100%;height: 50px;padding: 5px 18px;font-size: 14px;border: 2px solid rgba(0, 0, 0, 0.04);}
    form .form-field textarea {width: 100%;padding: 10px 18px;font-size: 14px;border: 2px solid rgba(0, 0, 0, 0.04);}
    form .form-field input:focus,
    form .form-field textarea:focus {border-color: rgba(0, 0, 0, 0.4);outline: none;}
    form .form-button {text-align: center;}
    form .form-button button {background: #fff;border: 2px solid rgba(0, 0, 0, 0.04);height: 46px;min-width: 170px;font-size: 14px;-webkit-transition: all .3s ease-out;transition: all .3s ease-out;}
    form .form-button button:hover {background: #444;border-color: #444;color: #fff;}
</Style>
@section('content')
    <br>
    <div class="container container-center">
        <div id="FormHolder">
            <h2 class="title text-center">Please provide your order form information {{ Auth::user()->fullname }}.</h2> <br>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif
            <form method="post" action="{{ route('orders.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-field">
                            <h4>Email Address</h4>
                            <input type="email" placeholder="example@email.com" name="email" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-field">
                            <h4>Phone Number</h4>
                            <input type="number" placeholder="XXX-XXX-XXXX" name="phoneNumber"required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-field">
                            <h4>Order Amount</h4>
                            <input type="number" placeholder="Order Amount Total" name="quantity" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-field">
                            <h4>Requested Date</h4>
                            <input type="date" placeholder="Request Date" name="request_date" >
                        </div>
                    </div>
                </div>
                <div class="form-field">
                    <div class="col-12 mb-1">
                        <input type="file" onchange="readURL(this);" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="validatedCustomFile"  >Choose image to upload.</label>
                    </div>
                    <img class="float-center" id="imageHere"/>
                </div>
                <input type="hidden" name="orderedBy" value={{Auth::User()->username}}>
                <div class="form-button">
                    <button type="submit">Submit Form</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imageHere')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    @endsection
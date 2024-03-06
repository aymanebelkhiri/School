@extends('layouts.P')

@section('title', 'Payment')

@section('content')
<div class="container">
    <div class="back">
        <button class="btn btn-secondary mt-3"><a href="/" class="text-white">Back</a></button>
    </div>
    <br>
    <section class="services" id="services">
        <div class="main" style="background-color: black; color: rgb(255, 255, 255);">
            <h1 class="text-center">Payment Form Widget</h1>
            <div class="content">
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
              
                    </div>
                </div>
                <div class="payment-info" style="background-color: #333; padding: 20px;">
                    <h3 class="text-center" style="margin-bottom: 20px;">Payment Information</h3>
                    <form action="{{ route('pay') }}" method="post">
                        @csrf
                        <div class="tab-for">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" style="color: gold;">
                            </div>
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" style="color: gold;">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount (USD)</label>
                                <input type="text" class="form-control" id="amount" name="amount" style="color: gold;">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Pay Now</button>
                    </form>
                </div>
            </div>
            <p class="text-center footer">© 2016 Payment Form Widget. All Rights Reserved | Template by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
        </div>
    </section>
</div>

@endsection

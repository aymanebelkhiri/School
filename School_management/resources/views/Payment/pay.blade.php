@extends('layouts.P')

@section('title', 'Payment')

@section('content')
<section class="services" id="services">
    <div class="main">
        <h1>Payment Form Widget</h1>
        <div class="content">
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <div class="pay-tabs">
                        <h2>Select Payment Method</h2>
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
                            <!-- Add more list items for other payment methods if needed -->
                        </ul>   
                    </div>
                
                                <h3>Payment Information</h3>
                                <form action="{{ route('pay') }}" method="post">
                                    @csrf
                                    <div class="tab-for">                
                                        <h5>Email Address</h5>
                                        <input type="text" name="email">
                                        <h5>First Name</h5>                                                    
                                        <input type="text" name="first_name">
                                        <h5>Amount (USD)</h5>
                                        <input type="text" id="amount" name="amount">
                                    </div>
                                    <input type="submit" value="Pay">
                                </form>
                            </div>
                        </div>
                        <!-- Add more tab-1 sections for other payment methods if needed -->
                    </div>
                </div>
            </div>  
        </div>
        <p class="footer">Copyright © 2016 Payment Form Widget. All Rights Reserved | Template by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
    </div>
</section>
@endsection
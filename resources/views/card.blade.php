@extends('layouts.card')
@section('content')

    <div class = "p-3 pb-1 card-component">
        <h3 class ="mb-0 text-primary">My Cart</h3>
        <span class = "font-weight">My Cart</span>
        <span> > Information & Shipping > Payment > Review</span>
    </div>
    <div class = " container-fluid row m-0 pt-4 pb-4">
        <div class = "col-lg-9 col-sm-12 col-md-9 col-xl-9">
            <div class = "product">
                <div class = "container-fluid m-0 row text-center pt-4 pb-2 product_title">
                    <div class = "col-lg-8 col-sm-8 col-md-8 col-xl-8">
                        <span class = "font-weight blue-color">Product</span>
                    </div>
                    <div class = "col-lg-2 col-sm-2 col-md-2 col-xl-2">
                        <span class = "font-weight blue-color">Qty</span></div>
                    <div class = "col-lg-2 col-sm-2 col-md-2 col-xl-2">
                        <span class = "font-weight blue-color">Total</span></div>
                </div>
                <div class = "pt-4 pb-2">
                    <div class = "container-fluid m-0 row text-center">
                        <div class = "col-lg-8 col-sm-8 col-md-8 col-xl-8 border-right">
                            <div class = "row pt-3 pb-3">

                                <div class = "col-lg-1 col-sm-1 col-md-1 col-xl-1">
                                    <input type="checkbox"  aria-label="Checkbox" class = "w-50">
                                </div>
                                <div class = "col-lg-5 col-sm-5 col-md-5 col-xl-5">
                                    <img class = "" src="{{asset('images/card/card1.svg')}}"></div>
                                <div class = "col-lg-6 col-sm-6 col-md-6 col-xl-6 text-start">
                                    <span class = "d-block font-weight blue-color h4 mb-0">Keto recipe book</span>
                                    <span class = "blue-color">lorem ipsum dolores</span>
                                </div>
                            </div>

                        </div>
                        <div class = "col-lg-2 col-sm-2 col-md-2 col-xl-2 border-right">
                            <div class="input-group justify-content-center ">
                            <span class="input-group-prepend">
                                <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]" style = "border: 1px solid #BACCFD;border-bottom-left-radius: 25px;border-top-left-radius: 25px;">
                                    <span class="fa fa-minus"></span>
                                </button>
                            </span>
                                <input type="text" name="quant[1]" class="w-25 input-number text-center count " value="1" min="1" max="10">
                                <span class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[1]"  style = "border: 1px solid #BACCFD;border-bottom-right-radius: 25px;border-top-right-radius: 25px;">
                                    <span class="fa fa-plus"></span>
                                </button>
                            </span>
                            </div>
                        </div>
                        <div class = "col-lg-2 col-sm-2 col-md-2 col-xl-2">
                            <div>
                                <span class = "font-weight blue-color">$24.99</span>
                            </div>
                        </div>
                    </div>
                    <div class = "container-fluid m-0 row text-center">
                        <div class = "col-lg-8 col-sm-8 col-md-8 col-xl-8 border-right">
                            <div class = "row pt-3 pb-3">

                                <div class = "col-lg-1 col-sm-1 col-md-1 col-xl-1">
                                    <input type="checkbox"  aria-label="Checkbox" class = "w-50">
                                </div>
                                <div class = "col-lg-5 col-sm-5 col-md-5 col-xl-5">
                                    <img class = "" src="{{asset('images/card/card2.svg')}}"></div>
                                <div class = "col-lg-6 col-sm-6 col-md-6 col-xl-6 text-start">
                                    <span class = "d-block font-weight blue-color h4 mb-0">Qetoe Breath Meter</span>
                                    <span class = "blue-color">lorem ipsum dolores</span>
                                </div>
                            </div>

                        </div>
                        <div class = "col-lg-2 col-sm-2 col-md-2 col-xl-2 border-right">
                            <div class="input-group justify-content-center ">
                            <span class="input-group-prepend">
                                <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]" style = "border: 1px solid #BACCFD;border-bottom-left-radius: 25px;border-top-left-radius: 25px;">
                                    <span class="fa fa-minus"></span>
                                </button>
                            </span>
                                <input type="text" name="quant[1]" class="w-25 input-number text-center count " value="3" min="1" max="10">
                                <span class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[1]"  style = "border: 1px solid #BACCFD;border-bottom-right-radius: 25px;border-top-right-radius: 25px;">
                                    <span class="fa fa-plus"></span>
                                </button>
                            </span>
                            </div>
                        </div>
                        <div class = "col-lg-2 col-sm-2 col-md-2 col-xl-2">
                            <div>
                                <span class = "font-weight blue-color">$520.00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class = "mt-3 text-center col-lg-12 col-sm-12 col-md-12 col-xl-12" style = "background:#FBFAF5">
                <img class = "w-75" src="{{asset('images/card/card-banner.svg')}}">
            </div>
        </div>

        <div class = "col-lg-3 col-sm-12 col-md-3 col-xl-3">
            <div class = "product-2 p-3">
                <p class = "font-weight text-light h4">Total</p>
                <span class = "font-weight text-light h3">$544.99</span><br>
                <span class = "yellow-color h6">You saved $31</span><br>
                <span class = "text-light h6">Tax included. Shipping calculated at checkout</span>

                <div class = "mt-4 mb-4 text-center">
                    <button class = "button-continue w-100 font-weight"> Proceed to Checkout </button>
                </div>
            </div>

            <div class="form-outline mt-4">
                <label class="form-label blue-color h5" for="form5Example2">Apply coupon</label>
                <div class = "d-flex justify-content-between">
                    <input type="text" id="form5Example2" class="form-control coupon-input"/>
                    <button type="submit" class="btn btn btn-danger w-25">
                        Apply
                    </button>
                </div>
            </div>
            <div class = "container-fluid row m-0 mt-4 p-0">

                <div class = "col-lg-4 col-sm-12 col-md-4 col-xl-4 p-0 text-center">
                    <img src="{{asset('images/card/card-mini.svg')}}">
                    <p class = "text-center">xxxxxxxxxxx
                        xxxxxxxxx
                    </p>
                    <button type="submit" class="btn btn btn-warning w-75 p-1 button-radius">
                        Add
                    </button>
                </div>
                <div class = "col-lg-4 col-sm-12 col-md-4 col-xl-4 p-0 text-center">
                    <img src="{{asset('images/card/card-mini.svg')}}">
                    <p class = "text-center">xxxxxxxxxxx
                        xxxxxxxxx
                    </p>
                    <button type="submit" class="btn btn btn-warning w-75 p-1 button-radius">
                        Add
                    </button>
                </div>
                <div class = "col-lg-4 col-sm-12 col-md-4 col-xl-4 p-0 text-center">
                    <img src="{{asset('images/card/card-mini.svg')}}">
                    <p class = "text-center">xxxxxxxxxxx
                        xxxxxxxxx
                    </p>
                    <button type="submit" class="btn btn btn-warning w-75 p-1 button-radius">
                        Add
                    </button>
                </div>

            </div>

        </div>
    </div>




@endsection
<style>
    .button-continue{
        background: #C4D62D;
        backdrop-filter: blur(17px);
        border-radius: 10px;
        border: none;
        font-size: 20px;
    }
    .product-2{
        border-radius:10px;
        background: #353E6C;
    }
    .button-radius{
        border-radius:20px!important;
    }
    .count{
        border:none;
        background: #FBF8EF;
        border-bottom: 1px solid #BACCFD;
        border-top: 1px solid #BACCFD;
        color: #6262AB;
    }
    .coupon-input{
        background-color: #FBF8EF!important;
        border-color:#BACCFD!important;
        width:65%!important;
    }
    .card-component{
        background: #EDEFEC;
        padding: 15px 30px;
    }
    .font-weight{
        font-weight: 700;
    }
    .product{
        border-radius: 10px;
        border: 1px solid #C4D62D;
    }
    .product_title{
        border-bottom: 1px solid #C4D62D;
    }
    .border-right{
        border-right:1px solid #BACCFD;
    }
    .blue-color{
        color:#6262AB
    }
    .yellow-color{
        color:#C4D62D;
    }


</style>

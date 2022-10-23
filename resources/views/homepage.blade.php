@extends('layouts.homepage')
@section('content')
    <div class = "section1">
        <div>
            <img class = "w-100" src="{{asset('images/girl/girl.svg')}}">
            <div></div>
        </div>

        <div class = "position-relative mt-5">
            <div class = "d-flex justify-content-around position-absolute w-100">
                <img style = "padding-bottom: 7%;width:13%" src="{{asset('images/girl/girl31.svg')}}">
                <img style = "padding-top: 13%;width:18%" src="{{asset('images/girl/girl32.svg')}}">
                <img style = "padding-bottom: 12%;width:27%" src="{{asset('images/girl/gorl33.svg')}}">
                <img style = "padding-top: 10%;width:22%" src="{{asset('images/girl/girl34.svg')}}">
            </div>
            <img class = "w-100 girl-2" src="{{asset('images/girl/girl3.svg')}}">
        </div>

        <div style = "margin-top:-2%">
            <h1 class ="m-auto text-center w-40">Australia’s longest running and cleanest Keto Program</h1>
        </div>

        <div class = "mt-3 text-center">
            <button class = "button-continue p-4 pt-2 pb-2"> GET STARTED </button>
        </div>
    </div>
    <div class = "section2 pt-5">
        <div>
            <img class = "w-100" src="{{asset('images/section2/section2_1.svg')}}">
        </div>
        <div >
            <div class = "row w-100 pb-5">
                <div class = "col-lg-4 col-sm-12 col-md-4 col-xl-4">
                    <div class = "all-card card-1 text-center p-3">
                        <h1>6</h1>
                        <h3>
                            Week Challenge
                        </h3>
                    </div>
                </div>

                <div class = "col-lg-4 col-sm-12 col-md-4 col-xl-4">
                    <div class = "all-card card-2 text-center p-3">
                        <h1>5</h1>
                        <h3>
                            Week Program
                        </h3>
                    </div>
                </div>
                <div class = "col-lg-4 col-sm-12 col-md-4 col-xl-4">
                    <div class = "all-card card-3 text-center p-3">
                        <h1>10</h1>
                        <h3>
                            Week Program
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class = "pb-5">
        <div>
            <h1 class ="m-auto text-center w-40">Lose 10kgs in 6 weeks and feel great</h1>
        </div>

        <div class = "mt-3 text-center">
            <button class = "button-continue button-join p-4 pt-2 pb-2"> JOIN NOW </button>
        </div>
    </div>




@endsection
<style>
    .all-card {
        width:45%;
        border-radius: 70px;
        border: 1px solid #FDD106;
        margin:auto
    }
    .all-card h1{
        font-size: 70px;
        font-weight: 00;
    }
    .all-card h3{
        font-size: 40px;
        font-weight: 600;
    }
    .card-1{
        background: #C4D62D;
        color:#332A7C;
    }
    .card-2{
        background: #6262AB;
        color:#fff;
    }
    .card-3{
        background: #FFA838;
        color:#fff;
    }
    .section1{
        padding-bottom: 120px
    }
    .section2{
        background: #FCF9F1;
    }
    .button-continue{
        background: #C4D62D;
        border-radius: 10px;
        border:none;
        font-size: 18px;
        color:#fff;
        font-weight: 700;
    }
    .button-join{
        background: #FDD106;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        color:#332A7C;
    }
    .girl-1{
        background: rgba(255, 255, 255, 0.6);
        filter: blur(3px);
        backdrop-filter: blur(9px);
        margin-top:-4%;
        height:15%
    }
    .w-40{
        width:40%;
        color: #332A7C;
        font-weight: 700;
    }
</style>

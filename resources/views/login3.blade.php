@extends('layouts.header')
@section('content')
    <div class = "p-5">
        <div>
            <div class = "col-6 m-auto">
                <h1 class = "text-center color-blue" style="font-weight: 700">Welcome to the Ultra Lite+ family</h1>
                <h1 class = "text-center color-blue" style="font-weight: 700">Press enter to continue to your dashboard</h1>
            </div>
        </div>
        <div class = "mt-5">
            <div class = "col-6 m-auto text-center">
                <div>
                    <button class = "button_1 button_2 mb-4"> enter Ultra Lite+</button>
                </div>
                <div>
                    <a class = "h2 color-blue" href="#">check results</a>
                </div>
            </div>
        </div>
    </div>

@endsection

<style>
    .button_1{
        background: rgba(255, 255, 255, 0.6);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.05);
        backdrop-filter: blur(17px);
        border-radius: 20px;
        width:352px;
        height:93px;
        font-size: 34px;
        border: none;
    }
    .button_2{
        background: linear-gradient(109.74deg, #FFE985 12.44%, #C4D62D 100.46%);
        border: 3px solid #C4D62D;
    }
    .color-blue{
        color:#332A7C;
    }
</style>

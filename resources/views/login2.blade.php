@extends('layouts.app')
@section('content')
    <div>

        <div>
            <div class = "col-6 m-auto">
                <div class="progress" style = "height:10px;">
                    <div class="progress-bar" role="progressbar" style="width:33%;background:#C4D62D" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class = "mt-5">
            <div class = "col-4 m-auto">
                <h1 class = "text-center" style="color:#353E6C;font-weight: 700">What’s your weight loss goal?</h1>
            </div>
        </div>
        <div class = "mt-5">
            <div class = "col-6 m-auto text-center">
                <div>
                    <button class = "button_1 mb-4"> > 60kg</button>
                </div>
                <div>
                    <button class = "button_1 mb-4"> 60-80 kg</button>
                </div>
                <div>
                    <button class = "button_1 button_2 mb-4"> <80kg</button>
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
</style>

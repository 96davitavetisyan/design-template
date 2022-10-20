@extends('layouts.app')
@section('content')
    <div class = "w-100">

        <div>
            <div class = "col-6 m-auto">
                <div class="progress" style = "height:10px;">
                    <div class="progress-bar" role="progressbar" style="width:12%;background:#C4D62D" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <div class = "mt-5">
            <div class = "col-4 m-auto">
                <h1 class = "text-center" style="color:#353E6C;font-weight: 700">What's your name?</h1>
            </div>
        </div>
        <div class = "mt-5">
            <div class = "col-6 m-auto">
                <input type="text" class = "nameInput">
            </div>
        </div>
    </div>

@endsection

<style>
    .nameInput{
        border: 1px solid #C4D62D;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.05);
        backdrop-filter: blur(17px);
        width:100%;
        height:93px;
        border-radius: 20px;
    }
</style>

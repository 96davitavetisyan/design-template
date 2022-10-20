@extends('layouts.header4')
@section('content')
    <div class = "p-5">
        <div class = "col-4 m-auto bg-white p-5 register-card ">
            <h2 class = "text-center color-blue" style="font-weight: 700">Hi There!</h2>
            <h4 class = "text-center color-blue mt-3" style="font-weight: 700">
                Here is a short quiz to get you started on your basic meal plan.</h4>
            <div class="row google">
                <div class="col-md-12 p-0">
                    <a class="btn btn-lg btn-google btn-block btn-outline w-100" href="#">
                        <img class = "" src="https://img.icons8.com/color/16/000000/google-logo.png">
                        <span class = "">Join With Google</span>
                    </a>
                </div>
            </div>
            <div class="row text-center">
                <div class = "col-8 m-auto">
                    <div class = "border-or d-inline-block m-1"></div>
                    <h3 class = "d-inline-block">or</h3>
                    <div class = "border-or d-inline-block m-1"></div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 p-0">
                    <input type="text" class = "name-input">
                </div>
                <div class="col-md-6 p-0">
                    <input type="text" class = "name-input" >
                </div>
            </div>
        </div>
    </div>

@endsection

<style>
    .name-input{
        border-radius: 10px;
    }
    .register-card{
        border-radius: 40px;
    }
    .color-blue{
        color:#332A7C;
    }
    .google{
        border: 0.5px solid #6262AB;
        border-radius: 10px;
    }
    .border-or{
        width: 37%;
        border: 1px solid #353E6C;
    }
</style>

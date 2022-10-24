@extends('layouts/client-menu-slider')
@section('content')
    <div>

        <div class = "m-auto backgound" style="width: 300px">
            <div class = "text-center">
                <img src="{{asset('images/ultralite-logo.svg')}}">
            </div>
            <div>
                <nav class="navbar navbar-light">
                    <form class="form-inline w-75 m-auto">
                        <input class="form-control mr-sm-2" style = "background: #C4C4C4" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </nav>
            </div>
            <div class = "p-4 h5 text-decoration-none">

                <div>
                    <a href="#" class = "text-decoration-none text-black" >
                        <p class = "font-weight">ULTRA LITE + DASHBOARD</p>
                    </a>
                </div>
                <div>
                    <a href="#" class = "text-decoration-none text-black" >
                        <p class = "font-weight">PROGRAMS</p>
                    </a>
                    <ul>
                        <a href="#" class = "text-decoration-none text-black" >
                            <li>CHALLENGE</li>
                        </a>
                        <a href="#" class = "text-decoration-none text-black" >
                            <li>PROGRAMS</li>
                        </a>
                        <a href="#" class = "text-decoration-none text-black" >
                            <li>ULTRA LITE +</li>
                        </a>
                    </ul>
                </div>
                <div>
                    <a href="#" class = "text-decoration-none text-black" >
                        <p class = "font-weight">PRODUCTS</p>
                    </a>
                    <ul>
                        <a href="#" class = "text-decoration-none text-black" >
                            <li>KETO PRODUCTS</li>
                        </a>
                        <a href="#" class = "text-decoration-none text-black" >
                            <li>MEAL PLAN</li>
                        </a>
                        <a href="#" class = "text-decoration-none text-black" >
                            <li>RECIPES</li>
                        </a>
                    </ul>
                </div>
                <div>
                    <a href="#" class = "text-decoration-none text-black" >
                        <p class = "font-weight">PRACTITIONER</p>
                    </a>
                    <ul>
                        <a href="#" class = "text-decoration-none text-black" >
                            <li class = "font-weight">VIRTUAL</li>
                        </a>
                        <a href="#" class = "text-decoration-none text-black" >
                            <li class = "font-weight">IN-PERSON</li>
                        </a>
                    </ul>
                </div>

                <div>
                    <a href="#" class = "text-decoration-none text-black" >
                        <p class = "font-weight">MESSAGES</p>
                    </a>
                </div>
                <div>
                    <a href="#" class = "text-decoration-none text-black" >
                        <p class = "font-weight">BLOGS</p>
                    </a>
                </div>
                <div>
                    <a href="#" class = "text-decoration-none text-black" >
                        <p class = "font-weight">FAQ</p>
                    </a>
                </div>
                <div class = "mt-5">
                    <a href="#" class = "text-decoration-none text-black" >
                        <p class = "font-weight">MY ACCOUNT</p>
                    </a>
                </div>
                <div>
                    <a href="#" class = "text-decoration-none text-black" >
                        <p class = "font-weight mb-0">YOUR ORDERD</p>
                    </a>
                </div>
                <div>
                    <a href="#" class = "text-decoration-none text-black" >
                        <p class = "font-weight mb-0">SUPPORT</p>
                    </a>
                </div>
                <div>
                    <a href="#" class = "text-decoration-none text-black" >
                        <p class = "font-weight mb-0">LOG OUT</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .backgound{
            background: #FBF8EF;
        }
        .font-weight{
            font-weight: 700;
        }
    </style>

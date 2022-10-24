@extends('layouts.blog')
@section('content')

    <div>
        <div class = "position-relative image_blog">
            <img class = "w-100" src="{{asset('images/blog1.svg')}}">
            <div class = "position-absolute bottom-0 text-light blog-text">
                <span class ="mb-0 ">BLOG</span>
                <p>Well researched content served with love!</p>
            </div>
        </div>

        <div class = "row m-4">
            <div class = "col-lg-4 col-sm-12 col-md-4 col-xl-4 blog_card">
                <a href="#" class = "text-decoration-none">
                    <img class = "w-100" src="{{asset('images/blog/card1.svg')}}">
                    <div class = "text-light blur p-2 pb-5 rounded-bottom">
                        <span class ="h4">Top 10 Healthy Brunch ideas </span>
                    </div>
                </a>
            </div>
            <div class = "col-lg-4 col-sm-12 col-md-4 col-xl-4 blog_card">
                <a href="#" class = "text-decoration-none">
                    <img class = "w-100" src="{{asset('images/blog/card2.svg')}}">
                    <div class = "text-light blur p-2 pb-5 rounded-bottom">
                        <span class ="h4">Best exercises to do at home </span>
                    </div>
                </a>
            </div>
            <div class = "col-lg-4 col-sm-12 col-md-4 col-xl-4 blog_card">
                <a href="#" class = "text-decoration-none">
                    <img class = "w-100" src="{{asset('images/blog/card3.svg')}}">
                    <div class = "text-light blur p-2 pb-5 rounded-bottom">
                        <span class ="h4">Decoding Keto myths!</span>
                    </div>
                </a>
            </div>
        </div>
        <div class = "row m-4">
            <div class = "col-lg-4 col-sm-12 col-md-4 col-xl-4 blog_card">
                <a href="#" class = "text-decoration-none">
                    <img class = "w-100" src="{{asset('images/blog/card4.svg')}}">
                    <div class = "text-light blur p-2 pb-5 rounded-bottom">
                        <span class ="h4">Top 10 Healthy Brunch ideas </span>
                    </div>
                </a>
            </div>
            <div class = "col-lg-4 col-sm-12 col-md-4 col-xl-4 blog_card">
                <a href="#" class = "text-decoration-none">
                    <img class = "w-100" src="{{asset('images/blog/card5.svg')}}">
                    <div class = "text-light blur p-2 pb-5 rounded-bottom">
                        <span class ="h4">Best exercises to do at home </span>
                    </div>
                </a>
            </div>
            <div class = "col-lg-4 col-sm-12 col-md-4 col-xl-4 blog_card">
                <a href="#" class = "text-decoration-none">
                    <img class = "w-100" src="{{asset('images/blog/card6.svg')}}">
                    <div class = "text-light blur p-2 pb-5 rounded-bottom">
                        <span class ="h4">Decoding Keto myths!</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection
<style>
    .blog-text{
        margin-left:20px;
    }
    .image_blog span{
        font-size:120px;
        line-height: 120px;
        mix-blend-mode: normal;
    }
    .image_blog p{
        font-size:20px;
        line-height: 20px;
        mix-blend-mode: normal;
        margin-left:10px ;
    }
     .blog_card{
         border-radius:30px;
         text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
     }
     .blur{
         margin-top:-50px;
         background: rgba(255, 255, 255, 0.6);
         backdrop-filter: blur(22px);
     }
</style>

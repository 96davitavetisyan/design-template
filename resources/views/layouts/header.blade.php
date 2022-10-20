<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="p-5 pt-3 pb-0 blue-header">
        <div class = "row">
            <div class = "col-4">
                <svg style = "cursor: pointer" class = "mt-4" width="30" height="24" viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 7H15" stroke="#25254F" stroke-width="2" stroke-linecap="round"/>
                    <path d="M1 12H15" stroke="#25254F" stroke-width="2" stroke-linecap="round"/>
                    <path d="M1 17H15" stroke="#25254F" stroke-width="2" stroke-linecap="round"/>
                </svg>

            </div>
            <div class = "col-4">
                <div class = "text-center">
                    <img src="{{asset('images/ultralite-logo.svg')}}">
                </div>
            </div>
            <div class = "col-4 d-flex justify-content-end">
                <svg style = "cursor: pointer" class = "mt-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 4.25C7.75 1.90279 9.65279 0 12 0C14.3472 0 16.25 1.90279 16.25 4.25C16.25 6.59721 14.3472 8.5 12 8.5C9.65279 8.5 7.75 6.59721 7.75 4.25ZM12 1.5C10.4812 1.5 9.25 2.73122 9.25 4.25C9.25 5.76878 10.4812 7 12 7C13.5188 7 14.75 5.76878 14.75 4.25C14.75 2.73122 13.5188 1.5 12 1.5Z" fill="#25254F"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 11.5C6.75736 11.5 5.75 12.5074 5.75 13.75V14.9383C5.75 14.9564 5.76311 14.9718 5.78097 14.9747C9.89972 15.6472 14.1003 15.6472 18.219 14.9747C18.2369 14.9718 18.25 14.9564 18.25 14.9383V13.75C18.25 12.5074 17.2426 11.5 16 11.5H15.6591C15.6328 11.5 15.6066 11.5042 15.5815 11.5123L14.716 11.795C12.9512 12.3712 11.0488 12.3712 9.28398 11.795L8.41847 11.5123C8.39342 11.5042 8.36722 11.5 8.34087 11.5H8ZM4.25 13.75C4.25 11.6789 5.92893 10 8 10H8.34087C8.52536 10 8.70869 10.0292 8.88407 10.0864L9.74959 10.3691C11.2119 10.8465 12.7881 10.8465 14.2504 10.3691L15.1159 10.0864C15.2913 10.0292 15.4746 10 15.6591 10H16C18.0711 10 19.75 11.6789 19.75 13.75V14.9383C19.75 15.6915 19.2041 16.3337 18.4607 16.4551C14.1819 17.1537 9.8181 17.1537 5.53927 16.4551C4.79588 16.3337 4.25 15.6915 4.25 14.9383V13.75Z" fill="#25254F"/>
                </svg>

            </div>

        </div>
        <div class = "row mt-3">
            <div class = "col-8 m-auto">
                <ul class = "d-flex list-unstyled">
                    <a href="#" class = "text-decoration-none text-dark m-auto">
                        <li> PRODUCTS <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 0.999999L6 6L1 1" stroke="#25254F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </li>
                    </a>
                    <a href="#" class = "text-decoration-none text-dark m-auto">
                        <li> PROGRAM <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 0.999999L6 6L1 1" stroke="#25254F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </li>
                    </a>
                    <a href="#" class = "text-decoration-none text-dark m-auto">
                        <li> PRACTITIONER </li>
                    </a>
                    <a href="#" class = "text-decoration-none text-dark m-auto">
                        <li> ABOUS AS </li>
                    </a>
                    <a href="#" class = "text-decoration-none text-dark m-auto">
                        <li>  BLOG </li>
                    </a>
                </ul>
            </div>
        </div>

    </div>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
<style>
    body{
        background:#BACCFD
    }
    .blue-header{
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(22px);
    }
</style>

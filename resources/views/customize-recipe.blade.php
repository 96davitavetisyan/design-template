@extends('layouts/client-menu-slider')
@section('content')
    <div class = "big-card mt-2 mb-0 ">
        <div class = "row m-0">

            <div class = "col-lg-5 col-sm-12 col-md-5 col-xl-5 p-0">
                <div class = "top-left">
                    <div class = "text-center" style = "height: 220px;padding:50px;">
                        <div>

                            <svg width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 35.7778L49 3M49 3L82 35.7778M49 3L49 62" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3 75L3 81.6667C3 89.0305 8.88426 95 16.1429 95L81.8571 95C89.1157 95 95 89.0305 95 81.6667V75" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        <input class="form-control form-control-sm" id="formFileSm" type="file" />
                    </div>
                </div>


                <div class = "col-lg-11 col-sm-12 col-md-11 col-xl-11 p-0 m-auto mt-3">
                    <input type="text" class = "nameInput h2" placeholder="Name of the dish">
                    <div class = "d-flex justify-content-between mt-4">
                        <div>
                            <svg width="127" height="18" viewBox="0 0 127 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.87987 0.886914C8.55429 -0.29564 10.2327 -0.295636 10.9071 0.886915L12.9725 4.5084C13.1629 4.84221 13.4919 5.07001 13.867 5.12765L17.2966 5.6547C18.7916 5.88444 19.316 7.80495 18.1517 8.78639L15.6528 10.8928C15.3021 11.1885 15.1372 11.6549 15.2224 12.1101L15.9224 15.8502C16.1966 17.3153 14.6849 18.4537 13.3879 17.7588L9.97589 15.9309C9.61136 15.7356 9.17566 15.7356 8.81113 15.9309L5.3991 17.7588C4.10208 18.4537 2.59046 17.3153 2.86465 15.8502L3.56464 12.1101C3.64984 11.6549 3.48492 11.1885 3.13418 10.8928L0.635274 8.78638C-0.52901 7.80495 -0.00460696 5.88444 1.49039 5.6547L4.92003 5.12765C5.2951 5.07001 5.62415 4.84221 5.81452 4.5084L7.87987 0.886914ZM9.60974 1.65288C9.5134 1.48395 9.27362 1.48395 9.17727 1.65288L7.11192 5.27437C6.6931 6.00875 5.96919 6.50991 5.14405 6.63671L1.7144 7.16376C1.50083 7.19658 1.42592 7.47094 1.59224 7.61114L4.09115 9.7176C4.86278 10.368 5.2256 11.394 5.03816 12.3956L4.33818 16.1357C4.29901 16.345 4.51495 16.5076 4.70024 16.4084L8.11227 14.5804C8.91424 14.1508 9.87278 14.1508 10.6747 14.5804L14.0868 16.4084C14.2721 16.5076 14.488 16.345 14.4488 16.1357L13.7489 12.3956C13.5614 11.394 13.9242 10.368 14.6959 9.7176L17.1948 7.61115C17.3611 7.47094 17.2862 7.19658 17.0726 7.16376L13.643 6.63671C12.8178 6.50991 12.0939 6.00875 11.6751 5.27437L9.60974 1.65288Z" fill="#F0552D"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M34.8799 0.886914C35.5543 -0.29564 37.2327 -0.295636 37.9071 0.886915L39.9725 4.5084C40.1629 4.84221 40.4919 5.07001 40.867 5.12765L44.2966 5.6547C45.7916 5.88444 46.316 7.80495 45.1517 8.78639L42.6528 10.8928C42.3021 11.1885 42.1372 11.6549 42.2224 12.1101L42.9224 15.8502C43.1966 17.3153 41.6849 18.4537 40.3879 17.7588L36.9759 15.9309C36.6114 15.7356 36.1757 15.7356 35.8111 15.9309L32.3991 17.7588C31.1021 18.4537 29.5905 17.3153 29.8647 15.8502L30.5646 12.1101C30.6498 11.6549 30.4849 11.1885 30.1342 10.8928L27.6353 8.78638C26.471 7.80495 26.9954 5.88444 28.4904 5.6547L31.92 5.12765C32.2951 5.07001 32.6241 4.84221 32.8145 4.5084L34.8799 0.886914ZM36.6097 1.65288C36.5134 1.48395 36.2736 1.48395 36.1773 1.65288L34.1119 5.27437C33.6931 6.00875 32.9692 6.50991 32.1441 6.63671L28.7144 7.16376C28.5008 7.19658 28.4259 7.47094 28.5922 7.61114L31.0911 9.7176C31.8628 10.368 32.2256 11.394 32.0382 12.3956L31.3382 16.1357C31.299 16.345 31.515 16.5076 31.7002 16.4084L35.1123 14.5804C35.9142 14.1508 36.8728 14.1508 37.6747 14.5804L41.0868 16.4084C41.2721 16.5076 41.488 16.345 41.4488 16.1357L40.7489 12.3956C40.5614 11.394 40.9242 10.368 41.6959 9.7176L44.1948 7.61115C44.3611 7.47094 44.2862 7.19658 44.0726 7.16376L40.643 6.63671C39.8178 6.50991 39.0939 6.00875 38.6751 5.27437L36.6097 1.65288Z" fill="#F0552D"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M88.8799 0.886914C89.5543 -0.29564 91.2327 -0.295636 91.9071 0.886915L93.9725 4.5084C94.1629 4.84221 94.4919 5.07001 94.867 5.12765L98.2966 5.6547C99.7916 5.88444 100.316 7.80495 99.1517 8.78639L96.6528 10.8928C96.3021 11.1885 96.1372 11.6549 96.2224 12.1101L96.9224 15.8502C97.1966 17.3153 95.6849 18.4537 94.3879 17.7588L90.9759 15.9309C90.6114 15.7356 90.1757 15.7356 89.8111 15.9309L86.3991 17.7588C85.1021 18.4537 83.5905 17.3153 83.8647 15.8502L84.5646 12.1101C84.6498 11.6549 84.4849 11.1885 84.1342 10.8928L81.6353 8.78638C80.471 7.80495 80.9954 5.88444 82.4904 5.6547L85.92 5.12765C86.2951 5.07001 86.6241 4.84221 86.8145 4.5084L88.8799 0.886914ZM90.6097 1.65288C90.5134 1.48395 90.2736 1.48395 90.1773 1.65288L88.1119 5.27437C87.6931 6.00875 86.9692 6.50991 86.1441 6.63671L82.7144 7.16376C82.5008 7.19658 82.4259 7.47094 82.5922 7.61114L85.0911 9.7176C85.8628 10.368 86.2256 11.394 86.0382 12.3956L85.3382 16.1357C85.299 16.345 85.515 16.5076 85.7002 16.4084L89.1123 14.5804C89.9142 14.1508 90.8728 14.1508 91.6747 14.5804L95.0868 16.4084C95.2721 16.5076 95.488 16.345 95.4488 16.1357L94.7489 12.3956C94.5614 11.394 94.9242 10.368 95.6959 9.7176L98.1948 7.61115C98.3611 7.47094 98.2862 7.19658 98.0726 7.16376L94.643 6.63671C93.8178 6.50991 93.0939 6.00875 92.6751 5.27437L90.6097 1.65288Z" fill="#F0552D"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M61.8799 0.886914C62.5543 -0.29564 64.2327 -0.295636 64.9071 0.886915L66.9725 4.5084C67.1629 4.84221 67.4919 5.07001 67.867 5.12765L71.2966 5.6547C72.7916 5.88444 73.316 7.80495 72.1517 8.78639L69.6528 10.8928C69.3021 11.1885 69.1372 11.6549 69.2224 12.1101L69.9224 15.8502C70.1966 17.3153 68.6849 18.4537 67.3879 17.7588L63.9759 15.9309C63.6114 15.7356 63.1757 15.7356 62.8111 15.9309L59.3991 17.7588C58.1021 18.4537 56.5905 17.3153 56.8647 15.8502L57.5646 12.1101C57.6498 11.6549 57.4849 11.1885 57.1342 10.8928L54.6353 8.78638C53.471 7.80495 53.9954 5.88444 55.4904 5.6547L58.92 5.12765C59.2951 5.07001 59.6241 4.84221 59.8145 4.5084L61.8799 0.886914ZM63.6097 1.65288C63.5134 1.48395 63.2736 1.48395 63.1773 1.65288L61.1119 5.27437C60.6931 6.00875 59.9692 6.50991 59.1441 6.63671L55.7144 7.16376C55.5008 7.19658 55.4259 7.47094 55.5922 7.61114L58.0911 9.7176C58.8628 10.368 59.2256 11.394 59.0382 12.3956L58.3382 16.1357C58.299 16.345 58.515 16.5076 58.7002 16.4084L62.1123 14.5804C62.9142 14.1508 63.8728 14.1508 64.6747 14.5804L68.0868 16.4084C68.2721 16.5076 68.488 16.345 68.4488 16.1357L67.7489 12.3956C67.5614 11.394 67.9242 10.368 68.6959 9.7176L71.1948 7.61115C71.3611 7.47094 71.2862 7.19658 71.0726 7.16376L67.643 6.63671C66.8178 6.50991 66.0939 6.00875 65.6751 5.27437L63.6097 1.65288Z" fill="#F0552D"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M115.88 0.886914C116.554 -0.29564 118.233 -0.295636 118.907 0.886915L120.972 4.5084C121.163 4.84221 121.492 5.07001 121.867 5.12765L125.297 5.6547C126.792 5.88444 127.316 7.80495 126.152 8.78639L123.653 10.8928C123.302 11.1885 123.137 11.6549 123.222 12.1101L123.922 15.8502C124.197 17.3153 122.685 18.4537 121.388 17.7588L117.976 15.9309C117.611 15.7356 117.176 15.7356 116.811 15.9309L113.399 17.7588C112.102 18.4537 110.59 17.3153 110.865 15.8502L111.565 12.1101C111.65 11.6549 111.485 11.1885 111.134 10.8928L108.635 8.78638C107.471 7.80495 107.995 5.88444 109.49 5.6547L112.92 5.12765C113.295 5.07001 113.624 4.84221 113.815 4.5084L115.88 0.886914ZM117.61 1.65288C117.513 1.48395 117.274 1.48395 117.177 1.65288L115.112 5.27437C114.693 6.00875 113.969 6.50991 113.144 6.63671L109.714 7.16376C109.501 7.19658 109.426 7.47094 109.592 7.61114L112.091 9.7176C112.863 10.368 113.226 11.394 113.038 12.3956L112.338 16.1357C112.299 16.345 112.515 16.5076 112.7 16.4084L116.112 14.5804C116.914 14.1508 117.873 14.1508 118.675 14.5804L122.087 16.4084C122.272 16.5076 122.488 16.345 122.449 16.1357L121.749 12.3956C121.561 11.394 121.924 10.368 122.696 9.7176L125.195 7.61115C125.361 7.47094 125.286 7.19658 125.073 7.16376L121.643 6.63671C120.818 6.50991 120.094 6.00875 119.675 5.27437L117.61 1.65288Z" fill="white"/>
                            </svg>
                        </div>
                        <div>
                            <span>

                                <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_323_337)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.99993 14C3.99993 21.732 10.311 28 18.096 28C25.8811 28 32.1921 21.732 32.1921 14C32.1921 6.26801 25.8811 0 18.096 0C10.311 0 3.99993 6.26801 3.99993 14ZM18.0959 22.7779C18.6482 22.7779 19.0959 22.3302 19.0959 21.7779V15.0001H25.9271C26.4794 15.0001 26.9271 14.5524 26.9271 14.0001C26.9271 13.4478 26.4794 13.0001 25.9271 13.0001H19.0959V6.22237C19.0959 5.67008 18.6482 5.22237 18.0959 5.22237C17.5436 5.22237 17.0959 5.67008 17.0959 6.22237V13.0001H10.2648C9.71249 13.0001 9.26478 13.4478 9.26478 14.0001C9.26478 14.5524 9.71249 15.0001 10.2648 15.0001H17.0959V21.7779C17.0959 22.3302 17.5436 22.7779 18.0959 22.7779Z" fill="#C4D62D"/>
                                    </g>
                                    <path d="M17.3058 21.2339L17.3058 6.01107" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                    <path d="M25.7631 14.4683H10.5402" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                    <defs>
                                        <filter id="filter0_d_323_337" x="-0.00012207" y="0" width="36.1923" height="36" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="4"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_323_337"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_323_337" result="shape"/>
                                        </filter>
                                    </defs>
                                </svg>
                            </span>
                            <span>

                                <svg width="28" height="34" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_323_344)">
                                        <path d="M23.0955 2V24.5631C23.0955 25.4572 22.0117 25.9019 21.3837 25.2655L13.3638 17.1391L5.80721 24.796C5.17918 25.4323 4.09546 24.9876 4.09546 24.0935V2C4.09546 0.895431 4.99089 0 6.09546 0H21.0955C22.2 0 23.0955 0.895431 23.0955 2Z" fill="#FBF8EF"/>
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_323_344" x="0.095459" y="0" width="27" height="33.5649" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                            <feOffset dy="4"/>
                                            <feGaussianBlur stdDeviation="2"/>
                                            <feComposite in2="hardAlpha" operator="out"/>
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_323_344"/>
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_323_344" result="shape"/>
                                        </filter>
                                    </defs>
                                </svg>
                            </span>


                        </div>
                    </div>
                    <div class = "d-flex justify-content-between mt-4 mb-2">
                        <div>
                            <p class = "mb-1 h5">Calories </p>
                            <p class = "mb-1 h5">Carbohydrate Content </p>
                            <p class = "mb-1 h5">Cholesterol Content </p>
                            <p class = "mb-1 h5">Fat Content </p>
                            <p class = "mb-1 h5">Fiber Content </p>
                            <p class = "mb-1 h5">Protein Content </p>
                        </div>
                        <div class = "g_bg text-end p-1">
                            <p class = "mb-1 h5">__ </p>
                            <p class = "mb-1 h5">__mg </p>
                            <p class = "mb-1 h5">__g </p>
                            <p class = "mb-1 h5">__g</p>
                            <p class = "mb-1 h5">__g </p>
                            <p class = "mb-1 h5">__g </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class = "col-lg-7 col-sm-12 col-md-7 col-xl-7 yellow-bg">
                <div class = "d-flex justify-content-between p-4 pb-0">
                    <div>
                        <button class = "name-input p-3 pt-1 pb-1 h6">add calories</button>
                        <button class = "name-input p-3 pt-1 pb-1 h6">add servings</button>
                    </div>
                    <div>
                        <button class = "border-0 bg-none">

                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M35 20C35 28.2843 28.2843 35 20 35C11.7157 35 5 28.2843 5 20C5 11.7157 11.7157 5 20 5C28.2843 5 35 11.7157 35 20ZM11.9191 26.6667L12.6262 25.9596L18.5858 20L12.6262 14.0404L11.9191 13.3333L13.3333 11.9191L14.0404 12.6262L20 18.5858L25.9596 12.6262L26.6667 11.9191L28.0809 13.3333L27.3738 14.0404L21.4142 20L27.3738 25.9596L28.0809 26.6667L26.6667 28.0809L25.9596 27.3738L20 21.4142L14.0404 27.3738L13.3333 28.0809L11.9191 26.6667Z" fill="#F0552D"/>
                            </svg>
                        </button>

                    </div>
                </div>
                <div class = "p-4 pb-0 pt-0">
                    <button class = "name-input p-3 pt-1 pb-1 h6 ">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.4029 4C10.4029 3.58579 10.056 3.25 9.62812 3.25C9.20022 3.25 8.85333 3.58579 8.85333 4V9C8.85333 9.25859 8.99095 9.49895 9.21748 9.636L12.3167 11.511C12.6795 11.7305 13.1575 11.6238 13.3843 11.2725C13.6111 10.9212 13.5008 10.4585 13.1379 10.239L10.4029 8.58431V4Z" fill="#353E6C"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.62812 0.25C4.63588 0.25 0.588867 4.16751 0.588867 9C0.588867 13.8325 4.63588 17.75 9.62812 17.75C14.6204 17.75 18.6674 13.8325 18.6674 9C18.6674 4.16751 14.6204 0.25 9.62812 0.25ZM2.13845 9C2.13845 4.99594 5.49169 1.75 9.62812 1.75C13.7646 1.75 17.1178 4.99594 17.1178 9C17.1178 13.0041 13.7646 16.25 9.62812 16.25C5.49169 16.25 2.13845 13.0041 2.13845 9Z" fill="#353E6C"/>
                        </svg>
                        add time
                    </button>
                </div>
                <div class = "name-input p-3 pt-1 pb-1"style = "height: 425px">
                    <div>
                        <p class = "font-weight h3 mb-0">Ingredients</p>
                        <ul>
                            <li>abc</li>
                        </ul>
                        <p class = "font-weight h3 mb-0">Preparation</p>
                        <ul>
                            <li>abcde</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class = "text-center save-col pt-4">
                <button class = "h3 border-0 bg-none"> Save</button>
            </div>
        </div>
    </div>
    <style>
        .font-weight{
            font-weight: 700;
        }
        .bg-none{
            background: none
        }
        .name-input{
            border-radius: 20px;
            background: #CCD2E3;
            border: 1px solid #656565;
            color:#353E6C
        }
        .save-col{
            background: #C4D62D;
            height:72px;
            border-radius: 0px 0px 70px 70px;
        }
        .yellow-bg{
            background: #FBF8EF;;
            border-radius: 0 70px 0px 0px ;
            border-bottom: 5px solid #FDD106;
        }
        .nameInput{
            width:100%;
            height:50px;
            border-radius: 20px;
            background: #CCD2E3;
        }
        .g_bg{

            border-radius: 20px;
            background: #CCD2E3;
        }
        .big-card{
            background: #FDD106;
            border: 5px solid #FDD106;
            border-radius: 70px;
            margin:350px;
        }
        .top-left{
            background: #C4C4C4;
            border-radius: 70px 0px 0px 0px;
            border-right: 5px solid #FDD106;
        }
    </style>

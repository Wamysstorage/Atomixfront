<header>

    <div class="logoContainer" id="logoContainer">
        <div class="logoLink">
            <div class="logoLinkAImgContainer">
                <a href="{{route('dashboardindex')}}">
                    <img src="{{asset('assets/dashboard/img/newLogo.png')}}" alt="logo">
                </a>
            </div>
            <div class="overlayLanguage"></div>
            <div class="language" id="language">
                <button aria-label="language" class="languageButton language_button" id="langBut">
                    <img src="{{asset('assets/src/img/flags/GB.svg')}}" alt="gb" class="flMr" id="flagImg">
                    <img src="{{asset('assets/src/img/icons/arrowdown.svg')}}" alt="arrow" id="img2" class="langArrow">
                </button>
                <ul id="ul" class="languageList">
                    <li>
                        <a href="http://www.google.com">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/GB.svg')}}" alt="gb">
                                English
                            </div>
                            <div class="code">GB</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/RU.svg')}}" alt="ru">
                                Russian
                            </div>
                            <div class="code">RU</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/CN.svg')}}" alt="cn">
                                Chinese
                            </div>
                            <div class="code">CN</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/FR.svg')}}" alt="fr">
                                French
                            </div>
                            <div class="code">FR</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/VN.svg')}}" alt="vn">
                                Vietnamese
                            </div>
                            <div class="code">VN</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/DE.svg')}}" alt="de">
                                German
                            </div>
                            <div class="code">DE</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/ES.svg')}}" alt="es">
                                Spanish
                            </div>
                            <div class="code">ES</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="whiteLineSection">
        <div class="whiteLineContainer" id="whiteLine">
            <div class="whiteLineContainerFirst">
                <img src="{{asset('assets/dashboard/img/userLogo.png')}}" class="userLogo">
                <div class="whiteLineContainerFirstText">
                    <div><b>{{auth()->user()->first_name}} {{auth()->user()->last_name}}</b></div>
                    <div><span class='normalSpan'>Status</span><b>: User</b></div>
                </div>
            </div>
            <div class="whiteLineContainerFirstID">
                ID: <span class="whiteLineInfoSpan">{{ auth()->user()->referral_id}}</span>

            </div>
            <div class="whiteLineContainerFirstROI">
                ROI: <span class="whiteLineInfoSpan">X%</span>
            </div>
            <div class="whiteLineContainerTotalBalance">
                Total Balance: <span class="whiteLineInfoSpan">0.00 USD</span>
            </div>
            <div class="logOut">
                <a href="#" onclick="logout.submit()" class="logOutPictureLink">
                    <img src="{{asset('assets/dashboard/img/logOutLogo.png')}}" alt="log out picture" class="logOutPicture">
                </a>
                <form method="get" action="{{ route('logout') }}" id="logout">
                    @csrf
                </form>
                <a href="#" class="burgerMenuPictureLink">
                    <img src="{{asset('assets/dashboard/img/burgerMenu.png')}}" alt="log out picture" class="burgerMenuPicture">
                </a>
            </div>
        </div>
    </section>

</header>

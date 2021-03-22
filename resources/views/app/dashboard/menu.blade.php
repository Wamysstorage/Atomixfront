<div class="wallet">
    <ul class="walletUl">

        <li class="walletLi">
            <a href="{{route('dashboardindex')}}">
                <img src="{{asset('assets/dashboard/img/walletLogo.png')}}" alt="wallet logo">
                <span class="walletLiSpan walletSpan">WALLET</span>
            </a>
        </li>

        <li class="walletLi partnersLi"  id="partners" >
            <a href="{{route('partnersone')}}">
                <img src="{{asset('assets/dashboard/img/partnersLogo.png')}}" class="partnersImg" alt="partners logo">
                <span class="walletLiSpan partnersSpan">PARTNERS</span>
            </a>
        </li>

        <li class="walletLi clickableLi">
            <img src="{{asset('assets/dashboard/img/servicesLogo.png')}}" class="servicesImg" alt="services logo">
            <span class="walletLiSpan">SERVICES</span>
            <img class="arrowImg" src="{{asset('assets/dashboard/img/whiteArrow.png')}}" alt="arrow">
        </li>

        <ul class="hiddenUl" id="hideenLi">
            <li class="hiddenLi investmentsLi">
                <a href="{{route('investments')}}">
                    <img src="{{asset('assets/dashboard/img/investmentsLogo.png')}}" alt="investments logo">
                    <span class="walletLiSpan">Investments</span>
                </a>
            </li>

            <li class="hiddenLi">
                <a href="{{route('atomixLife')}}">
                    <img src="{{asset('assets/dashboard/img/atomixLifeLogo.png')}}" alt="atomix logo">
                    <span class="walletLiSpan">AtomixLife</span>
                </a>
            </li>
        </ul>

        <li class="walletLi myServicesLi">
            <a href="{{route('myServices')}}">
                <img src="{{asset('assets/dashboard/img/myServicesLogo.png')}}" alt="myServices logo">
                <span class="walletLiSpan">MY SERVICES</span>
            </a>
        </li>

        <li class="walletLi">
            <a href="">
                <img src="{{asset('assets/dashboard/img/myDocumentsLogo.png')}}" alt="myDocument logo">
                <span class="walletLiSpan">MY DOCUMENTS</span>
            </a>
        </li>

        <li class="walletLi settingsLi">
            <a href="{{route('settings')}}">
                <img src="{{asset('assets/dashboard/img/settingsLogo.png')}}" class="menuSettingsImage" alt="settings logo">
                <span class="walletLiSpan">SETTINGS</span>
            </a>
        </li>

        <li class="walletLi logOutMedia">
            <a href="{{ route('logout') }}">
                <img src="{{asset('assets/dashboard/img/logOutWhite.png')}}" alt="logout logo">
                <span class="walletLiSpan">LOGOUT</span>
            </a>
        </li>

    </ul>
</div>

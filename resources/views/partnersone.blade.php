@extends('app.dashboard.app')

@section('title','Dashboard')

@section('content')
    @include('app.dashboard.menu')



    <section class="content">
        <div class="blur blurContainer partners1BlurContainer">

            <div class="inBlurAllContainer">

                <div class="firstLine">
                    <h1>PARTNERS</h1>


                    <div class="copyInputContainer">
                        <span>Your referral link</span>
                        <input type="text" value=""
                               readonly>
                        <button class="copyButton" id="copyButton"></button>
                    </div>
                </div>

            </div>
            <div class="aboutPartnersInfoContainer">
                <div class="totalPartnersContainer">
                    <span class="totalPartnersContainerText">Total partners:</span>
                    <span class="totalPartnersContainerValue">20</span>
                </div>
                <div class="partnersIncomeBonusContainer">
                    <span class="partnersIncomeBonusContainerText">Partners bonus income:</span>
                    <span class="partnersIncomeBonusContainerValue">0.00 USD</span>
                </div>
                <div class="firstLinePartnersContainer">
                    <span class="firstLinePartnersContainerText">First line partners:</span>
                    <span class="firstLinePartnersContainerValue">2</span>
                </div>
            </div>
                <div class="partnersLineContainer">
                    <a href="{{route('dashboardpartner')}}">1st line partners</a>
                    <a href="{{route('dashboardpartner')}}">2st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">3st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">4st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">5st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">6st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">7st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">8st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">9st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">10st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">11st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">12st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">13st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">14st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">15st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">16st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">17st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">18st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">19st line partners</a>
                    <a href="{{route('dashboardpartner')}}" class="passivePartnersLineStyles">20st line partners</a>
                </div>
                 <p class="partners1-seeMore">see more</p>
            </div>
    </section>
@endsection

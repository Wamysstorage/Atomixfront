@extends('app.dashboard.app')

@section('title','Dashboard')

@section('content')
    @include('app.dashboard.menu')

    <section class="content">
        <div class="blur blurContainer blurContainer2">

            <div class="inBlurAllContainer">

                <p class="content2Header">
                    <a href="#" class="partners2HeaderLink">
                        <span>PARTNERS</span>
                    </a>/

                    <span>1st line partners</span>
                </p>

                <div class="aboutPartnersInfoContainer content2aboutPartnersInfoContainer">
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

                <p class="partners2-partnersLine">1st line partners</p>

                <div class="partners2-cardContainer">
                    @foreach($partner as $item)

                        <div class="partners2-card">
                            <p>{{$item->first_name}}  {{$item->last_name}}</p>
                            <p>ID #{{$item->referral_id}}</p>
                        </div>
                    @endforeach

                </div>

                <p class="partners2-seeMore">see more</p>

            </div>

        </div>
    </section>
@endsection


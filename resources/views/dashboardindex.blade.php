@extends('app.dashboard.app')

@section('title','Dashboard')

@section('content')
@include('app.dashboard.menu')
    <div class="content">
        <div class="blur">
            <div class="contentContainer">

                <div class="aboutUser">
                    <div class="userIncomeInfoLines">
                        <span class="leftSide">Active income:</span>
                        <span class="rightSide">USD</span>
                    </div>
                    <div class="userIncomeInfoLines">
                        <span class="leftSide">Passive income:</span>
                        <span class="rightSide">USD</span>
                    </div>
                    <div class="userIncomeInfoLines">
                        <span class="leftSide">Partners bonus income:</span>
                        <span class="rightSide">USD</span>
                    </div>
                    <div class="userIncomeInfoLines">
                        <span class="leftSide">Total partners:</span>
                        <span class="rightSide">XX</span>
                    </div>
                    <div class="userIncomeInfoLines">
                        <span class="leftSide">Withdrawal</span>
                        <span class="rightSide">XX</span>
                    </div>
                </div>

                <div class="sliderWrapperWrapper">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                            <div class="swiper-slide a1"></div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection

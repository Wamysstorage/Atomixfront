@extends('app.dashboard.app')

@section('title','Dashboard')

@section('content')
@include('app.dashboard.menu')
        <div class="blur">
        <div class="allAtomixLifeContainer">
        <div class='atomixLifeHeader'>SERVICES/AtomixLife</div>
            <div class='atomixLifePackagesSide'>
                <div class="atomixLifePackageSlideAllPackages">
                    <button class='atomixLifePackagesButton'>Buy</button>
                    <div><img src="{{asset('assets/dashboard/img/atomixLife/Electronics.png')}}" alt="" class='atomixLifeImage'></div>
                </div>
                <div class="atomixLifePackageSlideAllPackages">
                    <button class='atomixLifePackagesButton'>Learn more</button>
                    <div><img src="{{asset('assets/dashboard/img/atomixLife/No Credit.png')}}" alt="" class='atomixLifeImage'></div>
                </div>
                <div class="atomixLifePackageSlideAllPackages">
                    <button class='atomixLifePackagesButton'>Learn more</button>
                    <div><img src="{{asset('assets/dashboard/img/atomixLife/Car Drive.png')}}" alt="" class='atomixLifeImage'></div>
                </div>
                <div class="atomixLifePackageSlideAllPackages">
                    <button class='atomixLifePackagesButton'>Learn more</button>
                    <div><img src="{{asset('assets/dashboard/img/atomixLife/Lifestyle.png')}}" alt="" class='atomixLifeImage'></div>
                </div>
                <div class="atomixLifePackageSlideAllPackages">
                    <button class='atomixLifePackagesButton'>Learn more</button>
                    <div><img src="{{asset('assets/dashboard/img/atomixLife/My House.png')}}" alt="" class='atomixLifeImage'></div>
                </div>             
            </div>
    </div>
    </div>


@endsection

@extends('app.dashboard.app')

@section('title','Dashboard')

@section('content')
    @include('app.dashboard.menu')

    <section class="content">
        <div class="blur blurContainer myServicesBlur">

            <div class="myServicesContentContainer">

                <div class="myServicesHeaderContainer">
                    <p class="myServicesHeaderText">SERVICES/My services</p>
                </div>

                <div class="myServicesCheckoutButtonsContainers">

                    <div class="myServicesBtnContainer">
                        <div class="myServicesInvestmentsDiv myServicesActiveBtn">
                            <p class="myServicesInvestmentsText myServicesActiveText">Investments</p>
                        </div>
                        <div class="myServicesAtomixLifeDiv">
                            <p class="myServicesAtomixLifeText">AtomixLife</p>
                        </div>
                    </div>


                    <div class="myServicesLine"></div>

                </div>

                <div class="myServicesInvestmentsContentContainer">

                    <div class="myServicesNameOfPackageLeft">
                        <h3>
                            Name of package:
                        </h3>

                        <ul>
                            <li>100CNT$/210</li>
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
{{--                            <li>100CNT$/210</li>--}}
                        </ul>
                    </div>

                    <div class="myServicesActivationDateRight">
                        <h3>
                            Activation date:
                        </h3>

                        <ul>
                            <li>XX.XX.XX</li>
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
{{--                            <li>XX.XX.XX</li>--}}
                        </ul>
                    </div>

                </div>

                <div class="myServicesAtomixLifeContentContainer">

                    <div class="myServicesAtomixLifeCard">
                        <p class="myServicesNameOfPackege">
                            Name of package:
                        </p>
                        <p class="myServicesActivationDate">
                            Activation date: <span>DD.MM.YY</span>
                        </p>

                        <div class="myServicesProgressBarBlockContainer">
                            <p>Days left:</p>

                            <div class="myServicesProgressContainer">
                                <div class="myServicesProgress"></div>
                            </div>

                            <span>+nnn</span>
                        </div>

                    </div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>
                    <div class="myServicesAtomixLifeCard"></div>

                </div>

            </div>

        </div>
    </section>

@endsection

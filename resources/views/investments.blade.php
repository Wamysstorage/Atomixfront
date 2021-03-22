@extends('app.dashboard.app')

@section('title','Dashboard')

@section('content')
    @include('app.dashboard.menu')
    <div class="content">
        <div class="blur">
            <div class="my_investments" id="my_investment">

                <!-- Header START -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="inv_header">
                            <h2>SERVICES/Investments</h2>
                        </div>
                    </div>
                </div>
                <!-- Header END -->

                <!-- Tabs START -->
                <div class="container-fluid" id="my_view">
                    <div class="tabs">

                        <div class="tabs-header">
                            <div class="tabs-header__item tabs_active js-tab-trigger" data-tab="dt_1">210 days</div>
                            <div class="tabs-header__item js-tab-trigger" data-tab="dt_2">420 days</div>
                        </div>

                        <div class="tabs_line"></div>

                        <div class="tabs-content">
                            <div class="tabs-content__item tabs_active js-tab-content container-fluid" data-tab="dt_1">
                                <!-- Modals first content START -->

                                <!-- First Modals buttons START-->
                                <div class="row modal_buttons_row">
                                    <a href="##" class="link footer_active modal_link js-footer-trigger" data-foot="1">100 CNT$</a>
                                    <a href="##" class="link modal_link js-footer-trigger" data-foot="2">500 CNT$</a>
                                    <a href="##" class="link modal_link js-footer-trigger" data-foot="3">1000 CNT$</a>
                                    <a href="##" class="link modal_link js-footer-trigger" data-foot="4">2500 CNT$</a>
                                    <a href="##" class="link modal_link js-footer-trigger" data-foot="5">5000 CNT$</a>
                                    <a href="##" class="link modal_link js-footer-trigger" data-foot="6">10 000 CNT$</a>
                                    <a href="##" class="link modal_link js-footer-trigger" data-foot="7" >25 000 CNT$</a>
                                    <a href="##" class="modal_link modal_link_absent js-footer-trigger" data-foot="8">50 000 CNT$</a>
                                    <a href="##" class="modal_link modal_link_absent js-footer-trigger" data-foot="9">100 000 CNT$</a>
                                    <a href="##" class="modal_link modal_link_absent js-footer-trigger" data-foot="10">200 000 CNT$</a>
                                </div>

                                <!-- First Modals buttons END-->
{{--                                <!-- Second Modals buttons START-->--}}

                                <!--  Modals Contents START  -->
{{--.............................................................................................................................................                                --}}
{{--                                <div class="modal  js_modal_window">--}}
{{--                                    <p class="title">Withdrawal NOT possible, INSUFFICIENT FUNDS</p>--}}
{{--                                    <a class="modal__TopUpBalance">Top up Balance</a>--}}
{{--                                    <a class="modal__cross js-modal-close">Cancel</a>--}}
{{--                                </div>--}}

                                <div class="modal  js_modal_window">
                                    <p class="title_two">Pay now for package<br>
                                        100 CNT$ FOR 210 days?</p>
                                    <a class="modal__confirm">Confirm</a>
                                    <a class="modal__cross_two js-modal-close">Cancel</a>
                                </div>
{{--.............................................................................................................................................                                --}}

                                <!--  Modals Contents START  -->


                                <!-- Modals first content END -->

                                <!-- Footer Start-->
                                <div class="tabs-footer footer_active js-footer-content" data-foot="1">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;6</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;6 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;42 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer js-footer-content" data-foot="2">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;10</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;50 </span> CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;350 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer js-footer-content" data-foot="3">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;13</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;130 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;910 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer js-footer-content" data-foot="4">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;16</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;400 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;2 800 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer js-footer-content" data-foot="5">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;20</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;1 000 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;7 000 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer js-footer-content" data-foot="6">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;23</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span> &nbsp;2 300 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;16 100 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer js-footer-content" data-foot="7">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;25</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;6 250 </span>$CNT
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;43 750 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer js-footer-content" data-foot="8">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;30</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;15 000 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;105 000 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="comming_soon_button" disabled>Cooming soon</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer js-footer-content" data-foot="9">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;30</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;30 000 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;210 000 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="comming_soon_button" disabled>Cooming soon</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer js-footer-content" data-foot="10">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;32</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;64 000 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;448 000 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="comming_soon_button" disabled>Cooming soon</button>
                                        </div>
                                    </div>
                                </div>


                                <!-- Footer End-->
                            </div>
                            <div class="tabs-content__item js-tab-content" data-tab="dt_2">
                                <!-- Modals second content START -->

                                <!-- First Modals buttons START-->
                                <div class="row modal_buttons_row_two">
                                    <a href="##" class="link footer_active_two modal_link js-footer-trigger_two" data-foot_two="1">100 CNT$</a>
                                    <a href="##" class="link modal_link js-footer-trigger_two" data-foot_two="2">500 CNT$</a>
                                    <a href="##" class="link modal_link js-footer-trigger_two" data-foot_two="3">1000 CNT$</a>
                                    <a href="##" class="link modal_link js-footer-trigger_two" data-foot_two="4">2500 CNT$</a>
                                    <a href="##" class="link modal_link js-footer-trigger_two" data-foot_two="5">5000 CNT$</a>
                                    <a href="##" class="link modal_link js-footer-trigger_two" data-foot_two="6">10 000 CNT$</a>
                                    <a href="##" class="link modal_link js-footer-trigger_two" data-foot_two="7" >25 000 CNT$</a>
                                    <a href="##" class="modal_link modal_link_absent js-footer-trigger_two" data-foot_two="8">50 000 CNT$</a>
                                    <a href="##" class="modal_link modal_link_absent js-footer-trigger_two" data-foot_two="9">100 000 CNT$</a>
                                    <a href="##" class="modal_link modal_link_absent js-footer-trigger_two" data-foot_two="10">200 000 CNT$</a>
                                </div>

                                <!-- First Modals buttons END-->


                                <!--  Modals Contents START  -->
{{--.............................................................................................................................................                                --}}
                                <div class="modal  js_modal_window">
                                    <p class="title">Withdrawal NOT possible, INSUFFICIENT FUNDS</p>
                                    <a class="modal__TopUpBalance">Top up Balance</a>
                                    <a class="modal__cross js-modal-close">Cancel</a>
                                </div>

{{--                                    <div class="modal  js_modal_window">--}}
{{--                                    <p class="title_two">Pay now for package<br>--}}
{{--                                        100 CNT$ FOR 210 days?</p>--}}
{{--                                    <a class="modal__confirm">Confirm</a>--}}
{{--                                    <a class="modal__cross_two js-modal-close">Cancel</a>--}}
{{--                                    </div>--}}
{{--.............................................................................................................................................                                --}}

                                <!--  Modals Contents START  -->


                                <!-- Modals Second content END -->

                                <!-- Footer Start-->
                                <div class="tabs-footer tbf2 footer_active_two js-footer-content_two" data-foot_two="1">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;8</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;8 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;112 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button__two js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer tbf2 js-footer-content_two" data-foot_two="2">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;12</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;60 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;840 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button__two js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer tbf2 js-footer-content_two" data-foot_two="3">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;15</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;150 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;2 100 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button__two js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer tbf2 js-footer-content_two" data-foot_two="4">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;18</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;450 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;6 300 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button__two js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer tbf2 js-footer-content_two" data-foot_two="5">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;22</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;1 100 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;15 400 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button__two js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer tbf2 js-footer-content_two" data-foot_two="6">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;25</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;2 500 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;35 000 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button__two js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer tbf2 js-footer-content_two" data-foot_two="7">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;27</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;6 750 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;94 500 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="payNow_button__two js-payNow_button">Pay now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer tbf2 js-footer-content_two" data-foot_two="8">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;32</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;16 000 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;224 000 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="comming_soon_button__two " disabled>Cooming soon</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer tbf2 js-footer-content_two" data-foot_two="9">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;32</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;32 000 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp;448 000 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="comming_soon_button__two" disabled>Cooming soon</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-footer tbf2 js-footer-content_two" data-foot_two="10">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="tabs-footer_text">
                                                Profit in month: <span>&nbsp;34</span>%
                                            </div>
                                            <div class="tabs-footer_text">
                                                Monthly result: <span>&nbsp;68 000 </span>CNT$
                                            </div>
                                            <div class="tabs-footer_text">
                                                Total result:  <span>&nbsp; 952 000 </span>CNT$
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <button class="comming_soon_button__two" disabled>Cooming soon</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Footer End-->
                            </div>

                            <div class="overlay js-modal-overlay"></div>
                        </div>


                    </div>

                </div>
                <!-- Tabs END -->

            </div>
        </div>
    </div>


@endsection

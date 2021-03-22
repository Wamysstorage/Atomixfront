@extends('app.dashboard.app')

@section('title','Dashboard')

@section('content')
@include('app.dashboard.menu')
    <div class="content backgroundWithoutTopRightRectangle">
        <div class="blur">
        <div class="allSettingsContainer">
            <div class='ifSettingsPasswordUpdated' id='ifSettingsPasswordUpdated'><p>Password updated</p></div>
        <div class="settingHeader">SETTINGS</div>
        <div class="settingsInformation">
            <div class="settingsPhoto">
                <img src="{{asset('assets/dashboard/img/settingsAVATAR.png')}}" alt="">
            </div>
                <div class="settingsPageName">
                    <div class="settingsPageInfo">Name Surname</div>
                    <div class="settingsPageInfoInfo">Ivan Ivanov</div>
                </div>
                <div class="settingsPageEMail">
                    <div class="settingsPageInfo">Email</div>
                    <div class="settingsPageInfoInfo">ivan213@mail.ru</div>
                </div>
                <div class="settingsPagePhoneNumber">
                    <div class="settingsPageInfo">Phone number</div>
                    <div class="settingsPageInfoInfo">+79088099008</div>
                </div>
                <div class="settingsPageLogIn">
                    <div class="settingsPageInfo">Login</div>
                    <div class="settingsPageInfoInfo">ivan213@mail.ru</div>
                </div>
                <div class="settingsPageCountry">
                    <div class="settingsPageInfo">Country</div>
                    <div class="settingsPageInfoInfo">Russia</div>
                </div>
                <div class="settingsPageVerification">
                    <input type="text" class="settingsPageVerifyInput" value='Verification'>
                    <div class='settingsPageVerifyInputDiv' id='verifyPending'><p>pending</p></div>
                    <!-- It's the succes verify icon -->
                    <!-- <div class='settingsPageVerifyInputDiv' id='verifyVerify'><img src="{{asset('assets/dashboard/img/bx_bx-check-circle.png')}}" alt=""></div> -->
                </div>                
            </div>
            <div class='changePassword'>
                <div class='settingsPasswordChangeHeading'>Change Password</div>
                <div>
                    <p class='settingsPasswordChangeInputNames'>Old password</p>
                    <input type="text" class='settingsPasswordChangeInput' id='settingsPasswordChangeInput1'>
                </div>
                <div>
                    <p class='settingsPasswordChangeInputNames'>New password</p>
                    <input type="text" class='settingsPasswordChangeInput' id='settingsPasswordChangeInput2'>
                </div>
                <div>
                    <p class='settingsPasswordChangeInputNames'>Repeat the new password</p>
                    <input type="text" class='settingsPasswordChangeInput' id='settingsPasswordChangeInput3'>
                </div>
                <button class='settingsPasswordChangeUpdateButton' id='settingsUpdateButton'>Update</button>
            </div>
            </div>
        </div>
    </div>
    </div>


@endsection

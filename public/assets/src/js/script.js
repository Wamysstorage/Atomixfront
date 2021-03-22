var waitForEl = function (selector, callback) {
    if (jQuery(selector).length) {
        callback();
    } else {
        setTimeout(function () {
            waitForEl(selector, callback);
        }, 100);
    }
};


$(document).ready(function () {
    console.log($(window).width())
    if ($('body').data('title') === 'home_page') {
        if ($(window).width() < 1024) {
            waitForEl('.slick-list', function () {
                console.log($('.slick-list').width() + 'px')
                $('.slider-nav .slick-list .slick-track').css('width', $('.slick-list').width() + 'px')
            });
        }
        $('.slider-main').slick({
            slidesToShow: 1,
            asNavFor: '.slider-nav',
            vertical: true,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            verticalSwiping: true,
            centerMode: false
        });
        l = true;
        if ($(window).width() < 1024) {
            l = false;
        }
        $('.slider-nav').slick({
            slidesToShow: 5,
            asNavFor: '.slider-main',
            vertical: l,
            focusOnSelect: true,
            autoplay: true,
            // centerMode: true
        });
        $(window).on('resize orientationchange', function () {
            // $('.slider-main').slick('refresh');
            $('.main-container .slick-slide').css('width', '45vw');
            if (window.innerWidth < 1024) {
                waitForEl('.slick-list', function () {
                    $('.slider-nav .slick-list .slick-track').css('width', $('.slick-list').width() + 'px');
                    $('.slider-nav .slick-list').css('max-height', $('.slider-nav .slick-list .slick-track img').height() + 'px');
                    $('.slider-nav .slick-track').css('display', 'flex').css('justify-content', 'space-between')

                    console.log($('.slider-nav .slick-list .slick-track img').height() + 'px')
                });
            } else if (window.innerWidth > 1024) {
                // $('.slider-nav .slick-list').css('height', $('.main-container .slick-slide img').height() + 'px !important');
                $('.slider-nav .slick-list').css('height', $('.main-container .slick-slide img').height() + 'px');
                $('.slider-nav .slick-list .slick-track').css('height', $('.main-container .slick-slide img').height() + 'px');
                $('.slider-nav .slick-list').css('max-height', 100 * $('.slider-nav .slick-list .slick-track img').height() + 'px');
                $('.slider-nav .slick-track').css('display', 'flex').css('justify-content', 'center')
                console.log($('.main-container .slick-slide img').height() + 'px')
            }
        });
        $('.hamburger').on('click', function (e) {
            e.stopPropagation()
            $('.menu ul').toggleClass('ul-flex');
        })
        $(window).on('click', function (e) {
            $('.menu ul').removeClass('ul-flex');
            if (e.target.id === 'modal1' || e.target.id === 'close-login') {
                console.log(e.target.id)
                $('.login').removeClass('show-login')
                $('body').css('overflow', 'unset')
            }
        })
        $('#signin').on('click', function (e) {
            e.preventDefault();
            $('.login').addClass('show-login');
            $('body').css('overflow', 'hidden');
            $('.alert-danger').remove()
        })
        $('#sign-in-popup').on('click', function(e){
            e.preventDefault();
            var email=$('#email').val();
            var password=$('#password').val();
            $('.alert-danger').remove()
            $('.errorMsg').html('')
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:"post",
                url:"/login",
                data:{email:email, password:password},
                success:function(r){
                    if(r.errors){
                        if ( !(document.querySelector('.alert-danger')) ) {
                            $('#heading').after('<div class="alert-danger" style="display: block;font-size: 18px;color: red;width: 30vw;"></div>');
                            $.each(r.errors, function(key, value){
                                $('.alert-danger').append('<p style="color:red">'+value+'</p>');
                            })
                        }
                    }
                    else if(r==1){
                        $('.login').removeClass('show-login');
                        $('body').css('overflow', 'unset');
                        location.reload();
                    }else if(r==2){
                        $('.errorMsg').html('Credentials are wrong')
                    }
                },error:function(){
                    alert('error');
                }
            })
        })
    } else if ($('body').data('title') === 'reg_page' || $('body').data('title') === 'serv_page') {
        $(window).on('click', function (e) {
            if (e.target.id === 'modal1' || e.target.id === 'close-login') {
                console.log(e.target.id)
                $('.login').removeClass('show-login')
                $('body').css('overflow', 'unset')
            }
        })
        $('#signin').on('click', function (e) {
            e.preventDefault();
            $('.login').addClass('show-login');
            $('body').css('overflow', 'hidden');
        })
        let countryphone = document.querySelector("#countryphone"),
            phone = document.querySelector('#country'),
            countryError = document.querySelector('#country-error')
        phoneError = document.querySelector("#phone-error");
        checkError = document.querySelector("#check-error");
        iti = window.intlTelInput(countryphone, {
            separateDialCode: true,
            preferredCountries: ["us", "ru", "cn", "fr", "vn", "de", "es"],
            utilsScript: "src/js/utils.js",
        });
        $("#country").countrySelect({
            defaultCountry: '',
            preferredCountries: [""],
            responsiveDropdown: true,
            // preferredCountries: ["us", "ru", "cn", "fr", "vn", "de", "es"],
        });
        blankFlag.call(this);

        $("#country").on('change', blankFlag);

        function blankFlag(e) {
            if ($('.flag').hasClass('xx')) {
                $('.xx').addClass('blank');
            } else return false;

        }

        $('#label-check').on('click', function () {
            document.getElementById('check').checked = !document.getElementById('check').checked;
            $('#check-error').text('')
        })

        let errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

        const reset = ($type = 'phone') => {
            if ($type == 'phone') {
                country.classList.remove("error");
                phoneError.innerHTML = "";
                phoneError.classList.add("hide");
            } else if ($type == 'country') {
                phone.classList.remove("error");
                countryError.innerHTML = "";
                countryError.classList.add("hide");
            }

        }

        const handleChangeNumber = () => {
            let number = iti.getNumber();
            $('input[name="phone"]').val(number);
            console.log(number)
        }

        const handleChangeCountry = () => {
            $('#country').on('blur', function (e) {
                e.stopPropagation();
            })
            let countryData = $("#country").countrySelect("getSelectedCountryData");
            let country;
            try {
                let c = countryData.name.split(' ');
                if (c[1].startsWith('(')) country = c[0];
                if (c[1] && !c[1].startsWith('(')) country = c[0] + ' ' + c[1];
                $('input[name="country"]').val(country)
                console.log(country)
            } catch (error) {
                console.log(error)
                $('input[name="country"]').val('')
            }
        }

        const validateCountry = () => {
            reset('country');
            let a = $('input[name="country"]').val().length;
            if (a === 0) {
                console.log('aaaa')
                phone.classList.add("error");
                countryError.innerHTML = 'Choose a country';
                countryError.classList.remove("hide");
                return false;
            } else {
                handleChangeCountry();
                phone.classList.remove("error");
                return true;
            }
        }

        const validateNumber = () => {
            reset()
            if (countryphone.value.trim()) {
                if (!iti.isValidNumber()) {
                    countryphone.classList.add("error");
                    let errorCode = iti.getValidationError();
                    phoneError.innerHTML = errorMap[errorCode];
                    phoneError.classList.remove("hide");
                    return false;
                } else {
                    handleChangeNumber();
                    countryphone.classList.remove("error");
                    return true;
                }
            }
        }
        const validateCheck = () => {
            if (!document.getElementById('check').checked) {
                checkError.innerHTML = 'You have to accept Terms Of Use and Privacy Policy';
                return false;
            } else {
                checkError.innerHTML = '';
                return true;
            }
        }
        const countryListener = () => {
            reset();
            validateNumber()
        }

        countryphone.addEventListener('keyup', countryListener);
        countryphone.addEventListener('change', countryListener);
        countryphone.addEventListener('click', countryListener);
        countryphone.addEventListener('blur', countryListener);
        phone.addEventListener('change', handleChangeCountry);
        phone.addEventListener('click', handleChangeCountry);
        phone.addEventListener('blur', handleChangeCountry);

        $('.country').on('click', function () {
            setTimeout(() => {
                handleChangeCountry();
            }, 500);
        })
        // let response = grecaptcha.getResponse();

        // const validateCaptha = () => {
        //   if (response.length === 0) {
        //     return false;
        //   }
        //   else return true;
        // }

        $('#register').on('submit', function (e) {
            validateCheck();
            validateCountry();
            if (!validateNumber() || !validateCheck() || !validateCountry()) e.preventDefault();
        })

        // $('#signin').on('click', function (e) {
        //   e.preventDefault();
        // })
    }

})

let languageList = document.querySelector('.languageList');
let languageButton = document.querySelector('.language_button');
let overlayLanguage = document.querySelector('.overlayLanguage');

languageButton.addEventListener('click', function (){

    if (getComputedStyle(languageList).display === 'none'){
        languageList.style.display = 'block';
        overlayLanguage.style.display = 'block';

    }else {
        languageList.style.display = 'none';
        overlayLanguage.style.display ='none';
    }

})

overlayLanguage.addEventListener('click', function (){
    languageList.style.display = 'none';
    overlayLanguage.style.display ='none';
});


$('.countrypicker').countrypicker();

// // menu hide show submenu
const clickableLi = document.querySelector('.clickableLi');
const clickableLiImg = document.querySelector('.clickableLi>img');
const arrowImg = document.querySelector('.arrowImg');
const hiddenUl = document.querySelector('.hiddenUl');

clickableLi.addEventListener('click', ()=>{
    if ( getComputedStyle(hiddenUl).display === 'none' ) {
        hiddenUl.style.display = 'block';
        clickableLi.classList.add('activeLi');
        clickableLiImg.src = "assets/dashboard/img/servicesActive.png";
        arrowImg.src = "assets/dashboard/img/arrowActive.png";
    }else {
        hiddenUl.style.display = 'none';
        clickableLi.classList.remove('activeLi');
        clickableLiImg.src = "assets/dashboard/img/servicesLogo.png";
        arrowImg.src = "assets/dashboard/img/whiteArrow.png";
    }
})


// burgermenu blur
const burgerMenuPicture = document.querySelector('.burgerMenuPicture');
const walletMenu = document.querySelector('.wallet');
const walletLiSpan = document.querySelectorAll('.walletLiSpan');
const walletLiImg = document.querySelectorAll('.walletLi>a>img');
const blur = document.querySelector('.blur');



burgerMenuPicture.addEventListener('click',()=>{
    if ( walletMenu.classList.contains('openedMenu') ){

        walletMenu.classList.remove('openedMenu');

        blur.classList.remove('o');

        walletLiImg.forEach( item=>{
            item.classList.remove('flR')
        });

        walletLiSpan.forEach(item=>{
            item.classList.remove('flL')
        });

        walletLiSpan.forEach(item=>{
            item.style.display = 'none';
        });

    } else {
        walletMenu.classList.add('openedMenu');

        blur.classList.add('o');


        walletLiImg.forEach( item=>{
            item.classList.add('flR')
        });

        walletLiSpan.forEach(item=>{
            item.classList.add('flL')
        });

        walletLiSpan.forEach(item=>{
            item.style.display = 'inline-block';
        });

    }

})


blur.addEventListener('mousedown', (e)=>{
    blur.classList.remove('o');

    walletMenu.classList.remove('openedMenu');
    walletLiSpan.forEach(item=>{
        if ( document.body.clientWidth <= 777 ) {
            item.style.display = 'none';
        }
    });
})


// language functional
const language = document.querySelector('.language');
// const languageList = document.querySelector('.languageList');
const footer = document.querySelector('footer');
const header = document.querySelector('header');
const allContent = document.querySelector('.allContentContainer');


// adding menu active button with classname
const walletLi = document.querySelectorAll('.walletLi');
const partnersLi = document.querySelector('.partnersLi');
const settingsLi = document.querySelector('.settingsLi');
const partnersImg = document.querySelector('.partnersImg');
const menuSettingsImage = document.querySelector('.menuSettingsImage');
const investmentsLi = document.querySelector('.investmentsLi');
const investmentsLiSpan = document.querySelector('.investmentsLi>a>span');
const investmentsLiImg = document.querySelector('.investmentsLi>a>img');
const myServicesLi =document.querySelector('.myServicesLi');
const myServicesLiSpan =document.querySelector('.myServicesLi>a>span');
const myServicesLiImg =document.querySelector('.myServicesLi>a>img');




if ( window.location.pathname.includes('settings')) {
    settingsLi.classList.add('activeLi');
    settingsLi.classList.add('activeLi>a>span');
    menuSettingsImage.src = "assets/dashboard/img/settingsActive.png";
}else if ( window.location.pathname.includes('dashboardpartner') || window.location.pathname.includes('partnersone') ) {
    partnersLi.classList.add('activeLi');
    partnersLi.classList.add('activeLi');
    partnersImg.src = "assets/dashboard/img/partnersActive.png";
}else if ( window.location.pathname.includes('investments') ) {
    investmentsLiSpan.style.color = '#FFE663';
    investmentsLiImg.src = "assets/dashboard/img/investmentsActive.png";
    clickableLi.classList.add('activeLi');
    hiddenUl.style.display = 'block';
    clickableLiImg.src = "assets/dashboard/img/servicesActive.png";
    arrowImg.src = "assets/dashboard/img/arrowActive.png";
}else if ( window.location.pathname.includes('my-services') ) {
    myServicesLi.classList.add('activeLi');
    myServicesLiImg.src = "assets/dashboard/img/myServicesActive.png";
}

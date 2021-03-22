// referral id copy event
const copyButton = document.querySelector('.copyButton');
const copyInput = document.querySelector('.copyInputContainer>input');

copyButton.addEventListener('click', ()=>{
    copyInput.select();
    document.execCommand("copy");
})

// partner lines see more button functionality
const partnerLines = document.querySelectorAll('.partnersLineContainer>a');
const partners2SeeMore = document.querySelector('.partners1-seeMore');

partnerLines.forEach((item,index)=>{

    partners2SeeMore.innerHTML = 'See more';

    if ( index > 8 ) {
        item.style.display = 'none';
    }

})

partners2SeeMore.addEventListener('click', ()=>{

    if ( partners2SeeMore.innerHTML === 'See more' ){
        partners2SeeMore.innerHTML = 'See less';
        partnerLines.forEach((item,index)=>{
            if ( index > 8 ) {
                item.style.display = '';
            }
        })
    }else if( partners2SeeMore.innerHTML === 'See less' ) {
        partners2SeeMore.innerHTML = 'See more';
        partnerLines.forEach((item,index)=>{
            if ( index > 8 ) {
                item.style.display = 'none';
            }
        })
    }

})
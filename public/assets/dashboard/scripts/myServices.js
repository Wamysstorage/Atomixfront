const myServicesInvestmentsDiv = document.querySelector('.myServicesInvestmentsDiv');
const myServicesAtomixLifeDiv = document.querySelector('.myServicesAtomixLifeDiv');
const myServicesInvestmentsText = document.querySelector('.myServicesInvestmentsText');
const myServicesAtomixLifeText = document.querySelector('.myServicesAtomixLifeText');
const myServicesInvestmentsContentContainer = document.querySelector('.myServicesInvestmentsContentContainer');
const myServicesAtomixLifeContentContainer = document.querySelector('.myServicesAtomixLifeContentContainer');

myServicesInvestmentsDiv.addEventListener('click', ()=>{
    myServicesInvestmentsDiv.classList.add('myServicesActiveBtn');
    myServicesInvestmentsText.classList.add('myServicesActiveText');
    myServicesAtomixLifeDiv.classList.remove('myServicesActiveBtn');
    myServicesAtomixLifeText.classList.remove('myServicesActiveText');
    myServicesAtomixLifeContentContainer.style.display = 'none';
    myServicesInvestmentsContentContainer.style.display = 'block';
})

myServicesAtomixLifeDiv.addEventListener('click', ()=>{
    myServicesAtomixLifeDiv.classList.add('myServicesActiveBtn');
    myServicesAtomixLifeText.classList.add('myServicesActiveText');
    myServicesInvestmentsDiv.classList.remove('myServicesActiveBtn');
    myServicesInvestmentsText.classList.remove('myServicesActiveText');
    myServicesAtomixLifeContentContainer.style.display = 'grid';//block
    myServicesInvestmentsContentContainer.style.display = 'none';
})

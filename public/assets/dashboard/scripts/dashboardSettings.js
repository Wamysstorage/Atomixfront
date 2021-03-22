let ifSettingsPasswordUpdated = document.querySelector("#ifSettingsPasswordUpdated");
let settingsUpdateButton = document.querySelector("#settingsUpdateButton");
let settingsPasswordChangeInput1 = document.querySelector("#settingsPasswordChangeInput1")
let settingsPasswordChangeInput2 = document.querySelector("#settingsPasswordChangeInput2")
let settingsPasswordChangeInput3 = document.querySelector("#settingsPasswordChangeInput3")



settingsUpdateButton.addEventListener("click",()=>{
    if(!settingsPasswordChangeInput1.value){
        settingsPasswordChangeInput1.style.borderColor = 'red';
    }else if(!settingsPasswordChangeInput2.value){
        settingsPasswordChangeInput2.style.borderColor = 'red';
    }else if(!settingsPasswordChangeInput3.value){
        settingsPasswordChangeInput3.style.borderColor = 'red';
    }else{        
        settingsPasswordChangeInput1.style.borderColor = '#303030'
        settingsPasswordChangeInput2.style.borderColor = '#303030'
        settingsPasswordChangeInput3.style.borderColor = '#303030'
        settingsPasswordChangeInput1.value = ''
        settingsPasswordChangeInput2.value = ''
        settingsPasswordChangeInput3.value = ''
        ifSettingsPasswordUpdated.style.visibility = 'visible'
        setTimeout(()=>{
          ifSettingsPasswordUpdated.style.visibility = 'hidden'
        },1500)
      }
})



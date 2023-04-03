let form = document.querySelector('.js-form'),
    formInputs = document.querySelectorAll('.js-input'),
    inputEmail = document.querySelector('.js-input-email'),
    inputCheckbox = document.querySelector('.js-input-checkbox');

function validateEmail(email){
    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase())
}

form.onsubmit = function (){
    let emailVal = inputEmail.value;
    emptyInputs = Array.from(formInputs).filter(input => input.value === '')

    formInputs.forEach(function (input){
        if(input.value === ''){
            input.classList.add('error');
            console.log('input not filed');
        }else{
            input.classList.remove('error');
        }
    });

    if(emptyInputs.length !== 0){
        console.log('input not filed')
        return false;
    }

    if(!validateEmail(emailVal)){
        console.log('email not valid');
        inputEmail.classList.add('error');
        return false;
    }else{
        inputEmail.classList.remove('error')
    }
}




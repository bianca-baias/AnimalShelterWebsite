const email = document.getElementById('fp-email');
const form = document.getElementById("fp-form");
const errorElement = document.getElementById('fp-error');

function checkInputs () {
        const email = document.getElementById('fp-email').value.trim();
        console.log(email);

        const regx = /^[A-Za-z0-9._+\-\']+@[A-Za-z0-9.\-]+\.[A-Za-z]{2,}$/;
        if(email.match(regx)) {
            console.log("Match");
            return true;
        }else{
            return false;
        }
};


form.addEventListener('submit', (e) =>{
    let messages = [];

    if(email.value === '' || email.value == null){
        errorElement.innerText = 'Completeaza emailul';
        messages.push("Completeaza emailul");
    }
    if(!checkInputs()){
        errorElement.innerText ='Email invalid';
        messages.push("email invalid");
    }

    if(messages.length > 0){
        e.preventDefault();
        errorElement.innerText = messages.join(', ');
    }
    else{
        errorElement.innerText ='';
    }
});
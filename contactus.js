//Validimi per Contact us
document.addEventListener("DOMContentLoaded", 
    function(ngjarja3){
const submit = document.getElementById('message-btn');
const validate = (ngjarja3)=>{
    ngjarja3.preventDefault();
    const name= document.getElementById('name');
    const email = document.getElementById('email');
    const phone= document.getElementById('phone');
    const subject = document.getElementById('subject');
    const message = document.getElementById('message');
    if(name.value===""){
        alert("Please enter your name.");
        name.focus();
        return false;
    }
    if(email.value===""){
        alert("Please enter your email.");
        email.focus();
        return false;
    }
    if(phone.value===""){
        alert("Please enter your phone number.");
        phone.focus();
        return false;
    }
    if(subject.value===""){
        alert("Please enter your subject.");
        subject.focus();
        return false;
    }
    if(message.value===""){
        alert("Please enter a message.");
        message.focus();
        return false;
    }
    if(!nameValid(name.value)){
        alert("Please enter a valid name.");
        name.focus();
        return false;
    }
    
    if(!emailValid(email.value)){
        alert("Please enter a valid email.");
        email.focus();
        return false;
    }
    if(!phoneValid(phone.value)){
        alert("Please enter a valid phone number.");
        phone.focus();
        return false;
    }
    
    if(!subjectValid(subject.value)){
        alert("Please enter a valid subject.");
        subject.focus();
        return false;
    }
    if(!messageValid(message.value)){
        alert("Please enter a valid message you want to leave us before sending.");
        message.focus();
        return false;
    }
    


clearForm();
alert("Message sent successfully!");
return true;
};

const clearForm = () => {
document.getElementById('name').value = "";
document.getElementById('email').value = "";
document.getElementById('phone').value = "";
document.getElementById('subject').value = "";
document.getElementById('message').value = "";
};


const nameValid= (name) =>{
    const nameRegex = /^[a-zA-Z ]{3,}$/;
    return nameRegex.test(name);
};
const emailValid= (email) =>{
    const emailRegex = /^([a-zA-Z0-9_\-.])+@([a-zA-Z0-9_\-.])+\.([a-zA-Z]){2,4}$/;
    return emailRegex.test(email);
};
const phoneValid= (phone) =>{
    const phoneRegex = /^\(?\d{3}\)?[-\s.]?\d{3}[-\s.]?\d{3}$/;
    return phoneRegex.test(phone);
};
const subjectValid= (subject) =>{
    const subjectRegex = /^[a-zA-Z0-9_\-., ]{4,}$/;
    return subjectRegex.test(subject);
};
const messageValid= (message) =>{
    const messageRegex =/^[a-zA-Z0-9_\-.,!? ]{3,}$/;
    return messageRegex.test(message);
};


submit.addEventListener('click', validate);
});


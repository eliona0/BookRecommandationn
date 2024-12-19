function openLogin(){
    const loginBox = document.getElementById('login-box');
    const signupBox = document.getElementById('signup-box');
    if(loginBox.style.display==='none'){
        loginBox.style.display='block';
        signupBox.style.display='none';
    }
    else{
        loginBox.style.display='none';
    }
}


function openSignUp(){
    const loginBox = document.getElementById('login-box');
    const signupBox = document.getElementById('signup-box');
    if( signupBox.style.display === 'none'){
        signupBox.style.display='block';
        loginBox.style.display='none';
    }
    else{
        signupBox.style.display='none';
    }
}

// script.js
document.querySelector('.hamburger-menu').addEventListener('click', function () {
    const menuLinks = document.querySelector('.links');
    
    if (menuLinks.style.display === 'none' || menuLinks.style.display === '') {
        menuLinks.style.display = 'block';
        menuLinks.style.width = '100%'; 
        menuLinks.style.height = 'fit-content'; 
        menuLinks.style.position = 'absolute'; 
        menuLinks.style.top = '-70px'; 
        menuLinks.style.left = '0'; 
        menuLinks.style.backgroundColor = 'white'; 
        menuLinks.style.boxShadow = '0px 4px 8px rgba(0, 0, 0, 0.1)'; 
        menuLinks.style.zIndex = '1000'; 
        menuLinks.style.top = '70px'; 
        menuLinks.style.justifyItems = 'center'; 
        menuLinks.style.paddingBottom = '20px'; 
    } else {
        menuLinks.style.display = 'none'; 
    }
});





//function openBestSellers1(){
    // const myCardItem = document.getElementById('BestSellers1');
    // // if(myCardItem.style.display==='none'){
    // //     myCardItem.style.display='block';
    // // }
    // // else{
    // //     myCardItem.style.display='none';
    // // }

    // myCardItem.style.display='block';


//     var divIM = document.createElement('div');
//     divIM.innerHTML = <
//     //"Une jam nje Boxi i krijuar me JavaScript ?";
//     // divIM.setAttribute('id', 'meJS');
//     // var shtimiDIVneKont =
//     // document.getElementById('kontenti').appendChild(divIM)
//     // shtimiDIVneKont.style.backgroundColor = '#889900';
//     // shtimiDIVneKont.style.border = '2px solid red';
//     // shtimiDIVneKont.style.height = '80px'
//     console.log(shtimiDIVneKont);
// // }

// }

// function addToCart(title, description) {
//     // Get the cart container
//     const cartContainer = document.getElementById('my-cart-content');
  
//     // Create a new card element
//     const card = document.createElement('div');
//     card.classList.add('card');
  
//     // Add content to the card
//     card.innerHTML = `
//       <h4>${title}</h4>
//       <p>${description}</p>
//       <button onclick="removeFromCart(this)">Remove</button>
//     `;
  
//     // Append the card to the cart container
//     cartContainer.appendChild(card);
//   }
  
//   // Function to remove a card from the cart
//   function removeFromCart(button) {
//     const card = button.parentElement; // Get the parent card element
//     card.remove(); // Remove the card
//   }
//}


window.onload = function() {
    const currentPage = window.location.pathname;

    if (currentPage.includes('Home.html')) {
      document.getElementById('cart1').addEventListener('click', function() {
        sessionStorage.setItem('bestSellers1', 'true');
        window.location.href = 'MyCart.html';
      });

      document.getElementById('cart2').addEventListener('click', function() {
        sessionStorage.setItem('bestSellers2', 'true');
        window.location.href = 'MyCart.html';
      });

      document.getElementById('cart3').addEventListener('click', function() {
        sessionStorage.setItem('bestSellers3', 'true');
        window.location.href = 'MyCart.html';
      });

      document.getElementById('cart4').addEventListener('click', function() {
        sessionStorage.setItem('bestSellers4', 'true');
        window.location.href = 'MyCart.html';
      });

      document.getElementById('cart5').addEventListener('click', function() {
        sessionStorage.setItem('bestSellers5', 'true');
        window.location.href = 'MyCart.html';
      });
    }
  
    if (currentPage.includes('MyCart.html')) {
      if (sessionStorage.getItem('bestSellers1') === 'true') {
        document.getElementById('bestSellers1').style.display = 'flex';  
        document.getElementById('remove1').addEventListener('click', function() {
            document.getElementById('bestSellers1').style.display = 'none';  
            sessionStorage.removeItem('bestSellers1');
        });
    }

        if (sessionStorage.getItem('bestSellers2') === 'true') {
            document.getElementById('bestSellers2').style.display = 'flex';
            document.getElementById('remove2').addEventListener('click', function() {
                document.getElementById('bestSellers2').style.display = 'none';
                sessionStorage.removeItem('bestSellers2');
        });
    }

        if (sessionStorage.getItem('bestSellers3') === 'true') {
                document.getElementById('bestSellers3').style.display = 'flex';
                document.getElementById('remove3').addEventListener('click', function() {
                    document.getElementById('bestSellers3').style.display = 'none';
                    sessionStorage.removeItem('bestSellers3');
        });

    }

        if (sessionStorage.getItem('bestSellers4') === 'true') {
            document.getElementById('bestSellers4').style.display = 'flex';
            document.getElementById('remove4').addEventListener('click', function() {
                document.getElementById('bestSellers4').style.display = 'none';
                sessionStorage.removeItem('bestSellers4');
        });

    }

        if (sessionStorage.getItem('bestSellers5') === 'true') {
            document.getElementById('bestSellers5').style.display = 'flex';
            document.getElementById('remove5').addEventListener('click', function() {
                document.getElementById('bestSellers5').style.display = 'none';
                sessionStorage.removeItem('bestSellers5');
        });
    }
    }
};




// Validimi per login
document.addEventListener("DOMContentLoaded", 
    function(ngjarja){
const submit = document.getElementById('login-btn');
const validate = (ngjarja)=>{
   ngjarja.preventDefault();
    const username= document.getElementById('username');
    const password = document.getElementById('password');
    if(username.value===""){
        alert("Please enter your username.");
        username.focus();
        return false;
    }
    if(password.value===""){
        alert("Please enter your password.");
        password.focus();
        return false;
    }
    if(!usernameValid(username.value)){
        alert("Please enter a valid username.");
        username.focus();
        return false;
    }
    
    if(!passValid(password.value)){
        alert("Please enter a valid password.");
        password.focus();
        return false;
    }
    return true;
};

const usernameValid= (username) =>{
    const usernameRegex = /^[a-zA-Z0-9_.-]{5,15}$/;
    return usernameRegex.test(username);
};
const passValid= (password) =>{
    const passRegex = /^([A-Za-z0-9_\-.?!@\$]{5,10})$/;
    return passRegex.test(password);
};

submit.addEventListener("click",validate);

});





// Validimi per signup
document.addEventListener("DOMContentLoaded",
    function(ngjarja2){
        const submit = document.getElementById('signin-btn');
        const validate = (ngjarja2)=>{
            ngjarja2.preventDefault();
            const name= document.getElementById('name');
            const surname = document.getElementById('surname');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const confirmpassword= document.getElementById('confirmpassword');
            const phonenumber = document.getElementById('phonenumber');
            const checkbox=document.getElementById('checkbox');
           /*if(name.value===""){
                alert("Please enter your name.");
                name.focus();
                return false;
            }
            if(surname.value===""){
                alert("Please enter your surname.");
                surname.focus();
                return false;
            }
            if(email.value===""){
                alert("Please enter your email.");
                email.focus();
                return false;
            }
            if(password.value===""){
                alert("Please enter your password.");
                password.focus();
                return false;
            }
            if(confirmpassword.value===""){
                alert("Please confirm your password.");
                confirmpassword.focus();
                return false;
            }
            if(password.value!==confirmpassword.value){
                alert("password incorrect!");
                confirmpassword.focus();
                return false;
            }
            if(phonenumber.value===""){
                alert("Please enter your phone number.");
                phonenumber.focus();
                return false;
            }*/
           
            if(!nameValid(name.value)){
                alert("Please enter a valid name.");
                name.focus();
                return false;
            }
            
            if(!surnameValid(surname.value)){
                alert("Please enter a valid surname.");
                surname.focus();
                return false;
            }
            if(!emailValid(email.value)){
                alert("Please enter a valid email.");
                email.focus();
                return false;
            }

            if(!passwordValid(password.value)){
                alert("Please enter a valid password.");
                password.focus();
                return false;
            }
             if (confirmpassword.value === "" ) {
                     alert("Please confirm your password.");
                    confirmpassword.focus();
                     return false;
            }
            if (confirmpassword.value!== password.value){
                    alert("Passwords do not match.");
                     confirmpassword.focus();
                    return false;
             }    
           
            if(!phonenumberValid(phonenumber.value)){
                alert("Please enter a valid phone number.");
                phonenumber.focus();
                return false;
            }
            if(!checkbox.checked){
                alert("Please accept the terms of service and privacy policy.");
                return false;
            }
            return true;
        };
        
        const nameValid= (name) =>{
            const nameRegex = /^[a-zA-Z ]{3,}$/;
            return nameRegex.test(name);
        };
        const surnameValid= (surname) =>{
            const surnameRegex =/^[a-zA-Z ]{3,}$/;
            return surnameRegex.test(surname);
        };
        const emailValid= (email) =>{
            const emailRegex =/^([a-zA-Z0-9_\-.])+@([a-zA-Z0-9_\-.])+\.([a-zA-Z]){2,4}$/;
            return emailRegex.test(email);
        };
        const passwordValid= (password) =>{
            const passwordRegex =/^([A-Za-z0-9_\-.?!@\$]{5,10})$/;
            return passwordRegex.test(password);
        };
        const phonenumberValid= (phonenumber) =>{
            const phonenumberRegex =/^\(?\d{3}\)?[-\s.]?\d{3}[-\s.]?\d{4}$/;
            return phonenumberRegex.test(phonenumber);
        };
        
        submit.addEventListener('click', validate);
    }
);


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
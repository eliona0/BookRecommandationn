//Validimi per Sign up

document.addEventListener("DOMContentLoaded", () => {
        const form = document.getElementById('form');
        const validate = (ngjarja2)=>{
            ngjarja2.preventDefault();
            const name= document.getElementById('name');
            const surname = document.getElementById('surname');
            const username= document.getElementById('username');
            const email = document.getElementById('email');
            const phone = document.getElementById('phone');
            const password = document.getElementById('password');
            const checkbox=document.getElementById('checkbox');
           
           
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

            if(!usernameValid(username.value)){
                alert("Please enter a valid username.");
                username.focus();
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

            if(!passwordValid(password.value)){
                alert("Please enter a valid password.");
                password.focus();
                return false;
            } 
           
           
            if(!checkbox.checked){
                alert("Please accept the terms of service and privacy policy.");
                return false;
            }
           
           form.submit();
        };
        
        const nameValid= (name) =>{
            const nameRegex = /^[a-zA-Z ]{3,}$/;
            return nameRegex.test(name);
        };
        const surnameValid= (surname) =>{
            const surnameRegex =/^[a-zA-Z ]{3,}$/;
            return surnameRegex.test(surname);
        };

        const usernameValid= (username) =>{
            const usernameRegex = /^[a-zA-Z0-9_.-]{5,15}$/;
            return usernameRegex.test(username);
        };

        const emailValid= (email) =>{
            const emailRegex =/^([a-zA-Z0-9_\-.])+@([a-zA-Z0-9_\-.])+\.([a-zA-Z]){2,4}$/;
            return emailRegex.test(email);
        };
        const passwordValid= (password) =>{
            const passwordRegex =/^([A-Za-z0-9_\-.?!@\$]{5,20})$/;
            return passwordRegex.test(password);
        };
        const phoneValid = (phone) => {
            const phoneRegex = /^\d{9}$/;
            return phoneRegex.test(phone);
        };
        
        form.addEventListener('submit', validate);
    }
);

// document.addEventListener("DOMContentLoaded", () => {
//     const form = document.getElementById('form');

//     const validate = (event) => {
//         event.preventDefault(); // Prevent form submission

//         const username = document.getElementById('username');
//         const password = document.getElementById('password');

//         // Validate the username
//         if (!usernameValid(username.value)) {
//             alert("Please enter a valid username (5-15 characters: letters, numbers, dots, underscores, or hyphens).");
//             username.focus();
//             return;
//         }

//         // Validate the password
//         if (!passwordValid(password.value)) {
//             alert("Please enter a valid password (5-10 characters: letters, numbers, or special characters like _-.?!@$).");
//             password.focus();
//             return;
//         }

//         form.submit(); // Submit the form if all validations pass
//     };

//     // Regex for username validation (5-15 characters: letters, numbers, dots, underscores, hyphens)
//     const usernameValid = (username) => {
//         return /^[a-zA-Z0-9_.-]{5,15}$/.test(username);
//     };

//     // Regex for password validation (5-10 characters: letters, numbers, special characters)
//     const passwordValid = (password) => {
//         return /^[A-Za-z0-9_\-.?!@$]{5,10}$/.test(password);
//     };

//     // Add event listener for form submission
//     form.addEventListener('submit', validate);
// });


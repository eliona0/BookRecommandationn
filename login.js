// // Validimi per login
// document.addEventListener("DOMContentLoaded", 
//     function(ngjarja){
// const form = document.getElementById('form');
// const validate = (ngjarja)=>{
//    ngjarja.preventDefault();
//     const username= document.getElementById('username');
//     const password = document.getElementById('password');
//     if(username.value===""){
//         alert("Please enter your username.");
//         username.focus();
//         return false;
//     }
//     if(password.value===""){
//         alert("Please enter your password.");
//         password.focus();
//         return false;
//     }
//     if(!usernameValid(username.value)){
//         alert("Please enter a valid username.");
//         username.focus();
//         return false;
//     }
    
//     if(!passValid(password.value)){
//         alert("Please enter a valid password.");
//         password.focus();
//         return false;
//     }
//     form.submit();
// };

// const usernameValid= (username) =>{
//     const usernameRegex = /^[a-zA-Z0-9_.-]{5,15}$/;
//     return usernameRegex.test(username);
// };
// const passValid= (password) =>{
//     const passRegex = /^([A-Za-z0-9_\-.?!@\$]{5,10})$/;
//     return passRegex.test(password);
// };

// form.addEventListener("submit",validate);

// });


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
//     const usernameValid = (username) => /^[a-zA-Z0-9_.-]{5,15}$/.test(username);
    
//     // Regex for password validation (5-10 characters: letters, numbers, special characters)
//     // const passwordValid = (password) => /^[A-Za-z0-9_\-.?!@$]{5,20}$/.test(password);
//     const passwordValid= (password) =>{
//         const passwordRegex =/^([A-Za-z0-9_\-.?!@\$]{5,20})$/;
//         return passwordRegex.test(password);
//     };

//     // Add event listener for form submission
//     form.addEventListener('submit', validate);
// });

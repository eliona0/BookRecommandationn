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

function openBestSellers1(){
    const myCardItem = document.getElementById('BestSellers1');
    if(myCardItem.style.display==='none'){
        myCardItem.style.display='block';
    }
    else{
        myCardItem.style.display='none';
    }
}

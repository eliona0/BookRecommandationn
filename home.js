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

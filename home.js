// function openLogin(){
//     const loginBox = document.getElementById('login-box');
//     const signupBox = document.getElementById('signup-box');
//     if(loginBox.style.display==='none'){
//         loginBox.style.display='block';
//         signupBox.style.display='none';
//     }
//     else{
//         loginBox.style.display='none';
//     }
// }


// function openSignUp(){
//     const loginBox = document.getElementById('login-box');
//     const signupBox = document.getElementById('signup-box');
//     if( signupBox.style.display === 'none'){
//         signupBox.style.display='block';
//         loginBox.style.display='none';
//     }
//     else{
//         signupBox.style.display='none';
//     }
// }



// document.querySelector('.hamburger-menu').addEventListener('click', function () {
//     const menuLinks = document.querySelector('.links');
    
//     if (menuLinks.style.display === 'none' || menuLinks.style.display === '') {
//         menuLinks.style.display = 'block';
//         menuLinks.style.width = '100%'; 
//         menuLinks.style.height = 'fit-content'; 
//         menuLinks.style.position = 'absolute'; 
//         menuLinks.style.top = '-70px'; 
//         menuLinks.style.left = '0'; 
//         menuLinks.style.backgroundColor = 'white'; 
//         menuLinks.style.boxShadow = '0px 4px 8px rgba(0, 0, 0, 0.1)'; 
//         menuLinks.style.zIndex = '1000'; 
//         menuLinks.style.top = '70px'; 
//         menuLinks.style.justifyItems = 'center'; 
//         menuLinks.style.paddingBottom = '20px'; 
//     } else {
//         menuLinks.style.display = 'none'; 
//     }
// });

document.querySelector('.hamburger-menu').addEventListener('click', function () {
    const menuLinks = document.querySelector('.links');
    
    if (menuLinks.style.display === 'none' || menuLinks.style.display === '') {
        menuLinks.style.display = 'block';
        menuLinks.style.width = '100%';
        menuLinks.style.height = 'fit-content';
        menuLinks.style.position = 'absolute';
        menuLinks.style.top = '70px'; 
        menuLinks.style.left = '0';
        menuLinks.style.backgroundColor = 'white';
        menuLinks.style.boxShadow = '0px 4px 8px rgba(0, 0, 0, 0.1)';
        menuLinks.style.zIndex = '1000';
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


// 





const carousel = document.querySelector(".carousel");
const slides = document.querySelectorAll(".section-content");
const totalSlides = slides.length-1;
const dotsContainer = document.querySelector(".carousel-dots");

let currentSlide = 0;
let autoSlideInterval; // Variable for auto-sliding interval

// Function to create navigation dots
function createDots() {
    for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement("button");
        dot.addEventListener("click", () => {
            goToSlide(i); // Go to specific slide
            resetAutoSlide(); // Reset auto-sliding
        });
        dotsContainer.appendChild(dot);
    }
    updateDots();
}

// Function to update dot states
function updateDots() {
    const dots = dotsContainer.querySelectorAll("button");
    dots.forEach((dot, index) => {
        if (index === currentSlide) {
            dot.classList.add("active");
        } else {
            dot.classList.remove("active");
        }
    });
}

// Function to show a specific slide
function showSlide(index) {
    const offset = -index * 100;
    carousel.style.transform = `translateX(${offset}%)`;
    currentSlide = index;
    updateDots();
}

// Function to navigate to a specific slide
function goToSlide(index) {
    showSlide(index);
}

// Function to move to the next slide
function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides; // Loop back to the first slide
    showSlide(currentSlide);
}

// Function to start auto-sliding
function startAutoSlide() {
    autoSlideInterval = setInterval(nextSlide, 5000); // Change slide every 3 seconds
}

// Function to reset auto-sliding
function resetAutoSlide() {
    clearInterval(autoSlideInterval); // Stop the interval
    startAutoSlide(); // Restart the interval
}

// Initialize
createDots();
showSlide(currentSlide);
startAutoSlide(); // Start automatic sliding


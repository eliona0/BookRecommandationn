

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
let autoSlideInterval; 


function createDots() {
    for (let i = 0; i < totalSlides; i++) {
        const dot = document.createElement("button");
        dot.addEventListener("click", () => {
            goToSlide(i);
            resetAutoSlide();
        });
        dotsContainer.appendChild(dot);
    }
    updateDots();
}


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


function showSlide(index) {
    const offset = -index * 100;
    carousel.style.transform = `translateX(${offset}%)`;
    currentSlide = index;
    updateDots();
}


function goToSlide(index) {
    showSlide(index);
}


function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides; 
    showSlide(currentSlide);
}


function startAutoSlide() {
    autoSlideInterval = setInterval(nextSlide, 5000);
}


function resetAutoSlide() {
    clearInterval(autoSlideInterval); 
    startAutoSlide();
}


createDots();
showSlide(currentSlide);
startAutoSlide(); 


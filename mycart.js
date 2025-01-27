// window.onload = function() {
//         const currentPage = window.location.pathname;
    
//         if (currentPage.includes('Home.html')) {
//           document.getElementById('cart1').addEventListener('click', function() {
//             sessionStorage.setItem('bestSellers1', 'true');
//             window.location.href = 'MyCart.html';
//           });
    
//           document.getElementById('cart2').addEventListener('click', function() {
//             sessionStorage.setItem('bestSellers2', 'true');
//             window.location.href = 'MyCart.html';
//           });
    
//           document.getElementById('cart3').addEventListener('click', function() {
//             sessionStorage.setItem('bestSellers3', 'true');
//             window.location.href = 'MyCart.html';
//           });
    
//           document.getElementById('cart4').addEventListener('click', function() {
//             sessionStorage.setItem('bestSellers4', 'true');
//             window.location.href = 'MyCart.html';
//           });
    
//           document.getElementById('cart5').addEventListener('click', function() {
//             sessionStorage.setItem('bestSellers5', 'true');
//             window.location.href = 'MyCart.html';
//           });
//         }
      
//         if (currentPage.includes('MyCart.html')) {
//           if (sessionStorage.getItem('bestSellers1') === 'true') {
//             document.getElementById('bestSellers1').style.display = 'flex';  
//             document.getElementById('remove1').addEventListener('click', function() {
//                 document.getElementById('bestSellers1').style.display = 'none';  
//                 sessionStorage.removeItem('bestSellers1');
//             });
//         }
    
//             if (sessionStorage.getItem('bestSellers2') === 'true') {
//                 document.getElementById('bestSellers2').style.display = 'flex';
//                 document.getElementById('remove2').addEventListener('click', function() {
//                     document.getElementById('bestSellers2').style.display = 'none';
//                     sessionStorage.removeItem('bestSellers2');
//             });
//         }
    
//             if (sessionStorage.getItem('bestSellers3') === 'true') {
//                     document.getElementById('bestSellers3').style.display = 'flex';
//                     document.getElementById('remove3').addEventListener('click', function() {
//                         document.getElementById('bestSellers3').style.display = 'none';
//                         sessionStorage.removeItem('bestSellers3');
//             });
    
//         }
    
//             if (sessionStorage.getItem('bestSellers4') === 'true') {
//                 document.getElementById('bestSellers4').style.display = 'flex';
//                 document.getElementById('remove4').addEventListener('click', function() {
//                     document.getElementById('bestSellers4').style.display = 'none';
//                     sessionStorage.removeItem('bestSellers4');
//             });
    
//         }
    
//             if (sessionStorage.getItem('bestSellers5') === 'true') {
//                 document.getElementById('bestSellers5').style.display = 'flex';
//                 document.getElementById('remove5').addEventListener('click', function() {
//                     document.getElementById('bestSellers5').style.display = 'none';
//                     sessionStorage.removeItem('bestSellers5');
//             });
//         }
//         }
//     };
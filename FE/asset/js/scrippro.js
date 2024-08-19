// // Get the modal
// var modal = document.getElementById("productModal");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // Get all product items
// var products = document.querySelectorAll('.product-items');

// console.log('Products found:', products.length); // Debugging

// // Loop through each product and add click event
// products.forEach(function(product) {
//     product.addEventListener('click', function(event) {
//         event.preventDefault();

//         console.log('Product clicked:', product); // Debugging

//         // Get product details
//         var imgSrc = product.querySelector('img').src;
//         var name = product.querySelector('p').innerText;
//         var description = product.querySelector('span').innerText;
//         var price = product.querySelector('.price p').innerText;
//         var oldPrice = product.querySelector('.price span').innerText;

//         // Set modal content
//         document.getElementById('modalImage').src = imgSrc;
//         document.getElementById('modalName').innerText = name;
//         document.getElementById('modalDescription').innerText = description;
//         document.getElementById('modalPrice').innerText = price;
//         document.getElementById('modalOldPrice').innerText = oldPrice;

//         // Display the modal
//         modal.style.display = "block";
//     });
// });

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }

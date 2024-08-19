window.onscroll = function () {
  down();
};

const sliderItems = document.querySelectorAll(".slide-items .slide");
for (let index = 0; index < sliderItems.length; index++) {
  sliderItems[index].style.left = index * 100 + "%";
}

const slide = document.querySelector(".slide-items");
const leftarrow = document.querySelector(".ri-arrow-left-circle-line");
const rightarrow = document.querySelector(".ri-arrow-right-circle-line");
let i = 0;

leftarrow.addEventListener("click", () => {
  if (i > 0) {
    i--;
    slidemove();
  }
});

rightarrow.addEventListener("click", () => {
  if (i < sliderItems.length - 1) {
    i++;
    slidemove();
  }
});

function autoslide() {
  if (i < sliderItems.length - 1) {
    i++;
  } else {
    i = 0;
  }
  slidemove();
}

function slidemove() {
  slide.style.left = -i * 100 + "%";
}

setInterval(autoslide, 2000);

// Menubar
const menubar = document.querySelector(".menu-mobile");
const headerNav = document.querySelector(".header-nav");
menubar.addEventListener("click", () => {
  headerNav.classList.toggle("active");
});

const searchIcon = document.querySelector(".ri-search-line");
const headerSearch = document.querySelector(".header-search-input");

searchIcon.addEventListener("click", () => {
  headerSearch.classList.toggle("active");
});

// Sticky header
var header = document.querySelector("header");
var sticky = header.offsetTop;

function down() {
  if (window.scrollY > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

// Get the modal
// var modal = document.getElementById("productModal");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // Get all product items
// var collection = document.querySelectorAll('.collection-items');

// console.log('collection found:', collection.length); // Debugging

// // Loop through each product and add click event
// collection.forEach(function(product) {
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

// var bestseller = document.querySelectorAll('.best-seller-items');

// console.log('best seller found:', bestseller.length); // Debugging

// // Loop through each product and add click event
// bestseller.forEach(function(product) {
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

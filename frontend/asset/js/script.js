const sliderItems = document.querySelectorAll('.slide-items .slide');
for (let index = 0; index < sliderItems.length; index++) {
    sliderItems[index].style.left = index * 100 + "%";
};
const slide = document.querySelector('.slide-items');
const leftarrow = document.querySelector('.ri-arrow-left-circle-line');
const rightarrow = document.querySelector('.ri-arrow-right-circle-line');
let i = 0;
leftarrow.addEventListener('click', () => {
    if (i <= 0) {
        return false;
    } else {
        i--;
        slidemove();
    }
});
rightarrow.addEventListener('click', () => {
    i++;
    if (i < sliderItems.length) {
        slidemove();
    } else {
        return false;
    }
});
function autoslide(){
    if(i<sliderItems.length-1){
        i++;
        slidemove();
        console.log(i);
    }
    else{
        i=0;
        slidemove();
    }
};
function slidemove(){
    slide.style.left = -i * 100 + "%";
};
setInterval(autoslide,2000);
//menubar    
const menubar=document.querySelector('.menu-mobile');
const hearderNav=document.querySelector('.header-nav');
menubar.addEventListener('click',()=>{
    hearderNav.classList.toggle('active');
});
const searchIcon = document.querySelector('.ri-search-line');
const headerSearch = document.querySelector('.header-search-input');

searchIcon.addEventListener('click', () => {
    headerSearch.classList.toggle('active');
});
// START PLUGINS LINKS


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


// simple gallery
var lightbox = new SimpleLightbox('.gallery a', { /* options */ });

// Lenis

const lenis = new Lenis({
  // Valeur entre 0 et 1
  // Valeur par défaut : 0,1
  // Plus la valeur est faible, plus le scroll sera fluide
  lerp: 0.08, 
  // Valeur par défaut : 1
  // Plus la valeur est haute, plus le défilement sera rapide 
  wheelMultiplier: 1, 
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);


// Wow Plugins start
new WOW().init();



//Fashion Swiper

const sliderEl = document.querySelector('.fashion-slider');

createFashionSlider(sliderEl);


// END PLUGINS LINKS

// NAV APPEAR

let nav = document.querySelector('nav'); 
let currentScrollPosition =0;
window.addEventListener("scroll", function(){  
       currentScrollPosition = window.scrollY;         
       if (currentScrollPosition  > 0)
       {nav.classList.add('translateUp');} else {nav.classList.remove("translateUp");}   
} );

let logo = document.querySelector('.n-logo');
window.addEventListener("scroll", function(){  
  currentScrollPosition = window.scrollY;         
  if (currentScrollPosition  > 0)
  {logo.classList.add('orange');} else {logo.classList.remove("orange");}   
} );

let bline = document.querySelectorAll('nav .burger .bline');
window.addEventListener("scroll", function(){  
  currentScrollPosition = window.scrollY;   
  bline.forEach(element => {      
  if (currentScrollPosition  > 0)
  {element.classList.add('bappear');} else {element.classList.remove("bappear");}
});   
});
let mainMenu = document.querySelector('.b-nav .main-menu');
let burger = document.querySelectorAll('.burger');
 let bburger = document.querySelector('.b-nav .burger');
burger.forEach(element => {
  element.addEventListener('click', ()=>{
    mainMenu.classList.toggle('bactive');
    bburger.classList.toggle('bbappear');
    
  })
});
// Back to top

let backToTop = document.querySelector('.back-to-top')

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    backToTop.style.display = "block";
  } else {
    backToTop.style.display = "none";
  }
}
backToTop.addEventListener('click', ()=>{
  window.scrollTo({top: 0, behavior: "smooth"});
})





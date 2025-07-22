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





let container2 = document.querySelector('.gallery-btns2');

container2.addEventListener('click', (event)=> {
  
// On check si on est bien sur un bouton
if (event.target.classList.contains('gal')) {
    // On vérifie si le bouton a déjà une classe active
    if (event.target.classList.contains('active')) {
        event.target.classList.remove('active') 
        // On vérifie si l'élément cliqué n'a pas déjà une classe active 
    } else {
        // Si mon container a un autre enfant que celui sur lequel je suis en train de cliquer qui possède déjà la classe active
        if (container2.querySelector('.active')) {
            container2.querySelector('.active').classList.remove('active') 
        }
        // Si mon wrapper n'a aucun enfant qui a la classe active alors ... 
        event.target.classList.add('active')
        var selector = event.target.getAttribute('data-filter')
            // console.log(selector)
            let imgs = document.querySelectorAll('.gallery .gal-cont-img')
            imgs.forEach(img => {
              if (selector === '*') {
                img.classList.remove('hide')
                setTimeout(() => {
                  img.classList.remove('destroy')
                }, "100");
                document.querySelector('.gallery').classList.remove('gallerySwitchSmall')
                document.querySelector('.gallery').classList.remove('gallerySwitch')
              } else if (img.getAttribute('data-filter') !== selector) {
                img.classList.add('hide')
                setTimeout(() => {
                  img.classList.add('destroy')
                }, "100");
                if (event.target.getAttribute('data-filter') === '2020'){
                  document.querySelector('.gallery').classList.remove('gallerySwitch')
                  document.querySelector('.gallery').classList.add('gallerySwitchSmall')
                } else { 
                  document.querySelector('.gallery').classList.remove('gallerySwitchSmall')
                  document.querySelector('.gallery').classList.add('gallerySwitch')
                }
              } else {
                
                  img.classList.remove('hide')
                  setTimeout(() => {
                    img.classList.remove('destroy')
                  }, "100");
                  
              }
            })
            // if (selector != document.querySelector('.gallery img').getAttribute('data-filter')) {document.querySelector('.gallery img').classList.add('hide') }
     } 
}
});



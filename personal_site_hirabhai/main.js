/* This is For My Navbar */


const open = document.getElementById('open');
const close = document.getElementById('close');
const navbar = document.getElementById('nav');
const below = document.getElementById("main");

open.addEventListener('click', ()=> {
    navbar.style.marginLeft="0%";
    open.style.display="none";
    close.style.display="block";
    below.style.marginTop="50rem";
})

close.addEventListener('click', ()=> {
    navbar.style.marginLeft="-120%";
    open.style.display="block";
    close.style.display="none";
    below.style.marginTop="0rem";
})


/* This is An End */




/* This is For My Images Slider */

const swiper = new Swiper('.swiper', {
    
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },


    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    
  });

  /* This is An End */


   /* This is My View More Button */
   const btn3 = document.getElementById("btn3");
   const para3 = document.getElementById("vall3");

   btn3.addEventListener("click", ()=>{
     para3.style.display="flex";
   })

  // This is An End 
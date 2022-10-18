let menu = document.querySelector('#menu');
let header = document.querySelector('.header');


window.onscroll = () => {
   if (window.innerWidth < 991) {
      
      header.classList.remove('active');
      document.body.classList.remove('active');
     
   }

   document.querySelectorAll('section').forEach(sec => {

      let top = window.scrollY;
      let offset = sec.offsetTop - 150;
      let height = sec.offsetHeight;
      let id = sec.getAttribute('id');

      if (top >= offset && top < offset + height) {
         document.querySelectorAll('.header .navbar a').forEach(links => {
            links.classList.remove('active');
            document.querySelector('.header .navbar a[href*=' + id + ']').classList.add('active')
         });
      };

   });

}


  
const texts = ['web developer', 'publicist', 'UX/UI designer'];
let count = 0;
let index = 0;
let currentText = '';
let letter = '';
(function type() {
      if(count === texts.length){
         count = 0;
      }
      currentText = texts[count];
      letter = currentText.slice(0,++index);

      document.querySelector(".typing").textContent = letter;
      if (letter.length === currentText.length) {
         count++;
         index = 0;
      }
      setTimeout(type, 250);
   })();
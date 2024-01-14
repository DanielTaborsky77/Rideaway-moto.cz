window.addEventListener('scroll', function() {
    var nav = document.getElementById('nav');
    var link1 = document.getElementById('link1');
    var link2 = document.getElementById('link2');
    var link3 = document.getElementById('link3');
    var link4 = document.getElementById('link4');
    
      if (window.scrollY >= 552) {
      nav.classList.add('navchange');
      } 
      else {

          nav.classList.remove('navchange');
      }
      if (window.scrollY >= 542) {

          link1.classList.add('linkchange');
          link2.classList.add('linkchange');
          link3.classList.add('linkchange');
          link4.classList.add('linkchange');

          
      } 
      else {
          link1.classList.remove('linkchange');
          link2.classList.remove('linkchange');
          link3.classList.remove('linkchange');
          link4.classList.remove('linkchange');
      }
    
    
    
  });
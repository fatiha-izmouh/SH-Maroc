document.addEventListener('DOMContentLoaded', function () {

  /* Navbar */

  /* Acceuil - slider */


  ScrollReveal().reveal('.slider-navigation .nav-btn', {
    origin: 'right',
    distance: '20px',
    duration: 800,
    delay: 600,
    easing: 'ease-in-out',
    interval: 100,
    reset: false
  });

  /* Acceuil => No realisation */
  ScrollReveal().reveal('.general-title', {
    origin: 'top',
    distance: '50px',
    duration: 1000,
    delay: 200,
    easing: 'ease-in-out',
    reset: false
  });

  ScrollReveal().reveal('.project-infos', {
    origin: 'left',
    distance: '50px',
    duration: 1000,
    delay: 300,
    easing: 'ease-in-out',
    reset: false
  });

  ScrollReveal().reveal('.project-divs .projectsd', {
    origin: 'bottom',
    distance: '50px',
    duration: 1000,
    delay: 400,
    interval: 200,
    easing: 'ease-in-out',
    reset: false
  });

  ScrollReveal().reveal('.nav-tabs .nav-item', {
    origin: 'right',
    distance: '30px',
    duration: 800,
    delay: 500,
    interval: 100,
    easing: 'ease-in-out',
    reset: false
  });

  ScrollReveal().reveal('.tab-content .tab-pane', {
    origin: 'bottom',
    distance: '30px',
    duration: 800,
    delay: 600,
    interval: 100,
    easing: 'ease-in-out',
    reset: false
  });

  /* Acceuil => No projet */
  ScrollReveal().reveal('.general-title', {
    origin: 'top',
    distance: '50px',
    duration: 1000,
    delay: 200,
    easing: 'ease-in-out',
    reset: false
  });

  ScrollReveal().reveal('.project-card', {
    origin: 'bottom',
    distance: '30px',
    duration: 1000,
    delay: 300,
    interval: 200,
    easing: 'ease-in-out',
    reset: false
  });

  /* Acceuil => Nos Actualites */
  ScrollReveal().reveal('.general-title', {
    origin: 'top',
    distance: '50px',
    duration: 1000,
    delay: 200,
    easing: 'ease-in-out',
    reset: false
  });

  ScrollReveal().reveal('.cards-container', {
    origin: 'bottom',
    distance: '50px',
    duration: 1000,
    delay: 300,
    easing: 'ease-in-out',
    reset: false
  });

  ScrollReveal().reveal('.card', {
    origin: 'left',
    distance: '50px',
    duration: 1000,
    delay: 400,
    interval: 200,
    easing: 'ease-in-out',
    reset: false
  });

  /* Acceuil => Nos Partenaires */
  ScrollReveal().reveal('.general-title', {
    origin: 'top',
    distance: '50px',
    duration: 1000,
    delay: 200,
    easing: 'ease-in-out',
    reset: false
  });

  ScrollReveal().reveal('.image-item', {
    origin: 'bottom',
    distance: '30px',
    duration: 1000,
    delay: 300,
    interval: 200,
    easing: 'ease-in-out',
    reset: false
  });

  /* Footer */
  ScrollReveal().reveal('.footer-infos', {
    duration: 1000,
    origin: 'left',
    distance: '50px',
    easing: 'ease-out',
    opacity: 0,
    reset: false
  });

  ScrollReveal().reveal('.footer-links', {
    duration: 1000,
    origin: 'top',
    distance: '50px',
    easing: 'ease-out',
    opacity: 0,
    delay: 300,
    reset: false
  });

  ScrollReveal().reveal('.footer-contact', {
    duration: 1000,
    origin: 'right',
    distance: '50px',
    easing: 'ease-out',
    opacity: 0,
    delay: 600,
    reset: false
  });


  /* -------------------------------------- /details -------------------------------------- */


  // Initialize ScrollReveal
  const sr = ScrollReveal({
    reset: false,
    duration: 1600,
});

// ScrollReveal animations
sr.reveal('.title', {
    origin: 'top',
    distance: '50px',
});

sr.reveal('.date', {
    origin: 'bottom',
    distance: '30px',
    delay: 200,
});

sr.reveal('.main-image', {
    origin: 'bottom',
    distance: '50px',
    delay: 400,
});

sr.reveal('.description', {
    origin: 'left',
    distance: '50px',
    delay: 600,
});

sr.reveal('.images .image', {
    origin: 'right',
    distance: '50px',
    interval: 200,
    delay: 800,
});


/* ----------------------------- /jea ---------------------------- */

ScrollReveal({
  reset: false,
  duration: 1600,
}).reveal('.header h1', {
  origin: 'top',
  distance: '50px',
});

ScrollReveal().reveal('.features', {
  origin: 'bottom',
  distance: '50px',
  interval: 200,
});

ScrollReveal().reveal('.title h2', {
  origin: 'left',
  distance: '50px',
});

ScrollReveal().reveal('.benefits .benefit', {
  origin: 'right',
  distance: '50px',
  interval: 200,
});

ScrollReveal().reveal('.section p', {
  origin: 'top',
  distance: '50px',
  delay: 200,
});

ScrollReveal().reveal('.section button', {
  origin: 'bottom',
  distance: '50px',
  delay: 400,
});

/* --------------------------- /details ------------------------ */

ScrollReveal({
  reset: false,
  duration: 1600,
}).reveal('.section-intro h1', {
  origin: 'top',
  distance: '100px',
});

ScrollReveal().reveal('.section-intro .content', {
  origin: 'bottom',
  distance: '50px',
  delay: 200,
});

ScrollReveal().reveal('.section-intro .logo', {
  origin: 'left',
  distance: '50px',
  delay: 400,
});

ScrollReveal().reveal('.results h2', {
  origin: 'top',
  distance: '50px',
});

ScrollReveal().reveal('.results-grid .result', {
  origin: 'bottom',
  distance: '50px',
  interval: 200,
});

ScrollReveal().reveal('.objectives h2', {
  origin: 'top',
  distance: '50px',
});

ScrollReveal().reveal('.objectives-grid .objective', {
  origin: 'bottom',
  distance: '50px',
  interval: 200,
});

ScrollReveal().reveal('.section p', {
  origin: 'top',
  distance: '50px',
  delay: 200,
});

ScrollReveal().reveal('.section button', {
  origin: 'bottom',
  distance: '50px',
  delay: 400,
});



/* ---------------------------------- Contact --------------------- */
ScrollReveal({
  reset: false,
  duration: 1600,
}).reveal('.container h1', {
  origin: 'top',
  distance: '50px',
});

ScrollReveal().reveal('.container p', {
  origin: 'bottom',
  distance: '50px',
  delay: 200,
});

ScrollReveal().reveal('.contact-section .contact-info', {
  origin: 'left',
  distance: '50px',
});

ScrollReveal().reveal('.contact-section .contact-form', {
  origin: 'right',
  distance: '50px',
  delay: 200,
});

ScrollReveal().reveal('.contact-section .form-group', {
  origin: 'bottom',
  distance: '50px',
  interval: 200,
});

ScrollReveal().reveal('.contact-section button[type="submit"]', {
  origin: 'bottom',
  distance: '50px',
  delay: 400,
});


ScrollReveal().reveal('.section-intro h1', {
  origin: 'top',
  distance: '50px',
  duration: 1600,
  reset: false
});

ScrollReveal().reveal('.section-intro .text', {
  origin: 'bottom',
  distance: '50px',
  duration: 1600,
  reset: false,
  delay: 200
});

ScrollReveal().reveal('.section-intro .logo', {
  origin: 'bottom',
  distance: '50px',
  duration: 1600,
  reset: false,
  delay: 400
});

ScrollReveal().reveal('.objectives h2', {
  origin: 'top',
  distance: '50px',
  duration: 1600,
  reset: false
});

ScrollReveal().reveal('.objective', {
  origin: 'left',
  distance: '50px',
  duration: 1600,
  reset: false,
  interval: 200
});

ScrollReveal().reveal('.results h2', {
  origin: 'top',
  distance: '50px',
  duration: 1600,
  reset: false
});

ScrollReveal().reveal('.result', {
  origin: 'right',
  distance: '50px',
  duration: 1600,
  reset: false,
  interval: 200
});


});

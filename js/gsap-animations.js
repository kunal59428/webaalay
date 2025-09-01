document.addEventListener('DOMContentLoaded', function () {
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    const header = document.getElementById("site-header");
    if (header) {
      ScrollTrigger.create({
        start: "top -10",
        end: 99999,
        onEnter: () => {
          header.classList.add("fixed");
          gsap.fromTo(header, { y: -80 }, { y: 0, duration: 0.4, ease: "power2.out" });
        },
        onLeaveBack: () => {
          header.classList.remove("fixed");
        }
      });
    }

    // Banner
    gsap.from('.banner-content', { duration: 1, y: 50, opacity: 0, ease: 'power3.out' });
    gsap.from('.banner-image', { duration: 1, x: 50, opacity: 0, delay: 0.5, ease: 'power3.out' });

    // Services
    gsap.from('.service-card', {
      scrollTrigger: { trigger: '.services-section', start: 'top 80%' },
      duration: 1, x: 30, opacity: 1, stagger: 0.2, ease: 'power2.out'
    });

    // About
    gsap.from('.about-content', {
      scrollTrigger: { trigger: '.about-section', start: 'top 80%' },
      duration: 1, x: -50, opacity: 0, ease: 'power3.out'
    });
    gsap.from('.about-image', {
      scrollTrigger: { trigger: '.about-section', start: 'top 80%' },
      duration: 1, x: 50, opacity: 0, delay: 0.5, ease: 'power3.out'
    });

    // Technology
    gsap.from('.tech-card', {
      scrollTrigger: { trigger: '.technology-section', start: 'top 80%' },
      duration: 1, y: 30, opacity: 1, stagger: 0.1, ease: 'power2.out'
    });

    // Portfolio
    gsap.from('.portfolio-item', {
      scrollTrigger: { trigger: '.portfolio-section', start: 'top 80%' },
      duration: 0.8, y: 30, opacity: 1, stagger: 0.2, ease: 'power2.out'
    });

    // Testimonials
    gsap.from('.testimonial', {
      scrollTrigger: { trigger: '.testimonials-section', start: 'top 80%' },
      duration: 1, y: 30, opacity: 0, ease: 'power3.out'
    });

    // Industries
    gsap.from('.industry-card', {
      scrollTrigger: { trigger: '.industries-section', start: 'top 80%' },
      duration: 0.6, y: 30, opacity: 1, stagger: 0.1, ease: 'power2.out'
    });

    // Contact
    gsap.from('.contact-image', {
      scrollTrigger: { trigger: '.contact-section', start: 'top 80%' },
      duration: 1, x: -50, opacity: 0, ease: 'power3.out'
    });
    gsap.from('.contact-form', {
      scrollTrigger: { trigger: '.contact-section', start: 'top 80%' },
      duration: 1, x: 50, opacity: 0, delay: 0.5, ease: 'power3.out'
    });
  }
});

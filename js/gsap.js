
    gsap.registerPlugin(ScrollTrigger);

    // Hero text animation
    gsap.from(".pg1 h2", {
      opacity: 0,
      y: 100,
      duration: 2.5,
      ease: "power3.out"
    });

    // About section fade-in
    gsap.from(".about", {
      scrollTrigger: ".about",
      opacity: 0,
      y: 80,
      duration: 3,
      ease: "power2.out"
    });

    // Moving text loop
    gsap.to("#moving-text .con", {
      xPercent: -100,
      repeat: -1,
      duration: 10,
      ease: "linear"
    });

    // Product cards animation
   

    // Enquiry form slide-up
    gsap.from(".enquiry-section", {
      scrollTrigger: ".enquiry-section",
      opacity: 0,
      y: 150,
      duration: 2.2,
      ease: "power3.out"
    });

    gsap.registerPlugin(ScrollTrigger);

    // Heading animation
    gsap.from(".p_n .h", {
      y: -100,
      opacity: 0,
      duration: 1.2,
      ease: "power4.out"
    });

    // Top image animation
    gsap.from(".img img", {
      scale: 0.8,
      opacity: 0,
      duration: 1.5,
      ease: "power3.out"
    });

    // Animate each section on scroll
    gsap.utils.toArray(".about-section").forEach((section, i) => {
      let text = section.querySelector(".about-text");
      let image = section.querySelector(".about-image");

      gsap.from(text, {
        x: i % 2 === 0 ? -100 : 100, // alternate left/right
        opacity: 0,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
          trigger: section,
          start: "top 80%",
          toggleActions: "play none none reverse"
        }
      });

      gsap.from(image, {
        x: i % 2 === 0 ? 100 : -100,
        opacity: 0,
        duration: 1,
        delay: 0.2,
        ease: "power3.out",
        scrollTrigger: {
          trigger: section,
          start: "top 80%",
          toggleActions: "play none none reverse"
        }
      });
    });

    // Smooth fade for footer
    gsap.from("footer", {
      opacity: 0,
      y: 50,
      duration: 1,
      scrollTrigger: {
        trigger: "footer",
        start: "top 90%"
      }
    });
  

      const scroll = new LocomotiveScroll({
      el: document.querySelector('#main'),
      smooth: true
  });
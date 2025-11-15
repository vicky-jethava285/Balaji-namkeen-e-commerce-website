document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.querySelector(".menu-toggle");
  const navLinks = document.querySelector(".nav-links");

  toggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
    toggle.classList.toggle("active"); // Optional: animate the hamburger
  });
});

// GSAP Timeline for Navbar Animation
gsap
  .timeline()
  .from(".navbar", { y: -60, opacity: 0, duration: 0.6, ease: "power2.out" })
  .from(
    ".logo img",
    { scale: 0, opacity: 0, duration: 0.5, ease: "back.out(1.7)" },
    "-=0.3"
  )
  .from(".logo h2", 
    { x: -40, 
      opacity: 0,
       duration: 0.5 
      }, "-=0.4")
  .from(
    ".nav-links li",
    {
      y: -30,
      opacity: 0,
      stagger: 0.12,
      duration: 0.5,
      ease: "power2.out",
    },
    "-=0.3"
  // )
  // .from(
  //   "#us li",
  //   {
  //     y: -30,
  //     opacity: 0,
  //     stagger: 0.15,
  //     duration: 0.5,
  //     ease: "power2.out",
  //   }
  //   // "-=0.5"
  );

// Optional: Hamburger menu animation (if you use it)
document.querySelector(".menu-toggle").addEventListener("click", function () {
  this.classList.toggle("active");
  document.querySelector(".nav-links").classList.toggle("active");
  document.getElementById("us").classList.toggle("active");
});

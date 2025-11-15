gsap.to(".contact-card", {
  duration: 1,
  y: 0,
  opacity: 1,
  ease: "power3.out",
  from: {
    y: -50,
    opacity: 0
  }
});

gsap.to(".chip.red", {
  duration: 1,
  delay: 0.5,
  scale: 1,
  opacity: 1,
  rotate: -10,
  ease: "elastic.out(1, 0.5)"
});

gsap.to(".chip.green", {
  duration: 1,
  delay: 0.8,
  scale: 1,
  opacity: 1,
  rotate: 10,
  ease: "elastic.out(1, 0.5)"
});

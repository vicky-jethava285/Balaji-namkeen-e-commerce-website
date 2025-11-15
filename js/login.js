document.getElementById("showLogin").addEventListener("click", () => {
  document.getElementById("loginForm").classList.add("active");
  document.getElementById("signupForm").classList.remove("active");
  document.getElementById("showLogin").classList.add("active");
  document.getElementById("showSignup").classList.remove("active");
});

document.getElementById("showSignup").addEventListener("click", () => {
  document.getElementById("signupForm").classList.add("active");
  document.getElementById("loginForm").classList.remove("active");
  document.getElementById("showSignup").classList.add("active");
  document.getElementById("showLogin").classList.remove("active");
});

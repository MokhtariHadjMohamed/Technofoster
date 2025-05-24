const hamburger = document.getElementById("hamburger");
const menu = document.getElementById("nav_item");

// Toggle menu on mobile tap
hamburger.addEventListener("click", () => {
  menu.style.display = menu.style.display === "inline" ? "none" : "inline";
});

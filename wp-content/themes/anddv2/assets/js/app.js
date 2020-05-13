console.log("here");

const nav = document.querySelector('#navbar');
window.addEventListener("scroll", function() {
  if (this.scrollY <= 100) {
    nav.className = 'navbar-top';
  } else {
    nav.className = 'navbar-top navbar-top-active';
  }
});

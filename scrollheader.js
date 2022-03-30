var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-150px";
    document.getElementById("navbar").style.borderBottom = "1px solid #F5F5F5";
  }
  prevScrollpos = currentScrollPos;
}
const nav = document.querySelector("nav");
const foot = document.querySelector("footer");
const div = document.querySelector(".centrage");
div.style.paddingTop = nav.offsetHeight + "px";
div.style.paddingBottom = foot.offsetHeight + "px";

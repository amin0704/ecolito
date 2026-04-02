const nav = document.querySelector("nav");
const foot = document.querySelector("footer");
const div = document.querySelector(".flex-grow-1");
div.style.paddingTop = nav.offsetHeight + "px";
console.log(nav.offsetHeight + "px");
console.log(foot.offsetHeight + "px");
div.style.paddingBottom = foot.offsetHeight + "px";

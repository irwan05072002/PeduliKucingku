const btn = document.getElementById("btn_nav");
const content = document.getElementById("content");
const line1 = document.getElementById("line1");
const line2 = document.getElementById("line2");

btn.addEventListener("click", function () {
  content.classList.toggle("contentSlide");
  line1.classList.toggle("line_slide");
  line2.classList.toggle("line_slide");
});

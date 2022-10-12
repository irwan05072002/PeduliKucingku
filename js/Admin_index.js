// animation header login
const hbb = document.getElementById("hbb");

setInterval(function () {
  hbb.style.backgroundColor = "salmon";
  hbb.style.transition = "1s";
}, 3000);

setInterval(function () {
  hbb.style.backgroundColor = "violet";
  hbb.style.transition = "1s";
}, 6000);

setInterval(function () {
  hbb.style.backgroundColor = "lightgreen";
  hbb.style.transition = "1s";
}, 9000);

//===========================================================================

// setting loading animation
function loadingAnimate() {
  const loading = document.getElementById("box-loading");
  window.addEventListener("load", function () {
    // use timing for hidden loading
    setTimeout(() => {
      loading.style.display = "none";
    }, 1200);
  });
}

// run funtion when windows load
loadingAnimate();

//===========================================================================

// hide password
function showPassword() {
  const ip = document.getElementById("ip");
  if (ip.type === "password") {
    ip.type = "text";
  } else {
    ip.type = "password";
  }
}
// dom selection and eventHeandlear
const tv = document.getElementById("tv");
tv.addEventListener("click", showPassword);

//===========================================================================

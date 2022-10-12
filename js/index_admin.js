// setting loading animation
function loadingAnimate() {
  const loading = document.getElementById("box-loading");
  const img_loading = document.getElementById("img-loading");

  window.addEventListener("load", function () {
    // use timing for hidden img-loading
    setTimeout(() => {
      img_loading.style.opacity = "0%";
      img_loading.style.transition = "1s";

      // hiden box-login
      setInterval(() => {
        loading.style.display = "none";
        loading.style.transition = "1s";
      }, 1200);
    }, 1000);
  });
}

// run funtion when windows load
loadingAnimate();

document.addEventListener("DOMContentLoaded", function () {
  const rating = document.querySelector(".raiting");
  const stars = rating.querySelectorAll(".star");

  stars.forEach(function (star, index) {
    star.addEventListener("click", function () {
      console.log("clicked");
      for (let i = 0; i <= index; i++) {
        stars[i].src = "/icon/star_filled.svg";
      }
      for (let i = index + 1; i < stars.length; i++) {
        stars[i].src = "/icon/star.svg";
      }
    });
  });
});

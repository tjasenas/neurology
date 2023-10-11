document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".open-navi");
  const mobNavi = document.querySelector(".mob-wrapper");
  const closeMobNavi = document.querySelector(".close-navi");
  const overlay = document.querySelector(".overlay");

  const removeActive = function () {
    mobNavi.classList.remove("active");
    overlay.classList.remove("active");
  };

  hamburger.addEventListener("click", function () {
    mobNavi.classList.add("active");
    overlay.classList.add("active");
  });
  closeMobNavi.addEventListener("click", removeActive);
  overlay.addEventListener("click", removeActive);

  const ulMob = document.querySelector(".mob-navi");
  const hasChild = ulMob.querySelectorAll(".menu-item-has-children");
  const naviHeader = document.querySelector(".mob-wrapper__header");

  let i = 0;

  const goBackEl = this.createElement("div");
  goBackEl.classList.add("move-back");
  goBackEl.innerHTML =
    '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>';

  goBackEl.addEventListener("click", function () {
    const getTopLevel = document.querySelector(`.level-${i}`);
    getTopLevel.style.display = "none";
    getTopLevel.classList.remove(`level-${i}`);
    ulMob.style.transform = `translateX(-${i === 1 ? 0 : (i - 1) * 100}%)`;
    i--;
    if (i === 0) goBackEl.remove();
  });

  for (const el of hasChild) {
    const elLink = el.querySelector("a");
    const subMenu = el.querySelector(".sub-menu");

    elLink.addEventListener("click", function (e) {
      e.preventDefault();
      i++;

      subMenu.classList.add(`level-${i}`);
      naviHeader.prepend(goBackEl);
      subMenu.style.display = "block";
      ulMob.style.transform = `translateX(-${i * 100}%)`;
    });
  }

  const goBack = document.querySelector(".arrow-top");
  goBack.addEventListener("click", function (e) {
    e.preventDefault();

    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});

/* HERO */
/* Функция начального состояния темы */
function initialState(themeName) {
  localStorage.setItem("theme", themeName);

  document.documentElement.className = themeName; /* documentElement почти тоже самое, что и HTML */
  toggleClassBtn();
}
initialState("light-theme");

/* Функция изменения темы */
function toggleTheme() {
  if (localStorage.getItem("theme") == "dark-theme") {
    initialState("light-theme");
  } else {
    initialState("dark-theme");
  }
}

/* Клик с вызовом изменения темы */
themeBtn.addEventListener("click", (e) => {
  e.preventDefault();
  toggleTheme();
});

/* HERO-MENU */
const heroBtns = document.querySelector(".hero__btns");
const heroMenu = document.querySelector(".hero__nav");
const heroBurger = document.querySelector(".hero__burger");
const heroMenuLinks = document.querySelectorAll(".hero-menu__link");

function openHeroMenu() {
  heroBurger.classList.add("open-menu-burger");
  heroMenu.classList.add("open-menu");

}
function closeHeroMenu() {
  heroBurger.classList.remove("open-menu-burger");
  heroMenu.classList.remove("open-menu");
}

heroBurger.addEventListener("click", function () {
  if (!heroBurger.classList.contains("open-menu-burger")) {
    openHeroMenu();
  } else {
    closeHeroMenu();
  }
});

heroMenuLinks.forEach((e) => {
  e.addEventListener("click", () => {
    closeHeroMenu();
  });
});

document.addEventListener("click", (e) => {
  if (!e.target.closest(".hero__nav, .hero__btns")) {
    closeHeroMenu();
  }
});

"use strict";

//element toggle function
const elementToggleFunc = function (elem) {
  elem.classList.toggle("active");
};
//sidevar var
const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");
//sidebar toggle functional for mobile
sidebarBtn.addEventListener("click", function () {
  elementToggleFunc(sidebar);
});

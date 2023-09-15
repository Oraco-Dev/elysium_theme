/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./js/src/components/menu.js":
/*!***********************************!*\
  !*** ./js/src/components/menu.js ***!
  \***********************************/
/***/ (() => {

eval("var menu = document.querySelector(\".menu\");\nvar body = document.body;\nvar hamburger = document.querySelector(\".hamburger\");\nvar hamburgerIcon = document.querySelector(\".hamburger__icon\");\nhamburger.addEventListener(\"click\", function () {\n  if (hamburger.classList.contains(\"open\")) {\n    hamburger.classList.remove(\"open\");\n    hamburgerIcon.classList.remove(\"open\");\n    menu.classList.remove(\"open\");\n    menu.classList.add(\"close\");\n    body.classList.remove(\"open\");\n  } else {\n    hamburger.classList.add(\"open\");\n    hamburgerIcon.classList.add(\"open\");\n    menu.classList.remove(\"close\");\n    menu.classList.add(\"open\");\n    body.classList.add(\"open\");\n  }\n});\n\n//# sourceURL=webpack://wp-barebone-theme-webpack5-sass/./js/src/components/menu.js?");

/***/ }),

/***/ "./js/src/components/modal.js":
/*!************************************!*\
  !*** ./js/src/components/modal.js ***!
  \************************************/
/***/ (() => {

eval("var modal = document.querySelector(\".modal\");\nvar modalBtn = document.querySelectorAll(\".modal-btn\");\nvar closeModalbtn = document.querySelector(\".close-modal-btn\");\nmodalBtn.forEach(function (button) {\n  button.addEventListener(\"click\", function () {\n    modal.classList.add(\"open\");\n  });\n});\ncloseModalbtn.addEventListener(\"click\", function () {\n  console.log(123);\n  modal.classList.remove(\"open\");\n});\n\n//# sourceURL=webpack://wp-barebone-theme-webpack5-sass/./js/src/components/modal.js?");

/***/ }),

/***/ "./js/src/helpers/categoryFilters.js":
/*!*******************************************!*\
  !*** ./js/src/helpers/categoryFilters.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _helpers_fliterPosts__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../helpers/fliterPosts */ \"./js/src/helpers/fliterPosts.js\");\n\nconsole.log(123);\nvar blogBadges = document.querySelectorAll(\".blog-filter__badges a\");\nconsole.log(blogBadges);\nblogBadges.forEach(function (el) {\n  el.addEventListener(\"click\", function () {\n    console.log(el); // const elColor = el.getAttribute(\"data-border\");\n\n    var elValue = el.getAttribute(\"data-category\");\n\n    if (el.classList.contains(\"selected\")) {\n      el.classList.remove(\"selected\"); //   el.style.backgroundColor = `transparent`;\n    } else {\n      el.classList.add(\"selected\"); //   el.style.backgroundColor = `${elColor}`;\n    }\n\n    (0,_helpers_fliterPosts__WEBPACK_IMPORTED_MODULE_0__.filterPosts)(elValue);\n  });\n});\n\n//# sourceURL=webpack://wp-barebone-theme-webpack5-sass/./js/src/helpers/categoryFilters.js?");

/***/ }),

/***/ "./js/src/helpers/fliterPosts.js":
/*!***************************************!*\
  !*** ./js/src/helpers/fliterPosts.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"filterPosts\": () => (/* binding */ filterPosts)\n/* harmony export */ });\nvar selectedCategories = [];\nfunction filterPosts(category) {\n  var index = selectedCategories.indexOf(category);\n\n  if (index === -1) {\n    // Add category to the array if not already present\n    selectedCategories.push(category);\n  } else {\n    // Remove category from the array if already present\n    selectedCategories.splice(index, 1);\n  } // Get all the posts on the page\n\n\n  var posts = document.getElementsByClassName(\"blog-card\"); // Iterate through the posts and show/hide based on the selected categories\n\n  for (var i = 0; i < posts.length; i++) {\n    var post = posts[i]; // access the 'data-category attribute assigned to html element in JSON'\n\n    var postCategories = JSON.parse(post.getAttribute(\"data-category\")); // Show all posts if no categories selected or 'all' category is selected\n\n    if (selectedCategories.length === 0 || selectedCategories.includes(\"all\")) {\n      post.style.display = \"block\";\n    } else {\n      // Check if post categories match any of the selected categories\n      var postIncludesCategory = postCategories.some(function (category) {\n        return selectedCategories.includes(category);\n      });\n\n      if (postIncludesCategory) {\n        post.style.display = \"block\";\n      } else {\n        post.style.display = \"none\";\n      }\n    }\n  }\n}\n\n//# sourceURL=webpack://wp-barebone-theme-webpack5-sass/./js/src/helpers/fliterPosts.js?");

/***/ }),

/***/ "./js/src/helpers/tabPosts.js":
/*!************************************!*\
  !*** ./js/src/helpers/tabPosts.js ***!
  \************************************/
/***/ (() => {

eval("var tabButtons = document.querySelectorAll(\".tab-btn\");\ndocument.addEventListener(\"DOMContentLoaded\", function () {\n  currentUrl = window.location.href;\n  var splitUrl = currentUrl.split(\"/\");\n\n  if (splitUrl[3] === \"personal-services\" || splitUrl[3] === \"business-services\") {\n    tabButtons.forEach(function (button, i) {\n      // Find the <h5> element within the <div>\n      var h5Element = button.querySelector(\"h5\"); // Get the content of the <h5> element as a string\n\n      var contentAsString = h5Element.textContent.toLowerCase();\n      var formattedString = contentAsString.trim().replace(/ /g, \"-\");\n\n      if (splitUrl[4] === formattedString) {\n        var targetTab = button.id;\n        button.classList.add(\"active-tab-button\");\n        document.getElementById(targetTab + \"-title\").classList.add(\"active-tab\");\n        document.getElementById(targetTab + \"-content\").classList.add(\"active-tab\");\n      }\n    });\n  }\n});\ntabButtons.forEach(function (button) {\n  button.addEventListener(\"click\", function (e) {\n    var targetTab = e.currentTarget.id;\n    var tabs = document.getElementsByClassName(\"tab\");\n\n    for (var i = 0; i < tabs.length; i++) {\n      tabs[i].classList.remove(\"active-tab\"); //   tabs[i].style.display = \"none\";\n    }\n\n    for (var j = 0; j < tabButtons.length; j++) {\n      tabButtons[j].classList.remove(\"active-tab-button\");\n    }\n\n    button.classList.add(\"active-tab-button\");\n    document.getElementById(targetTab + \"-title\").classList.add(\"active-tab\");\n    document.getElementById(targetTab + \"-content\").classList.add(\"active-tab\");\n  });\n});\n\n//# sourceURL=webpack://wp-barebone-theme-webpack5-sass/./js/src/helpers/tabPosts.js?");

/***/ }),

/***/ "./js/src/main.js":
/*!************************!*\
  !*** ./js/src/main.js ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _helpers_fliterPosts__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./helpers/fliterPosts */ \"./js/src/helpers/fliterPosts.js\");\n/* harmony import */ var _helpers_categoryFilters__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./helpers/categoryFilters */ \"./js/src/helpers/categoryFilters.js\");\n/* harmony import */ var _helpers_tabPosts__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./helpers/tabPosts */ \"./js/src/helpers/tabPosts.js\");\n/* harmony import */ var _helpers_tabPosts__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_helpers_tabPosts__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _components_modal__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/modal */ \"./js/src/components/modal.js\");\n/* harmony import */ var _components_modal__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_components_modal__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _components_menu__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/menu */ \"./js/src/components/menu.js\");\n/* harmony import */ var _components_menu__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_components_menu__WEBPACK_IMPORTED_MODULE_4__);\n\n\n\n\n\n\n//# sourceURL=webpack://wp-barebone-theme-webpack5-sass/./js/src/main.js?");

/***/ }),

/***/ "./css/src/main.scss":
/*!***************************!*\
  !*** ./css/src/main.scss ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://wp-barebone-theme-webpack5-sass/./css/src/main.scss?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_require__("./js/src/main.js");
/******/ 	var __webpack_exports__ = __webpack_require__("./css/src/main.scss");
/******/ 	
/******/ })()
;
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

/***/ "./js/src/helpers/categoryFilters.js":
/*!*******************************************!*\
  !*** ./js/src/helpers/categoryFilters.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _helpers_fliterPosts__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../helpers/fliterPosts */ \"./js/src/helpers/fliterPosts.js\");\n\nconsole.log(123);\nconst blogBadges = document.querySelectorAll(\".blog-filter__badges a\");\nconsole.log(blogBadges);\nblogBadges.forEach(el => {\n  el.addEventListener(\"click\", () => {\n    console.log(el); // const elColor = el.getAttribute(\"data-border\");\n\n    const elValue = el.getAttribute(\"data-category\");\n\n    if (el.classList.contains(\"selected\")) {\n      el.classList.remove(\"selected\"); //   el.style.backgroundColor = `transparent`;\n    } else {\n      el.classList.add(\"selected\"); //   el.style.backgroundColor = `${elColor}`;\n    }\n\n    (0,_helpers_fliterPosts__WEBPACK_IMPORTED_MODULE_0__.filterPosts)(elValue);\n  });\n});\n\n//# sourceURL=webpack://wp-barebone-theme-webpack5-sass/./js/src/helpers/categoryFilters.js?");

/***/ }),

/***/ "./js/src/helpers/fliterPosts.js":
/*!***************************************!*\
  !*** ./js/src/helpers/fliterPosts.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"filterPosts\": () => (/* binding */ filterPosts)\n/* harmony export */ });\nlet selectedCategories = [];\nfunction filterPosts(category) {\n  var index = selectedCategories.indexOf(category);\n\n  if (index === -1) {\n    // Add category to the array if not already present\n    selectedCategories.push(category);\n  } else {\n    // Remove category from the array if already present\n    selectedCategories.splice(index, 1);\n  } // Get all the posts on the page\n\n\n  let posts = document.getElementsByClassName(\"blog-card\"); // Iterate through the posts and show/hide based on the selected categories\n\n  for (var i = 0; i < posts.length; i++) {\n    let post = posts[i]; // access the 'data-category attribute assigned to html element in JSON'\n\n    let postCategories = JSON.parse(post.getAttribute(\"data-category\")); // Show all posts if no categories selected or 'all' category is selected\n\n    if (selectedCategories.length === 0 || selectedCategories.includes(\"all\")) {\n      post.style.display = \"block\";\n    } else {\n      // Check if post categories match any of the selected categories\n      let postIncludesCategory = postCategories.some(category => selectedCategories.includes(category));\n\n      if (postIncludesCategory) {\n        post.style.display = \"block\";\n      } else {\n        post.style.display = \"none\";\n      }\n    }\n  }\n}\n\n//# sourceURL=webpack://wp-barebone-theme-webpack5-sass/./js/src/helpers/fliterPosts.js?");

/***/ }),

/***/ "./js/src/main.js":
/*!************************!*\
  !*** ./js/src/main.js ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _helpers_fliterPosts__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./helpers/fliterPosts */ \"./js/src/helpers/fliterPosts.js\");\n/* harmony import */ var _helpers_categoryFilters__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./helpers/categoryFilters */ \"./js/src/helpers/categoryFilters.js\");\n\n\n\n//# sourceURL=webpack://wp-barebone-theme-webpack5-sass/./js/src/main.js?");

/***/ }),

/***/ "./css/src/main.scss":
/*!***************************!*\
  !*** ./css/src/main.scss ***!
  \***************************/
/***/ (() => {

eval("throw new Error(\"Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\\nHookWebpackError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\nSassError: expected \\\"{\\\".\\n   ╷\\n37 │       &-icons \\n   │               ^\\n   ╵\\n  css/src/pages/_contact.scss 37:15  @import\\n  css/src/main.scss 29:9             root stylesheet\\n    at tryRunOrWebpackError (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/webpack/lib/HookWebpackError.js:88:9)\\n    at __webpack_require_module__ (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/webpack/lib/Compilation.js:5055:12)\\n    at __webpack_require__ (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/webpack/lib/Compilation.js:5012:18)\\n    at /Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/webpack/lib/Compilation.js:5083:20\\n    at symbolIterator (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/neo-async/async.js:3485:9)\\n    at done (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/neo-async/async.js:3527:9)\\n    at Hook.eval [as callAsync] (eval at create (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\\n    at Hook.CALL_ASYNC_DELEGATE [as _callAsync] (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/tapable/lib/Hook.js:18:14)\\n    at /Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/webpack/lib/Compilation.js:4990:43\\n    at symbolIterator (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/neo-async/async.js:3482:9)\\n-- inner error --\\nError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\nSassError: expected \\\"{\\\".\\n   ╷\\n37 │       &-icons \\n   │               ^\\n   ╵\\n  css/src/pages/_contact.scss 37:15  @import\\n  css/src/main.scss 29:9             root stylesheet\\n    at Object.<anonymous> (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/css-loader/dist/cjs.js!/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/sass-loader/dist/cjs.js!/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/css/src/main.scss:1:7)\\n    at /Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/webpack/lib/javascript/JavascriptModulesPlugin.js:441:11\\n    at Hook.eval [as call] (eval at create (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/tapable/lib/HookCodeFactory.js:19:10), <anonymous>:7:1)\\n    at Hook.CALL_DELEGATE [as _call] (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/tapable/lib/Hook.js:14:14)\\n    at /Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/webpack/lib/Compilation.js:5057:39\\n    at tryRunOrWebpackError (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/webpack/lib/HookWebpackError.js:83:7)\\n    at __webpack_require_module__ (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/webpack/lib/Compilation.js:5055:12)\\n    at __webpack_require__ (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/webpack/lib/Compilation.js:5012:18)\\n    at /Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/webpack/lib/Compilation.js:5083:20\\n    at symbolIterator (/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/neo-async/async.js:3485:9)\\n\\nGenerated code for /Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/css-loader/dist/cjs.js!/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/node_modules/sass-loader/dist/cjs.js!/Users/ty.vile/Local Sites/elancewebsitelocal/app/public/wp-content/themes/oraco_theme/css/src/main.scss\\n1 | throw new Error(\\\"Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\\\nSassError: expected \\\\\\\"{\\\\\\\".\\\\n   ╷\\\\n37 │       &-icons \\\\n   │               ^\\\\n   ╵\\\\n  css/src/pages/_contact.scss 37:15  @import\\\\n  css/src/main.scss 29:9             root stylesheet\\\");\");\n\n//# sourceURL=webpack://wp-barebone-theme-webpack5-sass/./css/src/main.scss?");

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
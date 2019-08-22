/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/jquery.flexisel.js":
/*!*****************************************!*\
  !*** ./resources/js/jquery.flexisel.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*
* File: jquery.flexisel.js
* Version: 1.0.0
* Description: Responsive carousel jQuery plugin
* Author: 9bit Studios
* Copyright 2012, 9bit Studios
* http://www.9bitstudios.com
* Free to use and abuse under the MIT license.
* http://www.opensource.org/licenses/mit-license.php
*/
(function ($) {
  $.fn.flexisel = function (options) {
    var defaults = $.extend({
      visibleItems: 4,
      animationSpeed: 200,
      autoPlay: false,
      autoPlaySpeed: 3000,
      pauseOnHover: true,
      setMaxWidthAndHeight: false,
      enableResponsiveBreakpoints: false,
      responsiveBreakpoints: {
        portrait: {
          changePoint: 480,
          visibleItems: 1
        },
        landscape: {
          changePoint: 640,
          visibleItems: 2
        },
        tablet: {
          changePoint: 768,
          visibleItems: 3
        }
      }
    }, options);
    /******************************
    Private Variables
    *******************************/

    var object = $(this);
    var settings = $.extend(defaults, options);
    var itemsWidth; // Declare the global width of each item in carousel

    var canNavigate = true;
    var itemsVisible = settings.visibleItems;
    /******************************
    Public Methods
    *******************************/

    var methods = {
      init: function init() {
        return this.each(function () {
          methods.appendHTML();
          methods.setEventHandlers();
          methods.initializeItems();
        });
      },

      /******************************
      Initialize Items
      *******************************/
      initializeItems: function initializeItems() {
        var listParent = object.parent();
        var innerHeight = listParent.height();
        var childSet = object.children();
        var innerWidth = listParent.width(); // Set widths

        itemsWidth = innerWidth / itemsVisible;
        childSet.width(itemsWidth);
        childSet.last().insertBefore(childSet.first());
        childSet.last().insertBefore(childSet.first());
        object.css({
          'left': -itemsWidth
        });
        object.fadeIn();
        $(window).trigger("resize"); // needed to position arrows correctly
      },

      /******************************
      Append HTML
      *******************************/
      appendHTML: function appendHTML() {
        object.addClass("nbs-flexisel-ul");
        object.wrap("<div class='nbs-flexisel-container'><div class='nbs-flexisel-inner'></div></div>");
        object.find("li").addClass("nbs-flexisel-item");

        if (settings.setMaxWidthAndHeight) {
          var baseWidth = $(".nbs-flexisel-item > img").width();
          var baseHeight = $(".nbs-flexisel-item > img").height();
          $(".nbs-flexisel-item > img").css("max-width", baseWidth);
          $(".nbs-flexisel-item > img").css("max-height", baseHeight);
        }

        $("<div class='nbs-flexisel-nav-left'></div><div class='nbs-flexisel-nav-right'></div>").insertAfter(object);
        var cloneContent = object.children().clone();
        object.append(cloneContent);
      },

      /******************************
      Set Event Handlers
      *******************************/
      setEventHandlers: function setEventHandlers() {
        var listParent = object.parent();
        var childSet = object.children();
        var leftArrow = listParent.find($(".nbs-flexisel-nav-left"));
        var rightArrow = listParent.find($(".nbs-flexisel-nav-right"));
        $(window).on("resize", function (event) {
          methods.setResponsiveEvents();
          var innerWidth = $(listParent).width();
          var innerHeight = $(listParent).height();
          itemsWidth = innerWidth / itemsVisible;
          childSet.width(itemsWidth);
          object.css({
            'left': -itemsWidth
          });
          var halfArrowHeight = leftArrow.height() / 2;
          var arrowMargin = innerHeight / 2 - halfArrowHeight;
          leftArrow.css("top", arrowMargin + "px");
          rightArrow.css("top", arrowMargin + "px");
        });
        $(leftArrow).on("click", function (event) {
          methods.scrollLeft();
        });
        $(rightArrow).on("click", function (event) {
          methods.scrollRight();
        });

        if (settings.pauseOnHover == true) {
          $(".nbs-flexisel-item").on({
            mouseenter: function mouseenter() {
              canNavigate = false;
            },
            mouseleave: function mouseleave() {
              canNavigate = true;
            }
          });
        }

        if (settings.autoPlay == true) {
          setInterval(function () {
            if (canNavigate == true) methods.scrollRight();
          }, settings.autoPlaySpeed);
        }
      },

      /******************************
      Set Responsive Events
      *******************************/
      setResponsiveEvents: function setResponsiveEvents() {
        var contentWidth = $('html').width();

        if (settings.enableResponsiveBreakpoints == true) {
          if (contentWidth < settings.responsiveBreakpoints.portrait.changePoint) {
            itemsVisible = settings.responsiveBreakpoints.portrait.visibleItems;
          } else if (contentWidth > settings.responsiveBreakpoints.portrait.changePoint && contentWidth < settings.responsiveBreakpoints.landscape.changePoint) {
            itemsVisible = settings.responsiveBreakpoints.landscape.visibleItems;
          } else if (contentWidth > settings.responsiveBreakpoints.landscape.changePoint && contentWidth < settings.responsiveBreakpoints.tablet.changePoint) {
            itemsVisible = settings.responsiveBreakpoints.tablet.visibleItems;
          } else {
            itemsVisible = settings.visibleItems;
          }
        }
      },

      /******************************
      Scroll Left
      *******************************/
      scrollLeft: function scrollLeft() {
        if (canNavigate == true) {
          canNavigate = false;
          var listParent = object.parent();
          var innerWidth = listParent.width();
          itemsWidth = innerWidth / itemsVisible;
          var childSet = object.children();
          object.animate({
            'left': "+=" + itemsWidth
          }, {
            queue: false,
            duration: settings.animationSpeed,
            easing: "linear",
            complete: function complete() {
              childSet.last().insertBefore(childSet.first()); // Get the first list item and put it after the last list item (that's how the infinite effects is made)   								

              methods.adjustScroll();
              canNavigate = true;
            }
          });
        }
      },

      /******************************
      Scroll Right
      *******************************/
      scrollRight: function scrollRight() {
        if (canNavigate == true) {
          canNavigate = false;
          var listParent = object.parent();
          var innerWidth = listParent.width();
          itemsWidth = innerWidth / itemsVisible;
          var childSet = object.children();
          object.animate({
            'left': "-=" + itemsWidth
          }, {
            queue: false,
            duration: settings.animationSpeed,
            easing: "linear",
            complete: function complete() {
              childSet.first().insertAfter(childSet.last()); // Get the first list item and put it after the last list item (that's how the infinite effects is made)   

              methods.adjustScroll();
              canNavigate = true;
            }
          });
        }
      },

      /******************************
      Adjust Scroll 
      *******************************/
      adjustScroll: function adjustScroll() {
        var listParent = object.parent();
        var childSet = object.children();
        var innerWidth = listParent.width();
        itemsWidth = innerWidth / itemsVisible;
        childSet.width(itemsWidth);
        object.css({
          'left': -itemsWidth
        });
      }
    };

    if (methods[options]) {
      // $("#element").pluginName('methodName', 'arg1', 'arg2');
      return methods[options].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (_typeof(options) === 'object' || !options) {
      // $("#element").pluginName({ option: 1, option:2 });
      return methods.init.apply(this);
    } else {
      $.error('Method "' + method + '" does not exist in flexisel plugin!');
    }
  };
})(jQuery);

/***/ }),

/***/ 1:
/*!***********************************************!*\
  !*** multi ./resources/js/jquery.flexisel.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/ag/Development/HaKuJudge/resources/js/jquery.flexisel.js */"./resources/js/jquery.flexisel.js");


/***/ })

/******/ });
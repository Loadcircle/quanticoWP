"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

window._setDocumentReadyTrue = null;
window.documentReady = new Promise(function (resolve) {
  window._setDocumentReadyTrue = resolve;
});
document.addEventListener('DOMContentLoaded', function () {
  var Body = document.body;
  var Header = document.querySelector('body > header');
  var Main = document.querySelector('body > main');
  var Footer = document.querySelector('body > footer');
  var $openDrawerBtn = Header.querySelector('.open-drawer-btn');
  var $headerBackdropLayer = Header.querySelector('.backdrop');
  var $closeDrawerBtn = Header.querySelector('.close-drawer-btn');
  var fnMobileArr = [];
  var fnTabletArr = [];
  var fnDesktopArr = [];

  window.addMediaMobileHandler = function (fn) {
    if (typeof fn !== 'function') {
      console.warn(fn, "is not a function");
      return;
    }

    fnMobileArr.push(fn);
  };

  window.addMediaTabletHandler = function (fn) {
    if (typeof fn !== 'function') {
      console.warn(fn, "is not a function");
      return;
    }

    fnTabletArr.push(fn);
  };

  window.addMediaDesktopHandler = function (fn) {
    if (typeof fn !== 'function') {
      console.warn(fn, "is not a function");
      return;
    }

    fnDesktopArr.push(fn);
  };

  $openDrawerBtn.addEventListener('click', function (e) {
    e.preventDefault();
    e.stopPropagation();
    Body.classList.add('drawer-opened');
  });
  $headerBackdropLayer.addEventListener('click', function (e) {
    e.preventDefault();
    e.stopPropagation();
    Body.classList.remove('drawer-opened');
  });
  $closeDrawerBtn.addEventListener('click', function (e) {
    e.preventDefault();
    e.stopPropagation();
    Body.classList.remove('drawer-opened');
  });
  var checkMobile = window.matchMedia('screen and (max-width: 1024px)');
  var checkTablet = window.matchMedia('screen and (min-width: 1025px) and (max-width: 1190px)');
  var checkDesktop = window.matchMedia('screen and (min-width: 1191px)');
  var currentScreenMode = '';

  var $navItemsWithSubMenu = _toConsumableArray(Header.querySelectorAll('nav > ul > li.has-submenu'));

  var navItemsWithSubMenuHandlers = [];

  var clearNavItemsHandlers = function clearNavItemsHandlers() {
    var handlerPair = navItemsWithSubMenuHandlers.pop();

    while (Array.isArray(handlerPair)) {
      handlerPair[0].removeEventListener(handlerPair[1], handlerPair[2], handlerPair[3]);
      handlerPair = navItemsWithSubMenuHandlers.pop();
    }
  };

  var configureNavbarDesktop = function configureNavbarDesktop() {
    clearNavItemsHandlers();
    $navItemsWithSubMenu.forEach(function ($item) {
      navItemsWithSubMenuHandlers = navItemsWithSubMenuHandlers.concat([[$item, 'mouseenter', function (e) {
        e.stopPropagation();
        $item.classList.add('active');
      }, false], [$item, 'mouseleave', function (e) {
        e.stopPropagation();
        $item.classList.remove('active');
      }, false]]);
    });
    navItemsWithSubMenuHandlers.forEach(function (handlerTuple) {
      handlerTuple[0].addEventListener(handlerTuple[1], handlerTuple[2], handlerTuple[3]);
    });
  };

  var configureNavbarTablet = function configureNavbarTablet() {
    clearNavItemsHandlers();
    $navItemsWithSubMenu.forEach(function ($item) {
      navItemsWithSubMenuHandlers = navItemsWithSubMenuHandlers.concat([[$item, 'mouseenter', function (e) {
        e.stopPropagation();
        $item.classList.add('active');
      }, false], [$item, 'mouseleave', function (e) {
        e.stopPropagation();
        $item.classList.remove('active');
      }, false], [$item.querySelector('a'), 'click', function (e) {
        e.preventDefault();
        e.stopPropagation();
      }, false]]);
    });
    navItemsWithSubMenuHandlers.forEach(function (handlerTuple) {
      handlerTuple[0].addEventListener(handlerTuple[1], handlerTuple[2], handlerTuple[3]);
    });
  };

  var configureNavbarMobile = function configureNavbarMobile() {
    clearNavItemsHandlers();
    $navItemsWithSubMenu.forEach(function ($item) {
      navItemsWithSubMenuHandlers = navItemsWithSubMenuHandlers.concat([[$item, 'click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        if (e.target.href && /#/.test(e.target.href)) {
          window.location.href = e.target.href;
          Body.classList.remove('drawer-opened');
          return;
        }

        $item.classList.toggle('active');
      }, true]]);
    });
    navItemsWithSubMenuHandlers.forEach(function (handlerTuple) {
      handlerTuple[0].addEventListener(handlerTuple[1], handlerTuple[2], handlerTuple[3]);
    });
  };

  var handleScreenMobile = function handleScreenMobile(force) {
    if (currentScreenMode === 'MOBILE' && !force) return;
    currentScreenMode = 'MOBILE';
    Body.classList.remove('drawer-opened');
    configureNavbarMobile();
    fnMobileArr.forEach(function (fn) {
      return fn();
    });
  };

  var handleScreenTablet = function handleScreenTablet(force) {
    if (currentScreenMode === 'TABLET' && !force) return;
    currentScreenMode = 'TABLET';
    Body.classList.remove('drawer-opened');
    configureNavbarTablet();
    fnTabletArr.forEach(function (fn) {
      return fn();
    });
  };

  var handleScreenDesktop = function handleScreenDesktop(force) {
    if (currentScreenMode === 'DESKTOP' && !force) return;
    currentScreenMode = 'DESKTOP';
    Body.classList.remove('drawer-opened');
    configureNavbarDesktop();
    fnDesktopArr.forEach(function (fn) {
      return fn();
    });
  };

  var handleMatchMediaChanged = function handleMatchMediaChanged() {
    var force = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
    return function () {
      if (checkMobile.matches) {
        handleScreenMobile(force);
      } else if (checkTablet.matches) {
        handleScreenTablet(force);
      } else if (checkDesktop.matches) {
        handleScreenDesktop(force);
      } else {}
    };
  };

  checkMobile.onchange = function () {
    return handleMatchMediaChanged()();
  };

  checkTablet.onchange = function () {
    return handleMatchMediaChanged()();
  };

  checkDesktop.onchange = function () {
    return handleMatchMediaChanged()();
  };

  handleMatchMediaChanged()();

  window._setDocumentReadyTrue();

  window.triggerArtificialMediaChange = handleMatchMediaChanged(true);
});
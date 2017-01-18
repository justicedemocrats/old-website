(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
window.$ = window.jQuery;

console.log('app.js loaded');

require('./modules/header-navigation');

},{"./modules/header-navigation":2}],2:[function(require,module,exports){
var waitFor = require('../utils/waitFor');

waitFor('.layout-header', function () {

  const menuToggle = $('[data-js-menu-toggle]');
  const openMenuClass = 'has-open-menu';

  // menu
  menuToggle.on('click', function () {
    $('body').toggleClass(openMenuClass);
  });
});

},{"../utils/waitFor":3}],3:[function(require,module,exports){
/**
 * waitFor
 * @param  {String}   selector DOM element to check for on every page load
 * @param  {Function} callback The code to execute when the element is on the page
 * @return {Boolean}
 */
module.exports = function (selector, callback) {
  if (document.querySelectorAll(selector).length > 0) {
    callback();
  } else {
    return false;
  }
};

},{}]},{},[1]);

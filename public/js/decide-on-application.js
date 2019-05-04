(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["js/decide-on-application"],{

/***/ "./resources/js/components/decide-on-application.js":
/*!**********************************************************!*\
  !*** ./resources/js/components/submitdecision.js ***!
  \**********************************************************/
/*! exports provided: submitDecision, callIfFunction */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "submitDecision", function() { return submitDecision; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "callIfFunction", function() { return callIfFunction; });
function submitDecision(url, config) {
  return new Promise(function (resolve, reject) {
    fetch(url).then(function (response) {
      return response.json();
    })["catch"](function (err) {
      callIfFunction(config.onConnectionError)._with(err);
    }).then(function (data) {
      // callIfFunction(config.onComplete)._with(data);
      if (data.error !== true) {
        callIfFunction(config.onSuccess)._with(data);
      } else {
        callIfFunction(config.onFailure)._with(data.errorMessage);
      }
    });
  });
}

function isFunction(method) {
  return typeof method === 'function';
}

function callIfFunction(callback) {
  if (isFunction(callback)) {
    return {
      callable: callback,
      _with: function _with(param) {
        return callback(param);
      }
    };
  } else {
    throw "Invalid value for " + callback.name;
  }
} // call(callback).with(param);

/***/ })

}]);
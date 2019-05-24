(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["js/add-awardCategory-form"],{

/***/ "./resources/js/components/add-awardCategory-form.js":
/*!***********************************************************!*\
  !*** ./resources/js/components/add-awardCategory-form.js ***!
  \***********************************************************/
/*! exports provided: setupForm, initEditor */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setupForm", function() { return setupForm; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "initEditor", function() { return initEditor; });
/* harmony import */ var _ckeditor_ckeditor5_build_classic__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @ckeditor/ckeditor5-build-classic */ "./node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js");
/* harmony import */ var _ckeditor_ckeditor5_build_classic__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_ckeditor_ckeditor5_build_classic__WEBPACK_IMPORTED_MODULE_0__);

var editor;
var ckEditor = document.getElementById('ckEditor');
function setupForm() {
  var addCategoryForm = document.getElementById('category-form');
  addCategoryForm.addEventListener('submit', function (e) {
    submitCategoryData(e, e.target.action);
  });
  var inputElements = document.querySelectorAll('#category-form input, textarea');
  var _iteratorNormalCompletion = true;
  var _didIteratorError = false;
  var _iteratorError = undefined;

  try {
    for (var _iterator = inputElements[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
      var el = _step.value;
      el.addEventListener('focus', function () {
        clearSubmitSuccessAnimation();
      });
    }
  } catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion && _iterator["return"] != null) {
        _iterator["return"]();
      }
    } finally {
      if (_didIteratorError) {
        throw _iteratorError;
      }
    }
  }
}
function initEditor() {
  _ckeditor_ckeditor5_build_classic__WEBPACK_IMPORTED_MODULE_0___default.a.create(ckEditor, {
    toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote']
  }).then(function (ckEditor) {
    editor = ckEditor;
  })["catch"](function (error) {
    console.log(error);
  });
}

function submitCategoryData(event, url) {
  event.preventDefault();
  var form = document.getElementById('category-form');
  var formData = new FormData(form); //For debugging. Expendable.

  var _iteratorNormalCompletion2 = true;
  var _didIteratorError2 = false;
  var _iteratorError2 = undefined;

  try {
    for (var _iterator2 = formData.entries()[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
      var entry = _step2.value;
      console.log(entry[0], entry[1]);
    }
  } catch (err) {
    _didIteratorError2 = true;
    _iteratorError2 = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion2 && _iterator2["return"] != null) {
        _iterator2["return"]();
      }
    } finally {
      if (_didIteratorError2) {
        throw _iteratorError2;
      }
    }
  }

  postData(url, formData).then(function (result) {
    console.log(result);

    if (!result['error']) {
      submitSuccessAnimation();
      form.reset();
      editor.setData('');

      if (editingOperation(url)) {
        window.location = '../award_categories#' + getIndex(url);
      }
    }
  });
}

function postData(url, formData) {
  return fetch(url, {
    method: 'POST',
    body: formData
  }).then(function (res) {
    return res.json();
  });
}

function submitSuccessAnimation() {
  var submitSuccess = document.querySelector('#submit-success');
  submitSuccess.classList.remove('opacity-0');
}

function clearSubmitSuccessAnimation() {
  var submitSuccess = document.querySelector('#submit-success');
  submitSuccess.classList.add('opacity-0');
}

function editingOperation(url) {
  return /\d$/.test(url);
}

function getIndex(url) {
  var index = url.substring(url.lastIndexOf('/') + 1);
  return parseInt(index, 10);
}

/***/ })

}]);
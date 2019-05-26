(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["js/awardCategories"],{

/***/ "./resources/js/components/awardCategories.js":
/*!****************************************************!*\
  !*** ./resources/js/components/awardCategories.js ***!
  \****************************************************/
/*! exports provided: test, scrollToEditedElement, deletionLinkSetup */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "test", function() { return test; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "scrollToEditedElement", function() { return scrollToEditedElement; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "deletionLinkSetup", function() { return deletionLinkSetup; });
function test() {
  if (window.location.hash) {
    console.log('hash--->', window.location.hash);
  }
}
function scrollToEditedElement() {
  var elementId = getHash();

  if (!elementId) {
    return;
  }

  var element = document.getElementById(elementId);
  console.log(element);
  var elementTop = element.getBoundingClientRect().y; // window.scrollTo({
  //     top: 0,
  //     left: 0,
  //     behavior: 'smooth'
  // })
  // window.scrollBy({
  //     top: elementTop -120,
  //     left: 0,
  //     behavior: 'smooth'
  // })

  element.scrollIntoView({
    behavior: 'auto',
    block: 'center',
    inline: 'start'
  }); // window.scrollBy({
  //     top: -element.getBoundingClientRect().height,
  //     left: 0,
  //     behavior: 'smooth'
  // })
}

function getHash() {
  if (window.location.hash) {
    return window.location.hash.substring(1);
  } else {
    return null;
  }
}

var modal = document.getElementById('deleteConfirmModal');
var showModal = document.getElementById('showModal');
var modalDeleteLink = document.getElementById('deleteLink');
function deletionLinkSetup() {
  provideLinksEventHandlers();
  provideDeleteLinkEventHandler();
}

function provideLinksEventHandlers() {
  var links = document.querySelectorAll('.deletor');
  var _iteratorNormalCompletion = true;
  var _didIteratorError = false;
  var _iteratorError = undefined;

  try {
    for (var _iterator = links[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
      var link = _step.value;
      link.addEventListener('click', function (e) {
        e.preventDefault();
        var categoryTitle = e.target.parentElement.dataset.title;
        var categoryId = e.target.parentElement.dataset.id;
        console.log('category title:', e.target.parentElement);
        var modalBody = document.querySelector('#deleteConfirmModal .modal-body');
        modalBody.innerHTML = 'Are you sure you want to delete "' + categoryTitle + '"';
        modalDeleteLink.href = modalDeleteLink.href + '/' + categoryId;
        showModal.click();
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

function provideDeleteLinkEventHandler() {
  modalDeleteLink.addEventListener('click', function (e) {
    e.preventDefault();
    var link = e.target.href;
    fetch(link).then(function (res) {
      return res.json();
    }).then(function (response) {
      if (!response.error) {
        if (window.location.hash) {
          window.location.replace(window.location.href.split('#')[0]);
        } else {
          location.reload();
        }
      }
    });
  });
}

/***/ })

}]);
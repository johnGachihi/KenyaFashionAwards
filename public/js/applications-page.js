(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["js/applications-page"],{

/***/ "./resources/js/components/Listeners/ShowDecisionModal.js":
/*!****************************************************************!*\
  !*** ./resources/js/components/Listeners/ShowDecisionModal.js ***!
  \****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ShowDecisionModal; });
/* harmony import */ var _ModalSetup_DecisionModalSetup__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../ModalSetup/DecisionModalSetup */ "./resources/js/components/ModalSetup/DecisionModalSetup.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }



var ShowDecisionModal =
/*#__PURE__*/
function () {
  function ShowDecisionModal(e, modal, decision) {
    _classCallCheck(this, ShowDecisionModal);

    this.modal = modal;
    this.originator = $(e.target);
    this.decision = decision;
    this.applicant = this.originator.data('applicant');
    this.applicationId = this.originator.data('applicationid');
  }

  _createClass(ShowDecisionModal, [{
    key: "do",
    value: function _do() {
      console.log("To show decision modal");
      new _ModalSetup_DecisionModalSetup__WEBPACK_IMPORTED_MODULE_0__["DecisionModalSetup"]().setUpAndShow(this.modal, {
        decision: this.decision,
        applicant: this.applicant,
        applicationId: this.applicationId
      });
    }
  }]);

  return ShowDecisionModal;
}();



/***/ }),

/***/ "./resources/js/components/Listeners/ShowEditEmailModal.js":
/*!*****************************************************************!*\
  !*** ./resources/js/components/Listeners/ShowEditEmailModal.js ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return ShowEditEmailModal; });
/* harmony import */ var _ModalSetup_EditEmailModalSetup__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./../ModalSetup/EditEmailModalSetup */ "./resources/js/components/ModalSetup/EditEmailModalSetup.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }



var ShowEditEmailModal =
/*#__PURE__*/
function () {
  function ShowEditEmailModal(e, $modal) {
    _classCallCheck(this, ShowEditEmailModal);

    this.originator = $(e.target);
    this.$modal = $modal;
    this.decision = this.originator.data('decision');
    this.applicant = this.originator.data('applicant');
    this.applicationId = this.originator.data('applicationid');
  }

  _createClass(ShowEditEmailModal, [{
    key: "do",
    value: function _do() {
      new _ModalSetup_EditEmailModalSetup__WEBPACK_IMPORTED_MODULE_0__["default"](this.$modal, {
        decision: this.decision,
        applicant: this.applicant,
        applicationId: this.applicationId
      }).setUpAndShow();
    }
  }]);

  return ShowEditEmailModal;
}();



/***/ }),

/***/ "./resources/js/components/Listeners/SubmitApplicationDecision.js":
/*!************************************************************************!*\
  !*** ./resources/js/components/Listeners/SubmitApplicationDecision.js ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return SubmitApplicationDecision; });
/* harmony import */ var _submitdecision__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../submitdecision */ "./resources/js/components/submitdecision.js");
/* harmony import */ var _conf__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./../../conf */ "./resources/js/conf.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }




var SubmitApplicationDecision =
/*#__PURE__*/
function () {
  /**
   *
   * @param {number} applicationId
   * @param {string} decision
   * @param {Object} data
   * @param {Object} callbacks
   */
  function SubmitApplicationDecision(applicationId, decision, data, callbacks) {
    _classCallCheck(this, SubmitApplicationDecision);

    this.submissionUrl = "".concat(_conf__WEBPACK_IMPORTED_MODULE_1__["HOME_URL"], "/admin/applications/decision/").concat(decision, "/").concat(applicationId);
    this.callbacks = callbacks;
    this.data = data;
  }

  _createClass(SubmitApplicationDecision, [{
    key: "do",
    value: function _do() {
      Object(_submitdecision__WEBPACK_IMPORTED_MODULE_0__["submitDecision"])(this.submissionUrl, this.data, this.callbacks);
    }
  }]);

  return SubmitApplicationDecision;
}();



/***/ }),

/***/ "./resources/js/components/ModalSetup/DecisionModalSetup.js":
/*!******************************************************************!*\
  !*** ./resources/js/components/ModalSetup/DecisionModalSetup.js ***!
  \******************************************************************/
/*! exports provided: DecisionModalSetup */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DecisionModalSetup", function() { return DecisionModalSetup; });
/* harmony import */ var _conf__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../conf */ "./resources/js/conf.js");
/* harmony import */ var _Listeners_ShowEditEmailModal__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../Listeners/ShowEditEmailModal */ "./resources/js/components/Listeners/ShowEditEmailModal.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }



var DecisionModalSetup =
/*#__PURE__*/
function () {
  function DecisionModalSetup() {
    _classCallCheck(this, DecisionModalSetup);
  }

  _createClass(DecisionModalSetup, [{
    key: "setUpAndShow",
    value: function setUpAndShow($modal, config) {
      this.$modal = $modal;
      this.modalId = $modal.attr('id');
      var url = "".concat(_conf__WEBPACK_IMPORTED_MODULE_0__["HOME_URL"], "/admin/applications/decision/").concat(config.decision, "/").concat(config.applicationId);
      var $modalDecisionBtn = $("#".concat(this.modalId, " #modal-decision-btn"));
      $("#".concat(this.modalId, " #modal-title")).text("".concat(config.decision, " Application"));
      $("#".concat(this.modalId, " #modal-body-text")).text("".concat(config.decision, " ").concat(config.applicant, " application"));
      $modalDecisionBtn.text(config.decision); // $modalDecisionBtn.data('url', url);

      $modalDecisionBtn.data('decision', config.decision);
      $modalDecisionBtn.data('applicant', config.applicant);
      $modalDecisionBtn.data('applicationid', config.applicationId);
      this.setUpEventListeners();
      $modal.modal('show');
    }
  }, {
    key: "setUpEventListeners",
    value: function setUpEventListeners() {
      var _this = this;

      var $modalDecisionBtn = $("#".concat(this.modalId, " #modal-decision-btn"));
      var $editEmailModal = $('#editEmailModal'); //Should be refactored!!!

      $modalDecisionBtn.on('click', function (e) {
        _this.$modal.modal('hide');

        new _Listeners_ShowEditEmailModal__WEBPACK_IMPORTED_MODULE_1__["default"](e, $editEmailModal)["do"]();
      });
      this.$modal.on('hide.bs.modal', function () {
        _this.tearDownEventListeners();
      });
    }
  }, {
    key: "tearDownEventListeners",
    value: function tearDownEventListeners() {
      var $modalDecisionBtn = $("#".concat(this.modalId, " #modal-decision-btn"));
      $modalDecisionBtn.off('click');
      this.$modal.off('hide.bs.modal');
    }
  }]);

  return DecisionModalSetup;
}();

/***/ }),

/***/ "./resources/js/components/ModalSetup/EditEmailModalSetup.js":
/*!*******************************************************************!*\
  !*** ./resources/js/components/ModalSetup/EditEmailModalSetup.js ***!
  \*******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return EditEmailModalSetup; });
/* harmony import */ var _applications_page__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../applications-page */ "./resources/js/components/applications-page.js");
/* harmony import */ var _ckeditor_ckeditor5_build_classic__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @ckeditor/ckeditor5-build-classic */ "./node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js");
/* harmony import */ var _ckeditor_ckeditor5_build_classic__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_ckeditor_ckeditor5_build_classic__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _Listeners_SubmitApplicationDecision__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../Listeners/SubmitApplicationDecision */ "./resources/js/components/Listeners/SubmitApplicationDecision.js");
/* harmony import */ var sanitize_html__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! sanitize-html */ "./node_modules/sanitize-html/dist/index.js");
/* harmony import */ var sanitize_html__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(sanitize_html__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _conf__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./../../conf */ "./resources/js/conf.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }







var EditEmailModalSetup =
/*#__PURE__*/
function () {
  function EditEmailModalSetup($modal, config) {
    _classCallCheck(this, EditEmailModalSetup);

    this.$modal = $modal;
    this.decision = config.decision;
    this.applicant = config.applicant;
    this.applicationId = config.applicationId;
  }

  _createClass(EditEmailModalSetup, [{
    key: "setUpAndShow",
    value: function setUpAndShow() {
      var modalId = this.$modal.attr('id');
      this.setUpCkEditor("#".concat(modalId, " #emailBodyTxtArea"));
      this.$modal.modal('show');
      this.setUpEventListeners();
    }
  }, {
    key: "setUpCkEditor",
    value: function setUpCkEditor(textAreaSelector) {
      var _this = this;

      _ckeditor_ckeditor5_build_classic__WEBPACK_IMPORTED_MODULE_1___default.a.create(document.querySelector(textAreaSelector), {
        toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
        initialData: generateDefaultEmailBody(this.decision, this.applicant)
      }).then(function (editor) {
        console.log(editor);
        _this.editor = editor; // editor.setData(generateDefaultEmailBody(this.decision, this.applicant))
      })["catch"](function (err) {
        return console.log(err);
      });
    }
  }, {
    key: "destroyCkEditor",
    value: function destroyCkEditor() {
      if (this.editor != null && typeof this.editor !== 'undefined') {
        this.editor.destroy().then(function (a) {
          return console.log('destroy().then()', a);
        })["catch"](function (err) {
          return console.log(err);
        });
      }
    }
  }, {
    key: "setUpEventListeners",
    value: function setUpEventListeners() {
      var _this2 = this;

      this.$modal.on('hidden.bs.modal', function () {
        _this2.tearDownEventListeners();

        _this2.destroyCkEditor();
      });
      $('#modal-send-email-btn').on('click', function (e) {
        var sanitized = sanitize_html__WEBPACK_IMPORTED_MODULE_3___default()(_this2.editor.getData());
        new _Listeners_SubmitApplicationDecision__WEBPACK_IMPORTED_MODULE_2__["default"](_this2.applicationId, _this2.decision, {
          emailBody: sanitized
        }, {
          beforeSend: function beforeSend() {
            var closeBtn = $("#".concat(_this2.$modal.attr('id'), " #editEmailModalCloseBtn"));
            var spinner = $("#".concat(_this2.$modal.attr('id'), " #editEmailModalSpinner"));
            closeBtn.addClass('d-none');
            spinner.removeClass('d-none');
          },
          onConnectionError: function onConnectionError(err) {
            return console.log("Error: ", err);
          },
          onSuccess: function onSuccess(data) {
            $('#decision-modal').modal('hide');
            location.reload();
          },
          onFailure: function onFailure(err) {
            return console.log("Failure: " + err);
          }
        })["do"]();
      });
    }
  }, {
    key: "tearDownEventListeners",
    value: function tearDownEventListeners() {
      $('#modal-send-email-btn').off('click');
      this.$modal.off('hide.bs.modal');
    }
  }]);

  return EditEmailModalSetup;
}();



function generateDefaultEmailBody(decision, applicant) {
  if (decision === _applications_page__WEBPACK_IMPORTED_MODULE_0__["DECISION_ACCEPT"]) {
    return "\n            <p>Dear ".concat(applicant, ",</p>\n            <br>\n            <p>We are happy to inform you that you application has been accepted</p>\n        ");
  } else {
    return "\n            <p>Dear ".concat(applicant, ",</p>\n            <br>\n            <p>We are sorry to inform you that you application has been rejected</p>\n        ");
  }
}

/***/ }),

/***/ "./resources/js/components/applications-page.js":
/*!******************************************************!*\
  !*** ./resources/js/components/applications-page.js ***!
  \******************************************************/
/*! exports provided: DECISION_ACCEPT, DECISION_REJECT */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DECISION_ACCEPT", function() { return DECISION_ACCEPT; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DECISION_REJECT", function() { return DECISION_REJECT; });
/* harmony import */ var _submitdecision__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./submitdecision */ "./resources/js/components/submitdecision.js");
/* harmony import */ var _ModalSetup_DecisionModalSetup__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ModalSetup/DecisionModalSetup */ "./resources/js/components/ModalSetup/DecisionModalSetup.js");
/* harmony import */ var _Listeners_ShowDecisionModal__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Listeners/ShowDecisionModal */ "./resources/js/components/Listeners/ShowDecisionModal.js");
/* harmony import */ var _ModalSetup_EditEmailModalSetup__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./ModalSetup/EditEmailModalSetup */ "./resources/js/components/ModalSetup/EditEmailModalSetup.js");
/* harmony import */ var _Listeners_ShowEditEmailModal__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./Listeners/ShowEditEmailModal */ "./resources/js/components/Listeners/ShowEditEmailModal.js");





var DECISION_ACCEPT = 'accept';
var DECISION_REJECT = 'reject';
var applicationsContainer = document.querySelector('#applications-container');
var $decisionModal = $('#decision-modal');
var $editEmailModal = $('#editEmailModal');
applicationsContainer.addEventListener('click', function (e) {
  var clickedItem = e.target;

  if (clickedItem.id === 'collapse-btn') {
    if (clickedItem.innerText === 'expand_more') {
      clickedItem.innerText = 'expand_less';
    } else {
      clickedItem.innerText = 'expand_more';
    }
  } else if (clickedItem.id === 'acceptButton') {
    new _Listeners_ShowDecisionModal__WEBPACK_IMPORTED_MODULE_2__["default"](e, $decisionModal, DECISION_ACCEPT)["do"]();
  } else if (clickedItem.id === 'rejectButton') {
    new _Listeners_ShowDecisionModal__WEBPACK_IMPORTED_MODULE_2__["default"](e, $decisionModal, DECISION_REJECT)["do"]();
  } // e.stopPropagation();

});
$(window).on('load', function (e) {// $('#modal-decision-btn').on('click', e => {
  //     /*submitDecision($('#modal-decision-btn').data('url'), {
  //         onConnectionError: (err) => console.log("Error: ", err),
  //         onSuccess: (data) => {
  //             $('#decision-modal').modal('hide');
  //             location.reload();
  //         },
  //         onFailure: (err) => console.log("Failure: " + err)
  //     });*/
  //     $decisionModal.modal('hide');
  //     new ShowEditEmailModal(e, $editEmailModal).do();
  //
  // });
});
/*
window.onload = () => {
    $('#modal-decision-btn').on('click', e => {
        submitDecision($('#modal-decision-btn').data('url'), {
            onConnectionError: (err) => console.log("Error: ", err),
            onSuccess: (data) => {
                $('#decision-modal').modal('hide');
                location.reload();
            },
            onFailure: (err) => console.log("Failure: " + err)
        });
    })
};
*/

/***/ }),

/***/ "./resources/js/components/submitdecision.js":
/*!***************************************************!*\
  !*** ./resources/js/components/submitdecision.js ***!
  \***************************************************/
/*! exports provided: submitDecision */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "submitDecision", function() { return submitDecision; });
function submitDecision(url, data, config) {
  return new Promise(function (resolve, reject) {
    callIfFunction(config.beforeSend)._with();

    fetch(url, {
      method: 'post',
      headers: {
        "Content-Type": "application/json",
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      body: JSON.stringify(data)
    }).then(function (response) {
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
        return callback(param = null);
      }
    };
  } else {
    throw "Invalid value for " + callback.name;
  }
} // call(callback).with(param);

/***/ }),

/***/ "./resources/js/conf.js":
/*!******************************!*\
  !*** ./resources/js/conf.js ***!
  \******************************/
/*! exports provided: HOME_URL */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "HOME_URL", function() { return HOME_URL; });
var HOME_URL = 'http://localhost/kenyafashionawards/public/index.php';

/***/ }),

/***/ 1:
/*!*********************************!*\
  !*** readable-stream (ignored) ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

/* (ignored) */

/***/ }),

/***/ 2:
/*!********************************!*\
  !*** supports-color (ignored) ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

/* (ignored) */

/***/ }),

/***/ 3:
/*!***********************!*\
  !*** chalk (ignored) ***!
  \***********************/
/*! no static exports found */
/***/ (function(module, exports) {

/* (ignored) */

/***/ }),

/***/ 4:
/*!**************************************!*\
  !*** ./terminal-highlight (ignored) ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/* (ignored) */

/***/ }),

/***/ 5:
/*!********************!*\
  !*** fs (ignored) ***!
  \********************/
/*! no static exports found */
/***/ (function(module, exports) {

/* (ignored) */

/***/ })

}]);
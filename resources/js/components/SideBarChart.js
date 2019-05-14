"use strict";
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
var BarChart_1 = require("./BarChart");
var SideBarChart = /** @class */ (function (_super) {
    __extends(SideBarChart, _super);
    function SideBarChart(awardCategoryData, canvasEl, incrementer, totalEl) {
        var _this = _super.call(this, awardCategoryData, canvasEl, incrementer) || this;
        _this.totalEl = totalEl;
        _this.totalEl.innerText = "" + _this.awardCategoryData.total;
        _this.parentStatCard = _this.canvasEl.closest('.stat-card');
        _this.parentStatCard.style.order = '1';
        console.log('Parent --->', _this.parentStatCard);
        $("#" + _this.parentStatCard.id + " .side-vote-bargraph-place-holder").css('display', 'none');
        return _this;
    }
    SideBarChart.prototype.increment = function (candidate) {
        _super.prototype.increment.call(this, candidate);
        var total = parseInt(this.totalEl.innerText);
        this.totalEl.innerText = "" + ++total;
        console.log(total);
    };
    return SideBarChart;
}(BarChart_1.default));
exports.default = SideBarChart;
//# sourceMappingURL=SideBarChart.js.map
"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var MainChartDataPointIncrementer = /** @class */ (function () {
    function MainChartDataPointIncrementer() {
    }
    MainChartDataPointIncrementer.prototype.incrementDataPoint = function (chart, dataPointIdentifier, data) {
        chart.update();
    };
    return MainChartDataPointIncrementer;
}());
exports.default = MainChartDataPointIncrementer;
//# sourceMappingURL=MainChartDataPointIncrementer.js.map
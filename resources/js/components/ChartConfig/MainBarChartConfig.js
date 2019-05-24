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
var ChartConfig_1 = require("./ChartConfig");
var MainBarChartConfig = /** @class */ (function (_super) {
    __extends(MainBarChartConfig, _super);
    function MainBarChartConfig(data, labels) {
        var _this = _super.call(this, data, labels) || this;
        _this.options.options.legend.display = true;
        _this.options.options.scales.yAxes[0].gridLines.display = true;
        _this.options.options.scales.yAxes[0].gridLines.drawBorder = true;
        _this.options.options.scales.yAxes[0].ticks.display = true;
        _this.options.options.scales.xAxes[0].gridLines.display = true;
        _this.options.options.scales.xAxes[0].ticks.display = true;
        _this.options.options.aspectRatio = 1;
        return _this;
    }
    return MainBarChartConfig;
}(ChartConfig_1.default));
exports.default = MainBarChartConfig;
//# sourceMappingURL=MainBarChartConfig.js.map
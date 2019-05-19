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
var PieChartConfig = /** @class */ (function (_super) {
    __extends(PieChartConfig, _super);
    function PieChartConfig(data, labels) {
        var _this = _super.call(this, data, labels) || this;
        _this.options.type = 'pie';
        _this.options.options.legend.display = true;
        return _this;
    }
    return PieChartConfig;
}(ChartConfig_1.default));
exports.default = PieChartConfig;
//# sourceMappingURL=PieChartConfig.js.map
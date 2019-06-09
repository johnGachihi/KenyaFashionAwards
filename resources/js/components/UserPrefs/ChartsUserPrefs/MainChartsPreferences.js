"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var MainChartsPreferences = /** @class */ (function () {
    function MainChartsPreferences(chartsPreferences) {
        this.chartsPreferences = chartsPreferences;
    }
    MainChartsPreferences.prototype.serialize = function (prefs) {
        var serialized = '';
        prefs.map(function (props) {
            serialized += props.chartType + '|' + props.x + '|' + props.y;
        });
    };
    return MainChartsPreferences;
}());
exports.default = MainChartsPreferences;
//# sourceMappingURL=MainChartsPreferences.js.map
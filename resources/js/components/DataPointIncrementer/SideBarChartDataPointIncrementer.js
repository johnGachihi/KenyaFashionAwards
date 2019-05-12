"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var SideBarChartDataPointIncrementer = /** @class */ (function () {
    function SideBarChartDataPointIncrementer() {
    }
    SideBarChartDataPointIncrementer.prototype.incrementDataPoint = function (chart, dataPointIdentifier, data) {
        console.log('SideBarChartDataPointIncrementer.incrementDataPoint');
        var index = data.candidate_ids.indexOf(dataPointIdentifier.id);
        if (index === -1) {
            chart.data.datasets[0].data.push(1);
            chart.data.labels.push(dataPointIdentifier.name);
            data.candidate_ids.push(dataPointIdentifier.id);
        }
        chart.data.datasets[0].data[index] += 1;
        chart.update();
    };
    return SideBarChartDataPointIncrementer;
}());
exports.default = SideBarChartDataPointIncrementer;
//# sourceMappingURL=SideBarChartDataPointIncrementer.js.map
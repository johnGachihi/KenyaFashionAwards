"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
// import $ from 'jquery';
var SideBarChartDataPointIncrementer = /** @class */ (function () {
    function SideBarChartDataPointIncrementer() {
    }
    /**
     * Updates the chart's votes data, total votes and candidate_ids and candidates if necessary
     */
    SideBarChartDataPointIncrementer.prototype.incrementDataPoint = function (chart, dataPoint, sideChartData) {
        console.log('SideBarChartDataPointIncrementer.incrementDataPoint');
        var index = sideChartData.candidate_ids.indexOf(dataPoint.id);
        if (index === -1) {
            // chart.data.datasets[0].data.push(1);
            // chart.data.labels.push(dataPoint.name);
            // data.candidate_ids.push(dataPoint.id);
            sideChartData.candidate_ids.push(dataPoint.id);
            sideChartData.candidates.push(dataPoint.name);
            sideChartData.votes.push(1);
        }
        else {
            // chart.data.datasets[0].data[index] += 1;
            sideChartData.votes[index] += 1;
        }
        sideChartData.total += 1;
        chart.update();
    };
    return SideBarChartDataPointIncrementer;
}());
exports.default = SideBarChartDataPointIncrementer;
//# sourceMappingURL=SideBarChartDataPointIncrementer.js.map
"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var chartjsConfig_1 = require("../components/chartjsConfig");
var chart_js_1 = require("chart.js");
var BarChart = /** @class */ (function () {
    function BarChart(awardCategoryData, canvasEl, incrementer) {
        this.incrementer = incrementer;
        this.awardCategoryData = awardCategoryData;
        this.canvasEl = canvasEl;
        var ctx = this.canvasEl.getContext('2d');
        this.chart = new chart_js_1.Chart(ctx, chartjsConfig_1.getChartjsConfig(this.awardCategoryData.votes, this.awardCategoryData.candidates));
        console.log(this.chart);
    }
    BarChart.prototype.plusOne = function (candidate) {
        var index = this.awardCategoryData.candidate_ids.indexOf(candidate.id);
        if (index === -1) {
            this.chart.data.datasets[0].data.push(1);
            this.chart.data.labels.push(candidate.name);
            this.awardCategoryData.candidate_ids.push(candidate.id);
        }
        this.chart.data.datasets[0].data[index] += 1;
        this.chart.update();
    };
    BarChart.prototype.increment = function (candidate) {
        this.incrementer.incrementDataPoint(this.chart, candidate, this.awardCategoryData);
    };
    return BarChart;
}());
exports.default = BarChart;
//# sourceMappingURL=BarChart.js.map
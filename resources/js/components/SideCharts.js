"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var SideBarChartDataPointIncrementer_1 = require("./DataPointIncrementer/SideBarChartDataPointIncrementer");
var SideBarChart_1 = require("./SideBarChart");
var SideCharts = /** @class */ (function () {
    function SideCharts(chartsData) {
        this.chartsData = chartsData;
        this.charts = new Map();
        for (var _i = 0, _a = Object.entries(this.chartsData); _i < _a.length; _i++) {
            var _b = _a[_i], title = _b[0], chartData = _b[1];
            this.setupChart(chartData);
        }
        console.log(this.charts);
    }
    SideCharts.prototype.plusOne = function (category_id, candidate) {
        var chart = this.charts.get(category_id);
        if (typeof chart !== "undefined") {
            chart.increment(candidate);
        }
        else {
            var newChart = this.setupChart({
                category_id: category_id,
                candidate_ids: [candidate.id],
                candidates: [candidate.name],
                votes: [1],
                total: 1
            });
            this.charts.set(category_id, newChart);
        }
    };
    SideCharts.prototype.setupChart = function (chartData) {
        console.log(chartData);
        var canvasEl = document.querySelector("#sideChart" + chartData.category_id);
        // console.log(`#sideChart${chartData.category_id}`);
        // console.log(`#totalVotes${chartData.category_id}`);
        var totalEl = document.querySelector("#totalVotes" + chartData.category_id);
        var chart = new SideBarChart_1.default(chartData, canvasEl, new SideBarChartDataPointIncrementer_1.default(), totalEl);
        this.charts.set(chartData.category_id, chart);
        return chart;
    };
    SideCharts.prototype.getSideChart = function (index) {
        return this.charts.get(index);
    };
    return SideCharts;
}());
exports.default = SideCharts;
//# sourceMappingURL=SideCharts.js.map
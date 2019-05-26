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
        var totalEl = document.querySelector("#totalVotes" + chartData.category_id);
        var chart = new SideBarChart_1.default(chartData, canvasEl, new SideBarChartDataPointIncrementer_1.default(), totalEl);
        this.charts.set(chartData.category_id, chart);
        return chart;
    };
    SideCharts.prototype.select = function (chartKey) {
        if (this.selected !== null && typeof (this.selected) !== "undefined")
            this.selected.deselect();
        this.charts.forEach(function (value, key) {
            console.log(key, ' - ', value);
        });
        this.selected = this.charts.get(chartKey);
        console.log("selected sidechart", this.charts.get(chartKey));
        this.selected.select();
    };
    SideCharts.prototype.getSideChart = function (index) {
        return this.charts.get(index);
    };
    SideCharts.prototype.getFirstChartIndex = function () {
        var index = this.charts.keys().next().value;
        console.log(index);
        this.charts.forEach(function (value, key) {
            if (index > key) {
                index = key;
            }
        });
        return index;
    };
    return SideCharts;
}());
exports.default = SideCharts;
//# sourceMappingURL=SideCharts.js.map
"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var chart_js_1 = require("chart.js");
var ChartHolder_1 = require("./ChartHolders/ChartHolder");
var MainBarChartConfig_1 = require("./ChartConfig/MainBarChartConfig");
require("./../../../node_modules/gridstack/dist/gridstack.css");
var ChartConstants_1 = require("./ChartConfig/ChartConstants");
var PieChartConfig_1 = require("./ChartConfig/PieChartConfig");
var MainCharts = /** @class */ (function () {
    function MainCharts() {
        this.charts = [];
        this.chartsParent = $('.grid-stack');
    }
    MainCharts.prototype.addChart = function (data, chartType) {
        var chartHolder = new ChartHolder_1.default(this.chartsParent, chartType);
        var _a = chartHolder.renderChartContainer(), canvas = _a.canvas, holderEl = _a.holderEl;
        // let canvas = document.querySelector(`#${canvasId}`);
        console.log('canvas ----->', canvas);
        var ctx = canvas.getContext('2d');
        var chart = new chart_js_1.Chart(ctx, this.getChartConfig(chartType, data).getConfig());
        console.log("chart ----->", chart);
        this.charts.push(chart);
        var gridstack = this.chartsParent.data('gridstack');
        gridstack.makeWidget(holderEl);
        return holderEl;
    };
    MainCharts.prototype.getChartConfig = function (chartType, data) {
        if (chartType === ChartConstants_1.CHART_BAR) {
            return new MainBarChartConfig_1.default(data.data, data.labels);
        }
        else if (chartType === ChartConstants_1.CHART_PIE) {
            return new PieChartConfig_1.default(data.data, data.labels);
        }
    };
    return MainCharts;
}());
exports.default = MainCharts;
//# sourceMappingURL=MainCharts.js.map
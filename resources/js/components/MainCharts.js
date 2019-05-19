"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var chart_js_1 = require("chart.js");
var ChartHolder_1 = require("./ChartHolders/ChartHolder");
var MainBarChartConfig_1 = require("./ChartConfig/MainBarChartConfig");
require("./../../../node_modules/gridstack/dist/gridstack.css");
var ChartConstants_1 = require("./ChartConfig/ChartConstants");
var PieChartConfig_1 = require("./ChartConfig/PieChartConfig");
var MainCharts = /** @class */ (function () {
    function MainCharts(userPrefCharts) {
        this.userPrefCharts = userPrefCharts;
        this.charts = [];
        this.chartsParent = $('.grid-stack');
        this._charts = new Map();
    }
    MainCharts.prototype.makeCharts = function (data) {
        //First remove all current widgets
        this.chartsParent.data('gridstack').removeAll();
        for (var _i = 0, _a = this.userPrefCharts; _i < _a.length; _i++) {
            var c = _a[_i];
            var _b = new ChartHolder_1.default(this.chartsParent, c).renderChartContainer(), canvas = _b.canvas, holderEl = _b.holderEl;
            var chart = new chart_js_1.Chart(canvas.getContext('2d'), this.getChartConfig(c, data));
            this._charts.set(c, chart);
            this.chartsParent.data('gridstack').makeWidget(holderEl);
        }
    };
    /*populateCharts(data: Data) {
        this._charts.forEach(((chart, key) => {
            console.log("------>", chart.data);
            chart.data.datasets[0].data = data.data;
            chart.data.datasets[0].labels = data.labels;
        }))
    }*/
    MainCharts.prototype.addChart = function (data, chartType) {
        var chartHolder = new ChartHolder_1.default(this.chartsParent, chartType);
        var _a = chartHolder.renderChartContainer(), canvas = _a.canvas, holderEl = _a.holderEl;
        // console.log('canvas ----->', canvas);
        var ctx = canvas.getContext('2d');
        var chart = new chart_js_1.Chart(ctx, this.getChartConfig(chartType, data).getConfig());
        console.log("chart ----->", chart);
        //THIS WILL CHANGE TO this._charts.set... WHEN IMPLEMENTING ADDITION OF CHARTS
        this.charts.push(chart);
        var gridstack = this.chartsParent.data('gridstack');
        gridstack.makeWidget(holderEl);
        return holderEl;
    };
    MainCharts.prototype.update = function () {
        this._charts.forEach(function (chart) {
            chart.update();
        });
    };
    MainCharts.prototype.getCharts = function () {
        return this.charts;
    };
    MainCharts.prototype.getChartConfig = function (chartType, data) {
        var config;
        if (chartType === ChartConstants_1.CHART_BAR) {
            config = new MainBarChartConfig_1.default(data.data, data.labels);
        }
        else if (chartType === ChartConstants_1.CHART_PIE) {
            config = new PieChartConfig_1.default(data.data, data.labels);
        }
        return config.getConfig();
    };
    return MainCharts;
}());
exports.default = MainCharts;
//# sourceMappingURL=MainCharts.js.map
"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var ChartHolder = /** @class */ (function () {
    function ChartHolder(parent, chartType) {
        this.parentEl = parent;
        this.canvasId = "mainChart-canvas_" + ChartHolder.counter;
        this.chartHolderElementId = "chartHolder_" + ChartHolder.counter++;
        this.domElementString = "\n            <div id=\"" + this.chartHolderElementId + "\" class='grid-stack-item mdc-card mdc-card--outlined mdc-elevation--z1 mx-3'\n                data-gs-x=\"0\" data-gs-y=\"0\" data-gs-width=\"4\" data-gs-height=\"2\">\n                <div class=\"grid-stack-item-content w-100 h-100\">\n                    <canvas id=\"" + this.canvasId + "\" class=\"main-chart\" data-charttype=\"" + chartType + "\"></canvas>\n                </div>\n            </div>\n        ";
        this.chartContainerDomString = "\n            <div id=\"" + this.chartHolderElementId + "\" class='mdc-card mdc-card--outlined mdc-elevation--z1 mx-3'>\n                <div class=\"grid-stack-item-content w-100 h-100\">\n                </div>\n            </div>\n        ";
        this.canvasElDomString = "\n            <canvas id=\"" + this.canvasId + "\" class=\"main-chart\" data-charttype=\"" + chartType + "\"></canvas>\n        ";
    }
    ChartHolder.prototype.renderChartContainer = function () {
        var parser = new DOMParser();
        var el = parser.parseFromString(this.domElementString, 'text/html').body.firstChild;
        this.parentEl.append(el);
        var canvas = document.getElementById(this.canvasId);
        var holderEl = document.getElementById(this.chartHolderElementId);
        return { canvas: canvas, holderEl: holderEl };
    };
    ChartHolder.prototype.inflateChartContainer = function () {
        var container = new DOMParser().parseFromString(this.chartContainerDomString, 'text/html').body.firstElementChild;
        var canvas = new DOMParser().parseFromString(this.canvasElDomString, 'text/html').body.firstElementChild;
        container.getElementsByClassName('grid-stack-item-content')
            .item(0).append(canvas);
        return { canvas: canvas, holderEl: container };
    };
    ChartHolder.counter = 0;
    return ChartHolder;
}());
exports.default = ChartHolder;
//# sourceMappingURL=ChartHolder.js.map
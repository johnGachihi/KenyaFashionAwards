"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var ChartConfig = /** @class */ (function () {
    function ChartConfig(data, labels) {
        this.options = {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                        data: data,
                        /*backgroundColor: [
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,1)'
                        ],*/
                        borderColor: [
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,1)',
                            'rgba(0,0,0,1)'
                        ],
                        borderWidth: 1
                    }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                            gridLines: {
                                display: true,
                                drawBorder: false
                            },
                            ticks: {
                                beginAtZero: true,
                                display: false
                            }
                        }],
                    xAxes: [{
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                // beginAtZero: true,
                                display: false
                            },
                        }]
                }
            }
        };
    }
    ChartConfig.prototype.getConfig = function () {
        return this.options;
    };
    return ChartConfig;
}());
exports.default = ChartConfig;
//# sourceMappingURL=ChartConfig.js.map
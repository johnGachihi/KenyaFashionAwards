import {Chart} from 'chart.js';
import ChartHolder from "./ChartHolders/ChartHolder";
import MainBarChartConfig from "./ChartConfig/MainBarChartConfig";
import './../../../node_modules/gridstack/dist/gridstack.css';
import gridstack from './../../../node_modules/gridstack/dist/gridstack.all';
import {CHART_BAR, CHART_PIE} from "./ChartConfig/ChartConstants";
import PieChartConfig from "./ChartConfig/PieChartConfig";

export default class MainCharts {

    private charts: Chart[];
    private chartsParent;

    constructor() {
        this.charts = [];
        this.chartsParent = $('.grid-stack');
    }

    addChart(data: {data: number[], labels: string[]}, chartType: string) {
        const chartHolder = new ChartHolder(this.chartsParent, chartType);
        let {canvas, holderEl} = chartHolder.renderChartContainer();

        // let canvas = document.querySelector(`#${canvasId}`);
        console.log('canvas ----->', canvas);
        const ctx = (<HTMLCanvasElement>canvas).getContext('2d');
        const chart = new Chart(ctx, this.getChartConfig(chartType, data).getConfig());
        console.log("chart ----->", chart);
        this.charts.push(chart);

        let gridstack = this.chartsParent.data('gridstack');
        gridstack.makeWidget(holderEl);

        return holderEl;
    }

    private getChartConfig(chartType: string, data: {data: number[], labels: string[]}) {
        if(chartType === CHART_BAR) {
            return new MainBarChartConfig(data.data, data.labels);
        } else if(chartType === CHART_PIE) {
            return new PieChartConfig(data.data, data.labels);
        }
    }
}
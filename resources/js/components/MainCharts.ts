import {Chart} from 'chart.js';
import ChartHolder from "./ChartHolders/ChartHolder";
import MainBarChartConfig from "./ChartConfig/MainBarChartConfig";
import './../../../node_modules/gridstack/dist/gridstack.css';
import gridstack from './../../../node_modules/gridstack/dist/gridstack.all';
import {CHART_BAR, CHART_PIE} from "./ChartConfig/ChartConstants";
import PieChartConfig from "./ChartConfig/PieChartConfig";
import ChartProperties from "./Interfaces/ChartProperties";

export default class MainCharts {
    private userPrefCharts: ChartProperties[];
    private _charts: Map<string, Chart>;

    private charts: Chart[];
    private chartsParent;

    constructor(userPrefCharts: ChartProperties[]) {
        this.userPrefCharts = userPrefCharts;

        this.charts = [];
        this.chartsParent = $('.grid-stack');

        this._charts = new Map<string, Chart>();
    }

    makeCharts(data: Data) {
        //First remove all current widgets
        this.chartsParent.data('gridstack').removeAll();

        for(let c of this.userPrefCharts) {
            this.addChart(data, c);
        }
    }

    /*addChart(data: Data, chartType: string) {
        let {canvas, holderEl} = new ChartHolder(
            this.chartsParent, chartType).renderChartContainer();

        console.log("this.getChartConfig", this.getChartConfig(chartType, data));
        const chart = new Chart(
            (<HTMLCanvasElement>canvas).getContext('2d'),
            this.getChartConfig(chartType, data)
        );
        console.log("chart ----->", chart);

        //THIS WILL CHANGE TO this._charts.set... WHEN IMPLEMENTING ADDITION OF CHARTS
        // this.charts.push(chart);

        this._charts.set(chartType, chart);

        let gridstack = this.chartsParent.data('gridstack');
        gridstack.makeWidget(holderEl);

        return holderEl;
    }*/

    addChart(data: Data, chartProps: ChartProperties) {
        let {canvas, holderEl} = new ChartHolder(
            this.chartsParent, chartProps.chartType).inflateChartContainer();

        const chart = new Chart(
            (<HTMLCanvasElement>canvas).getContext('2d'),
            this.getChartConfig(chartProps.chartType, data)
        );

        this._charts.set(chartProps.chartType, chart);

        let gridStack = this.chartsParent.data('gridstack');
        gridStack.addWidget(
            holderEl,
            chartProps.x, chartProps.y,
            chartProps.width, chartProps.height
        );

        // return holderEl;
    }

    update() {
        this._charts.forEach(chart => {
            chart.update();
        })
    }

    getCharts() {
        return this.charts;
    }

    private getChartConfig(chartType: string, data: {data: number[], labels: string[]}) {
        let config;
        if(chartType === CHART_BAR) {
            config = new MainBarChartConfig(data.data, data.labels);
        } else if(chartType === CHART_PIE) {
            config =  new PieChartConfig(data.data, data.labels);
        }

        return config.getConfig();
    }
}

interface Data {
    data: number[]
    labels: string[]
}
import {Chart} from 'chart.js';
import ChartHolder from "./ChartHolders/ChartHolder";
import MainBarChartConfig from "./ChartConfig/MainBarChartConfig";
import './../../../node_modules/gridstack/dist/gridstack.css';
import gridstack from './../../../node_modules/gridstack/dist/gridstack.all';
import {CHART_BAR, CHART_PIE} from "./ChartConfig/ChartConstants";
import PieChartConfig from "./ChartConfig/PieChartConfig";

export default class MainCharts {
    private userPrefCharts: string[];
    private _charts: Map<string, Chart>;

    private charts: Chart[];
    private chartsParent;

    constructor(userPrefCharts: string[]) {
        this.userPrefCharts = userPrefCharts;

        this.charts = [];
        this.chartsParent = $('.grid-stack');

        this._charts = new Map<string, Chart>();
    }

    makeCharts(data: Data) {
        //First remove all current widgets
        this.chartsParent.data('gridstack').removeAll();

        for(let c of this.userPrefCharts) {
            let {canvas, holderEl} = new ChartHolder(
                this.chartsParent, c).renderChartContainer();

            const chart = new Chart(
                (<HTMLCanvasElement>canvas).getContext('2d'),
                this.getChartConfig(c, data)
            );

            this._charts.set(c, chart);

            this.chartsParent.data('gridstack').makeWidget(holderEl);
        }
    }

    /*populateCharts(data: Data) {
        this._charts.forEach(((chart, key) => {
            console.log("------>", chart.data);
            chart.data.datasets[0].data = data.data;
            chart.data.datasets[0].labels = data.labels;
        }))
    }*/

    addChart(data: {data: number[], labels: string[]}, chartType: string) {
        const chartHolder = new ChartHolder(this.chartsParent, chartType);
        let {canvas, holderEl} = chartHolder.renderChartContainer();

        // console.log('canvas ----->', canvas);
        const ctx = (<HTMLCanvasElement>canvas).getContext('2d');
        const chart = new Chart(ctx, this.getChartConfig(chartType, data).getConfig());
        console.log("chart ----->", chart);

        //THIS WILL CHANGE TO this._charts.set... WHEN IMPLEMENTING ADDITION OF CHARTS
        this.charts.push(chart);


        let gridstack = this.chartsParent.data('gridstack');
        gridstack.makeWidget(holderEl);

        return holderEl;
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
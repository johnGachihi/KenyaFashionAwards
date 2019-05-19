import SideBarChartDataPointIncrementor from './DataPointIncrementer/SideBarChartDataPointIncrementer';
import ChartData from "./Interfaces/ChartData";
import SideBarChart from "./SideBarChart";

export default class SideCharts {
    chartsData: ChartData;
    charts : Map<number, any>;

    constructor(chartsData) {
        this.chartsData = chartsData;
        this.charts = new Map();

        for(const [title, chartData] of Object.entries(this.chartsData)) {
            this.setupChart(chartData);
        }

        console.log(this.charts);
    }

    plusOne(category_id, candidate) {
        let chart = this.charts.get(category_id);
        if(typeof chart !== "undefined") {
            chart.increment(candidate);
        } else {
            let newChart = this.setupChart({
                category_id: category_id,
                candidate_ids: [candidate.id],
                candidates: [candidate.name],
                votes: [1],
                total: 1
            })

            this.charts.set(category_id, newChart);
        }
    }

    setupChart(chartData: ChartData) {
        console.log(chartData);
        const canvasEl = document.querySelector(`#sideChart${chartData.category_id}`);
        const totalEl = document.querySelector(`#totalVotes${chartData.category_id}`);
        let chart = new SideBarChart(chartData, <HTMLElement>canvasEl, new SideBarChartDataPointIncrementor(), <HTMLElement>totalEl);
        this.charts.set(chartData.category_id, chart);

        return chart;
    }

    getSideChart(index) {
        return this.charts.get(index);
    }
}


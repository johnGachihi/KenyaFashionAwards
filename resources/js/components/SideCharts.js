import BarChart from './BarChart';

export default class SideCharts {

    constructor(chartsData) {
        this.chartsData = chartsData;
        this.charts = new Map();

        for(const [title, chartData] of Object.entries(this.chartsData)) {
            const canvasEl = document.querySelector(`#sideChart${chartData.category_id}`);
            let chart = new BarChart(chartData, canvasEl);

            this.charts.set(chartData.category_id, chart);
        }

        console.log(this.charts);
    }

    plusOne(category_id, candidate) {
        let chart = this.charts.get(category_id);
        chart.plusOne(candidate);
    }

    // addChart()
}


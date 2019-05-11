import {getChartjsConfig} from '../components/chartjsConfig'
import Chart from 'chart.js'

export default class BarChart {
    constructor(awardCategoryData, canvasEl) {
        this.awardCategoryData = awardCategoryData;
        this.canvasEl = canvasEl;

        const ctx = this.canvasEl.getContext('2d');
        this.chart = new Chart(ctx, getChartjsConfig(
            this.awardCategoryData.votes,
            this.awardCategoryData.candidates
        ));
        console.log(this.chart);
    }

    plusOne(candidate) {
        const index = this.awardCategoryData.candidate_ids.indexOf(candidate.id);
        if(index === -1) {
            this.chart.data.datasets[0].data.push(1);
            this.chart.data.labels.push(candidate.name);
            this.awardCategoryData.candidate_ids.push(candidate.id);
        }
        this.chart.data.datasets[0].data[index] += 1;
        this.chart.update();
    }

}

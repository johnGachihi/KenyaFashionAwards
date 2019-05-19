import {getChartjsConfig} from '../components/chartjsConfig'
import {getSideBarChartConfig} from '../components/chartjsConfig'
import {Chart} from 'chart.js'
import SideBarChartDataPointIncrementer from "./DataPointIncrementer/SideBarChartDataPointIncrementer";
import DataPointIncrementer from "./DataPointIncrementer/DataPointIncrementer";
import Candidate from "./Interfaces/Candidate";
import ChartData from "./Interfaces/ChartData";
import SideBarChartConfig from "./ChartConfig/SideBarChartConfig";

export default class BarChart {
    awardCategoryData: ChartData;
    canvasEl: HTMLCanvasElement;
    chart: Chart;

    incrementer: DataPointIncrementer;

    constructor(awardCategoryData: ChartData, canvasEl, incrementer: DataPointIncrementer) {
        this.incrementer = incrementer;

        this.awardCategoryData = awardCategoryData;
        this.canvasEl = canvasEl;

        const ctx = this.canvasEl.getContext('2d');
        this.chart = new Chart(ctx, new SideBarChartConfig(
            this.awardCategoryData.votes,
            this.awardCategoryData.candidates
        ).getConfig());

        // console.log(this.chart);
    }

    getChartData() {
        return this.awardCategoryData;
    }

    // plusOne(candidate : Candidate) {
    //     const index = this.awardCategoryData.candidate_ids.indexOf(candidate.id);
    //     if(index === -1) {
    //         this.chart.data.datasets[0].data.push(1);
    //         this.chart.data.labels.push(candidate.name);
    //         this.awardCategoryData.candidate_ids.push(candidate.id);
    //     }
    //     this.chart.data.datasets[0].data[index] += 1;
    //     this.chart.update();
    // }

    increment(candidate : Candidate) : void {
        this.incrementer.incrementDataPoint(this.chart, candidate, this.awardCategoryData);
        // console.log(this.awardCategoryData);
    }

    destroy() {
        this.chart.destroy();
    }

}

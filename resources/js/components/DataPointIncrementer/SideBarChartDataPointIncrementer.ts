import DataPointIncrementer from "./DataPointIncrementer";
import Candidate from "../Interfaces/Candidate";
import $ from 'jquery';

export default class SideBarChartDataPointIncrementer implements DataPointIncrementer{
    /**
     * Updates the chart's votes data, total votes and candidate_ids and candidates if necessary
     */

    incrementDataPoint(chart, dataPoint: Candidate, sideChartData): void {
        console.log('SideBarChartDataPointIncrementer.incrementDataPoint');

        const index = sideChartData.candidate_ids.indexOf(dataPoint.id);
        if(index === -1) {
            // chart.data.datasets[0].data.push(1);
            // chart.data.labels.push(dataPoint.name);
            // data.candidate_ids.push(dataPoint.id);

            sideChartData.candidate_ids.push(dataPoint.id);
            sideChartData.candidates.push(dataPoint.name);
            sideChartData.votes.push(1);

        } else {
            // chart.data.datasets[0].data[index] += 1;
            sideChartData.votes[index] += 1;
        }
        sideChartData.total += 1;

        chart.update();

    }


}
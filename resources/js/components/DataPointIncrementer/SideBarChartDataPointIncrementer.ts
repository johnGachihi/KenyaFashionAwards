import DataPointIncrementer from "./DataPointIncrementer";
import Candidate from "../Interfaces/Candidate";
import $ from 'jquery';

export default class SideBarChartDataPointIncrementer implements DataPointIncrementer{

    incrementDataPoint(chart, dataPointIdentifier: Candidate, data): void {
        console.log('SideBarChartDataPointIncrementer.incrementDataPoint');

        const index = data.candidate_ids.indexOf(dataPointIdentifier.id);
        if(index === -1) {
            chart.data.datasets[0].data.push(1);
            chart.data.labels.push(dataPointIdentifier.name);
            data.candidate_ids.push(dataPointIdentifier.id);
        }
        chart.data.datasets[0].data[index] += 1;
        chart.update();

    }


}
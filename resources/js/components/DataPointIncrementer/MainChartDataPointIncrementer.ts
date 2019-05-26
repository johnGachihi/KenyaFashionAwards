import DataPointIncrementer from "./DataPointIncrementer";

export default class MainChartDataPointIncrementer implements DataPointIncrementer {
    incrementDataPoint(chart, dataPointIdentifier: any, data: any): void {
        chart.update();
    }

}
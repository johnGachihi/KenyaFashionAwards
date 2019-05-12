import Chart from 'chart.js';

export default interface DataPointIncrementer {
    incrementDataPoint(chart : Chart, dataPointIdentifier : any, data: any ) : void;
}
import ChartConfig from "./ChartConfig";

export default class MainBarChartConfig extends ChartConfig {
    constructor(data: number[], labels: string[]){
        super(data, labels);

        this.options.options.legend.display = true;
        this.options.options.scales.yAxes[0].gridLines.display = true;
        this.options.options.scales.yAxes[0].gridLines.drawBorder = true;
        this.options.options.scales.yAxes[0].ticks.display = true;
        this.options.options.scales.xAxes[0].gridLines.display = true;
        this.options.options.scales.xAxes[0].ticks.display = true;
        this.options.options.aspectRatio = 1;
    }

}
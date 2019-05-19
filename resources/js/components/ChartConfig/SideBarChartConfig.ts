import ChartConfigInt from "./ChartConfigInt";
import ChartConfig from "./ChartConfig";

export default class SideBarChartConfig extends ChartConfig {
    constructor(data: number[], labels: string[]){
        super(data, labels);

        this.options.options.scales.yAxes[0].gridLines.display = false;
        this.options.options.maintainAspectRatio = false;
    }

}
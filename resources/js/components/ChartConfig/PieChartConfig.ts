import ChartConfig from "./ChartConfig";

export default class PieChartConfig extends ChartConfig {
    constructor(data: number[], labels: string[]) {
        super(data, labels);

        this.options.type = 'pie'
        this.options.options.legend.display = true;
    }
}
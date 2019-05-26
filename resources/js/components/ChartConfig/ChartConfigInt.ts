import ChartConfigOptions from "./ChartConfigOptions";

export default interface ChartConfigInt {
    getConfig(data: number[], labels: string[]): void
}
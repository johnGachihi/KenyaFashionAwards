export default interface ChartConfigOptions {
    type: string,
    data: Data,
    options?: Options
}

interface Data {
    labels?: string[],
    datasets: DataSet[]
}

interface DataSet {
    data?: number[],
    backgroundColor: string[],
    borderColor: string[],
    borderWidth: 1
}

interface Options {
    legend?: {display: boolean},
    title?: {display?: boolean, text?: string},
    scales?: Scales
}

interface Scales {
    yAxes: Axis[],
    xAxes: Axis[]
}

interface Axis {
    gridLines?: {display?: boolean, drawBorder?: boolean},
    ticks?: {beginAtZero?: boolean, display?: boolean}
}
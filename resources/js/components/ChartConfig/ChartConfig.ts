import ChartConfigOptions from "./ChartConfigOptions";

export default class ChartConfig {
    options: ChartConfigOptions

    constructor(data: number[], labels: string[]) {
        this.options ={
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    data: data,
                    backgroundColor: [
                        'rgba(0,0,0,1)',
                        'rgba(0,0,0,1)',
                        'rgba(0,0,0,1)',
                        'rgba(0,0,0,1)',
                        'rgba(0,0,0,1)',
                        'rgba(0,0,0,1)'
                    ],
                    borderColor: [
                        'rgba(0,0,0,1)',
                        'rgba(0,0,0,1)',
                        'rgba(0,0,0,1)',
                        'rgba(0,0,0,1)',
                        'rgba(0,0,0,1)',
                        'rgba(0,0,0,1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: true,
                            drawBorder: false
                        },
                        ticks: {
                            beginAtZero: true,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            // beginAtZero: true,
                            display: false
                        },
                        // minBarLength: 20
                    }]
                }
            }
        };
    }

    getConfig(): ChartConfigOptions {
        return this.options;
    }
}
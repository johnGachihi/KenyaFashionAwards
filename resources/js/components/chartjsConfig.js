const chartjsConfig = {
    type: 'bar',
    maintainAspectRatio: true,
    data: {
        labels: ['John Gachihi Waithaka', 'Ephestus Njoroge', 'Talia Malindi', 'Lest Otieno', 'Beuler Kirathimo', 'Nathan Chai'],
        datasets: [{
            data: [12, 19, 3, 5, 2, 3],
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
        title: {
            // display: true,
            text: 'Male Fashion Model'
        },
        scales: {
            yAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    // beginAtZero: true
                    display: false
                }
            }],
            xAxes: [{
                gridLines: {
                    display: false
                },
                ticks: {
                    // beginAtZero: true
                    display: false
                }
            }]
        }
    }
};

export default chartjsConfig;

/**
 *
 * @param {Array} data
 * @param {Array} labels A label for each data item in the data array
 */
export function getChartjsConfig(data, labels) {
    return {
        type: 'bar',
            maintainAspectRatio: true,
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
            title: {
                // display: true,
                text: 'Male Fashion Model'
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: false,
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
                    minBarLength: 20
                }]
            }
        }
    };
}

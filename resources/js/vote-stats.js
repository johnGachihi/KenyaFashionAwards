import Chart from 'chart.js';

import 'simplebar';
import 'simplebar/dist/simplebar.css';

const chartConfig = {
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

const chartConfig1 = {
    type: 'bar',
    maintainAspectRatio: true,
    data: {
        labels: ['John Gachihi Waithaka', 'Ephestus Njoroge', 'Talia Malindi', 'Lest Otieno', 'Beuler Kirathimo', 'Nathan Chai'],
        datasets: [{
            data: [120, 19, 33, 5, 200, 43],
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
                    display: false
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

const ctx = document.getElementById('myChart').getContext('2d');
let myChart = new Chart(ctx, chartConfig);

const ctx1 = document.getElementById('myChart1').getContext('2d');
let myChart1 = new Chart(ctx1, chartConfig1);

const ctx2 = document.getElementById('myChart2').getContext('2d');
let myChart2 = new Chart(ctx2, chartConfig);

const ctx3 = document.getElementById('myChart3').getContext('2d');
let myChart3 = new Chart(ctx3, chartConfig);

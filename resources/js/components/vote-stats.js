import 'simplebar';
import 'simplebar/dist/simplebar.css';
import SideCharts from "./SideCharts";

import BarChart from "./BarChart";
import MainChartDataPointIncrementer from "./DataPointIncrementer/MainChartDataPointIncrementer";
import ChartHolder from "./ChartHolders/ChartHolder";
import MainCharts from "./MainCharts";
// import gridstack from 'gridstack';

import './../../../node_modules/gridstack/dist/gridstack.css';
import gridstack from './../../../node_modules/gridstack/dist/gridstack.all';

$(window).on('load', () => {
    console.log($('.grid-stack'));
    $('.grid-stack').gridstack();
    let gridstack = $('.grid-stack').data('gridstack');
    // gridstack.enableMove(true, false);
    // gridstack.movable('.grid-stack-item', true);
    console.log('gridstack ---->', gridstack);

    let sideCharts = new SideCharts(votesPerCategory);

    Echo.channel('the-polls')
        .listen('VoteCast', e => {
            console.log(e);
            sideCharts.plusOne(e.vote.award_category_id, e.vote.candidate);
    });


    $('.stat-card').on('click', e => {
        let categoryId = $(e.target).closest('.stat-card').attr('id');
        let data = sideCharts.getSideChart(parseInt(categoryId)).getChartData();
        let chartHolder = new MainCharts().addChart({data: data.votes, labels: data.candidates}, 'bar');
        let chartHolder2 = new MainCharts().addChart({data: data.votes, labels: data.candidates}, 'pie');
    });

    /*let toBeRemovedChartData;
    let toBeDestroyedChart;
    $('.stat-card').on('click', e => {
        console.log(typeof toBeDestroyedChart);
        if (typeof toBeRemovedChart !== 'undefined') {
            // toBeRemovedChart.destroy();
        }
        let categoryId = $(e.target).closest('.stat-card').attr('id');
        console.log(categoryId);
        let data = sideCharts.getSideChart(parseInt(categoryId)).getChartData();
        toBeRemovedChartData = data;
        // $('#main-stats-container').text(JSON.stringify(data));
    });*/


});

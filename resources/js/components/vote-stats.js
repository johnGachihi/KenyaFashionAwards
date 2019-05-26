import 'simplebar';
import 'simplebar/dist/simplebar.css';
import SideCharts from "./SideCharts";
import {CHART_BAR, CHART_PIE} from "./ChartConfig/ChartConstants";

import BarChart from "./BarChart";
import MainChartDataPointIncrementer from "./DataPointIncrementer/MainChartDataPointIncrementer";
import ChartHolder from "./ChartHolders/ChartHolder";
import MainCharts from "./MainCharts";
// import gridstack from 'gridstack';

import './../../../node_modules/gridstack/dist/gridstack.css';
import gridstack from './../../../node_modules/gridstack/dist/gridstack.all';

$(window).on('load', () => {
    const $gridStack = $('.grid-stack');
    $gridStack.gridstack();
    let gridstack = $gridStack.data('gridstack');

    console.log("votesPerCategory", votesPerCategory);
    let sideCharts = new SideCharts(votesPerCategory);
    let mainCharts = new MainCharts([CHART_BAR, CHART_PIE]);

    Echo.channel('the-polls')
        .listen('VoteCast', e => {
            console.log("eeee e", e);
            sideCharts.plusOne(e.vote.award_category_id, e.vote.candidate);
            mainCharts.update();
            console.log("mainCharts", mainCharts);
            mainCharts.getCharts().forEach((value, index) => {
                console.log("MainCharts chart: ", value);
            })
    });


    $('.stat-card').on('click', e => {
        let categoryId = $(e.target).closest('.stat-card').attr('id');
        let data = sideCharts.getSideChart(parseInt(categoryId)).getChartData();

        // let chartHolder = new MainCharts().addChart({data: data.votes, labels: data.candidates}, 'bar');
        // let chartHolder2 = new MainCharts().addChart({data: data.votes, labels: data.candidates}, 'pie');
        console.log('categoryId', categoryId);
        sideCharts.select(parseInt(categoryId));
        mainCharts.makeCharts({data: data.votes, labels: data.candidates});
    });

    let firstSideChartId = sideCharts.getFirstChartIndex();
    $(`.stat-card#${firstSideChartId}`).trigger('click');

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

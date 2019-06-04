import 'simplebar';
import 'simplebar/dist/simplebar.css';
import SideCharts from "./SideCharts";
import {CHART_BAR, CHART_PIE} from "./ChartConfig/ChartConstants";
import MainCharts from "./MainCharts";

import './../../../node_modules/gridstack/dist/gridstack.css';
import gridstack from './../../../node_modules/gridstack/dist/gridstack.all';
import VotesStatsSideBarCollapser from "./ElementHandlers/VotesStatsSideBarCollapser";

$(window).on('load', () => {
    const $gridStack = $('.grid-stack');
    $gridStack.gridstack();
    let gridstack = $gridStack.data('gridstack');

    console.log("votesPerCategory", votesPerCategory);
    let sideCharts = new SideCharts(votesPerCategory);

    // let mainChartsPrefs = new MainChartsPreferences(userId);
    // mainChartsPrefs.load().then(() => {
        //hide progress indicator
    // });
    // let mainCharts = new MainCharts(mainChartsPrefs.get());
    let mainCharts = new MainCharts([{chartType: CHART_PIE, x: 1, y: 2, width: 6, height: 6}]);

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

    let data;

    $('.stat-card').on('click', e => {
        let categoryId = $(e.target).closest('.stat-card').attr('id');
        let data = sideCharts.getSideChart(parseInt(categoryId)).getChartData();

        console.log('categoryId', categoryId);
        sideCharts.select(parseInt(categoryId));
        mainCharts.makeCharts({data: data.votes, labels: data.candidates});
    });

    let firstSideChartId = sideCharts.getFirstChartIndex();
    $(`.stat-card#${firstSideChartId}`).trigger('click');

    new VotesStatsSideBarCollapser(
        document.getElementById('sideMenuCollapser')
    );

    $('#bar-graph').click(e => {
        let categoryId = $('.stat-card.selected').attr('id');
        let data = sideCharts.getSideChart(parseInt(categoryId)).getChartData();

        console.log("The data on click:", data);
        mainCharts.addChart(
            {data: data.votes, labels: data.candidates},
            {
                chartType: $(e.target).data('charttype'),
                x: 6, y: 5, width: 5, height: 6
            }
        );
    })
});

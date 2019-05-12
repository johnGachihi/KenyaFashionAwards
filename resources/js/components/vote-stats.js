import 'simplebar';
import 'simplebar/dist/simplebar.css';
import SideCharts from "./SideCharts";

$(window).on('load', () => {

    let sideCharts = new SideCharts(votesPerCategory);

    Echo.channel('the-polls')
        .listen('VoteCast', e => {
            console.log(e);
            sideCharts.plusOne(e.vote.award_category_id, e.vote.candidate);
    });

    $('.stat-card').on('click', e => {
        let categoryId = $(e.target).closest('.stat-card').attr('id');
        console.log(categoryId);
        let data = sideCharts.getSideChart(parseInt(categoryId)).getChartData();
        $('#main-stats-container').text(JSON.stringify(data));
    })

});

import 'simplebar';
import 'simplebar/dist/simplebar.css';
import BarChart from "./BarChart";
import SideCharts from "./SideCharts";

$(window).on('load', () => {

    //
    let sideCharts = new SideCharts(votesPerCategory);

    /*let sideCharts = new Map();
    for(const [awardCategory, voteData] of Object.entries(votesPerCategory)) {
        // console.log(document.querySelector(`#sideChart${voteData.category_id}`));
        let chart = new BarChart(
            voteData, document.querySelector(`#sideChart${voteData.category_id}`));

        sideCharts.set(voteData.category_id, chart);
    }

    console.log(sideCharts.entries());*/

    Echo.channel('the-polls')
        .listen('VoteCast', e => {
            console.log(e);

            sideCharts.plusOne(e.vote.award_category_id, e.vote.candidate);
    })

});

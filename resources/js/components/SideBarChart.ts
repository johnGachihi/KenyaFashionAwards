import BarChart from "./BarChart";
import DataPointIncrementer from "./DataPointIncrementer/DataPointIncrementer";
import Candidate from "./Interfaces/Candidate";
import ChartData from "./Interfaces/ChartData";

export default class SideBarChart extends BarChart{
    private totalEl: HTMLElement;
    private parentStatCard: HTMLElement;
    private categoryTitle: string;

    constructor(awardCategoryData: ChartData, canvasEl: HTMLElement, incrementer : DataPointIncrementer, totalEl: HTMLElement) {
        super(awardCategoryData, canvasEl, incrementer);
        this.totalEl = totalEl;
        this.totalEl.innerText = `${this.awardCategoryData.total}`;

        this.parentStatCard = <HTMLElement>this.canvasEl.closest('.stat-card');
        this.parentStatCard.style.order = '1';
        console.log('Parent --->', this.parentStatCard);

        this.categoryTitle = $(`#${this.parentStatCard.id} .card-title`).text();

        //Remove the chart's placeholder
        $(`#${this.parentStatCard.id} .side-vote-bargraph-place-holder`).css('display', 'none');
    }

    increment(candidate: Candidate): void {
        super.increment(candidate);
        let total = parseInt(this.totalEl.innerText);
        this.totalEl.innerText = `${++total}`;
        console.log(total);
    }

    select() {
        $(this.parentStatCard).addClass('selected');
        $('#selected-category-title').text(this.categoryTitle);
        console.log(this.categoryTitle);
    }

    deselect() {
        $(this.parentStatCard).removeClass('selected');
    }
}


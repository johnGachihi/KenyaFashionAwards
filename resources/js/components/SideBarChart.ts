import BarChart from "./BarChart";
import DataPointIncrementer from "./DataPointIncrementer/DataPointIncrementer";
import Candidate from "./Interfaces/Candidate";

export default class SideBarChart extends BarChart{
    private totalEl: HTMLElement;
    private parentEl: HTMLElement;

    constructor(awardCategoryData, canvasEl: HTMLElement, incrementer : DataPointIncrementer, totalEl: HTMLElement) {
        super(awardCategoryData, canvasEl, incrementer);
        this.totalEl = totalEl;
        this.totalEl.innerText = `${this.awardCategoryData.total}`;

        this.parentEl = <HTMLElement>this.canvasEl.closest('.stat-card');
        this.parentEl.style.order = '1';
        console.log('Parent --->', this.parentEl);
    }

    increment(candidate: Candidate): void {
        super.increment(candidate);
        let total = parseInt(this.totalEl.innerText);
        this.totalEl.innerText = `${++total}`;
        console.log(total);
    }
}


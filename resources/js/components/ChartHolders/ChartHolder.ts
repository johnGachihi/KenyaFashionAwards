export default class ChartHolder {
    domElementString: string;

    chartContainerDomString: string;
    canvasElDomString: string;

    parentEl: HTMLElement;
    chartHolderElementId: string;
    canvasId: string;

    static counter = 0;

    constructor(parent: HTMLElement, chartType: string) {
        this.parentEl = parent;
        this.canvasId = `mainChart-canvas_${ChartHolder.counter}`;
        this.chartHolderElementId = `chartHolder_${ChartHolder.counter++}`;
        this.domElementString = `
            <div id="${this.chartHolderElementId}" class='grid-stack-item mdc-card mdc-card--outlined mdc-elevation--z1 mx-3'
                data-gs-x="0" data-gs-y="0" data-gs-width="4" data-gs-height="2">
                <div class="grid-stack-item-content w-100 h-100">
                    <canvas id="${this.canvasId}" class="main-chart" data-charttype="${chartType}"></canvas>
                </div>
            </div>
        `;

        this.chartContainerDomString = `
            <div id="${this.chartHolderElementId}" class='mdc-card mdc-card--outlined mdc-elevation--z1 mx-3'>
                <div class="grid-stack-item-content w-100 h-100">
                </div>
            </div>
        `;

        this.canvasElDomString = `
            <canvas id="${this.canvasId}" class="main-chart" data-charttype="${chartType}"></canvas>
        `
    }


    renderChartContainer() {
        const parser = new DOMParser();
        let el = parser.parseFromString(this.domElementString, 'text/html').body.firstChild;
        this.parentEl.append(el);

        let canvas = document.getElementById(this.canvasId);
        let holderEl = document.getElementById(this.chartHolderElementId);
        return {canvas: canvas, holderEl: holderEl};
    }

    inflateChartContainer() {
        let container = new DOMParser().parseFromString(
            this.chartContainerDomString, 'text/html').body.firstElementChild;
        let canvas = new DOMParser().parseFromString(
            this.canvasElDomString, 'text/html').body.firstElementChild;

        container.getElementsByClassName('grid-stack-item-content')
            .item(0).append(canvas);

        return {canvas: canvas, holderEl: container};
    }
}
import ChartProperties from "../../Interfaces/ChartProperties";

export default class MainChartsPreferences {
    private chartsPreferences: string;

    constructor(chartsPreferences: string) {
        this.chartsPreferences = chartsPreferences;
    }

    private serialize(prefs: ChartProperties[]) {
        let serialized = '';
        prefs.map(props => {
            serialized += props.chartType + '|' + props.x + '|' + props.y
        })
    }

}
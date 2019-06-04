import ChartProperties from "../../Interfaces/ChartProperties";

export default class Converter {

    public static serialize(prefs: ChartProperties[]): string {
        let serialized = '';
        prefs.map((props, index) => {
            serialized += props.chartType + '|' + props.x + '|' + props.y + '|' + props.width + '|' + props.height;
            if(index < prefs.length - 1) {
                serialized += ','
            }
        });

        return serialized
    }

    public static deserialize(prefs: string): ChartProperties[] {
        let deserialized = [];

        let prefsAsArray = prefs.split(',');
        prefsAsArray.map((value, index) => {
            let prefProperties = value.split('|');
            let prefsObj: ChartProperties = {
                chartType:  prefProperties[0],
                x:          parseInt(prefProperties[1]),
                y:          parseInt(prefProperties[2]),
                width:      parseInt(prefProperties[3]),
                height:     parseInt(prefProperties[4])
            };

            deserialized.push(prefsObj);
        });

        return deserialized;
    }
}
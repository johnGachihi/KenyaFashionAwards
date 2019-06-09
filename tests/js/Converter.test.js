import Converter from "../../resources/js/components/UserPrefs/ChartsUserPrefs/Converter";
import {CHART_BAR, CHART_PIE} from "../../resources/js/components/ChartConfig/ChartConstants";

test("serialize single preference object", () => {
    const serialized = Converter.serialize([{
        chartType: CHART_BAR,
        x: 1, y: 1, width: 4, height: 4
    }]);

    const expected = `${CHART_BAR}|1|1|4|4`;
    expect(serialized).toEqual(expected);
});

test("serialize two preference objects", () => {
    const serialized = Converter.serialize([
        {
            chartType: CHART_PIE,
            x: 1, y: 1, width: 4, height: 4
        },
        {
            chartType: CHART_BAR,
            x: 1, y: 1, width: 4, height: 4
        }
    ]);
    const expected = `${CHART_PIE}|1|1|4|4,${CHART_BAR}|1|1|4|4`;
    expect(serialized).toEqual(expected);
});


test("serialize multiple preference objects", () => {
    const serialized = Converter.serialize([
        {
            chartType: CHART_PIE,
            x: 1, y: 1, width: 4, height: 4
        },
        {
            chartType: CHART_BAR,
            x: 1, y: 1, width: 4, height: 4
        },
        {
            chartType: CHART_PIE,
            x: 1, y: 1, width: 4, height: 4
        }
    ]);

    const expected = `${CHART_PIE}|1|1|4|4,${CHART_BAR}|1|1|4|4,${CHART_PIE}|1|1|4|4`;
    expect(serialized).toEqual(expected);
});

test("Serialize empty preference array", () => {
    const serialized = Converter.serialize([]);
    expect(serialized).toEqual('');
});

test("Deserialize single chart's prefProperties", () => {
    const deserialized = Converter.deserialize(`${CHART_BAR}|1|1|4|4`);
    const expected = [{
        chartType: CHART_BAR,
        x: 1, y: 1, width: 4, height: 4
    }];

    expect(deserialized).toEqual(expected);/m
});

test("Deserialize two chart's prefProperties", () => {
    c
});
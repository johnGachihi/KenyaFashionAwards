import {getChartjsConfig, getSideBarChartConfig} from "../../resources/js/components/chartjsConfig";

test('chart config objects similar', () => {
    expect(getSideBarChartConfig([1,2,3], ['1'])).toEqual(getChartjsConfig([1,2], ['1']))
});
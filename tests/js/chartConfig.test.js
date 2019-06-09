import {getChartjsConfig, getSideBarChartConfig} from "../../resources/js/components/chartjsConfig";

test('chart config objects similar', () => {
    expect(getSideBarChartConfig([1,2,3], ['1'])).toEqual(getChartjsConfig([1,2], ['1']))
});

/*
let BASE_URL = "This should be the, I think, http://localhost/kfa/john/kenyafashionawards/public/index";
$.ajax({
    url: BASE_URL + "/applications/create",
    method: "post",
    type: "json",
    data: {
        name: "Get name input",
        company: "Get company input",
        email: "Get email input",
        "phone-number": "Get phone-number input"
    }
//    ...
});*/

"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var Converter = /** @class */ (function () {
    function Converter() {
    }
    Converter.serialize = function (prefs) {
        var serialized = '';
        prefs.map(function (props, index) {
            serialized += props.chartType + '|' + props.x + '|' + props.y + '|' + props.width + '|' + props.height;
            if (index < prefs.length - 1) {
                serialized += ',';
            }
        });
        return serialized;
    };
    Converter.deserialize = function (prefs) {
        var deserialized = [];
        var prefsAsArray = prefs.split(',');
        prefsAsArray.map(function (value, index) {
            var prefProperties = value.split('|');
            var prefsObj = {
                chartType: prefProperties[0],
                x: parseInt(prefProperties[1]),
                y: parseInt(prefProperties[2]),
                width: parseInt(prefProperties[3]),
                height: parseInt(prefProperties[4])
            };
            deserialized.push(prefsObj);
        });
        return deserialized;
    };
    return Converter;
}());
exports.default = Converter;
//# sourceMappingURL=Converter.js.map
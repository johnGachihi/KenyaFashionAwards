"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var VotesStatsSideBarCollapser = /** @class */ (function () {
    function VotesStatsSideBarCollapser(el) {
        $(el).click(function (event) {
            new HandleVotesStatsSideBarOnCollapsePrompted().do(el, event);
        });
    }
    return VotesStatsSideBarCollapser;
}());
exports.default = VotesStatsSideBarCollapser;
var HandleVotesStatsSideBarOnCollapsePrompted = /** @class */ (function () {
    function HandleVotesStatsSideBarOnCollapsePrompted() {
    }
    HandleVotesStatsSideBarOnCollapsePrompted.prototype.do = function (el, event) {
        // event.preventDefault();
        $(el).toggleClass('off');
        $('#_sidebar').toggleClass('width-0');
        if (document.querySelector('#sideMenuCollapser.off')) {
            setTimeout(function () {
                $(el).text('menu');
                $(el).css('border', 'none');
            }, 500);
        }
        else {
            $(el).text('remove');
        }
        //Toggle Main container
        if ($('#_mainCont').hasClass('full')) {
            $('#_mainCont').removeClass('full');
        }
        else {
            setTimeout(function () {
                $('#_mainCont').toggleClass('full');
            }, 500);
        }
    };
    return HandleVotesStatsSideBarOnCollapsePrompted;
}());
//# sourceMappingURL=VotesStatsSideBarCollapser.js.map
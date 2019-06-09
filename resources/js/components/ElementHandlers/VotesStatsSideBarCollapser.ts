import OnCollapsePrompted from "./OnCollapsePrompted";

export default class VotesStatsSideBarCollapser {
    constructor(el: HTMLElement) {
        $(el).click( event => {
            new HandleVotesStatsSideBarOnCollapsePrompted().do(el, event);
        });
    }

}

class HandleVotesStatsSideBarOnCollapsePrompted implements OnCollapsePrompted{
    do(el, event): void {
        // event.preventDefault();

        $(el).toggleClass('off');
        $('#_sidebar').toggleClass('width-0');

        if(document.querySelector('#sideMenuCollapser.off')) {
            setTimeout(() => {
                $(el).text('menu');
                $(el).css('border', 'none');
            }, 500);
        } else {
            $(el).text('remove');
        }

        //Toggle Main container
        if($('#_mainCont').hasClass('full')) {
            $('#_mainCont').removeClass('full');
        } else {
            setTimeout(() => {
                $('#_mainCont').toggleClass('full');
            }, 500);
        }
    }
}
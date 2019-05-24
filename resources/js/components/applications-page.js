import {submitDecision} from "./submitdecision";
import {DecisionModalSetup} from "./ModalSetup/DecisionModalSetup";
import ShowDecisionModal from  "./Listeners/ShowDecisionModal";
import EditEmailModalSetup from "./ModalSetup/EditEmailModalSetup"
import ShowEditEmailModal from "./Listeners/ShowEditEmailModal"

export const DECISION_ACCEPT = 'accept';
export const DECISION_REJECT = 'reject';

const applicationsContainer = document.querySelector('#applications-container');
const $decisionModal = $('#decision-modal');
const $editEmailModal = $('#editEmailModal');

applicationsContainer.addEventListener('click', e => {
    const clickedItem = e.target;

    if(clickedItem.id === 'collapse-btn') {
        if(clickedItem.innerText === 'expand_more') {
            clickedItem.innerText = 'expand_less';
        } else {
            clickedItem.innerText = 'expand_more';
        }
    }
    else if(clickedItem.id === 'acceptButton') {
       new ShowDecisionModal(e, $decisionModal, DECISION_ACCEPT).do();
    }
    else if(clickedItem.id === 'rejectButton') {
        new ShowDecisionModal(e, $decisionModal, DECISION_REJECT).do();
    }

    // e.stopPropagation();
});

$(window).on('load', e => {

    // $('#modal-decision-btn').on('click', e => {
    //     /*submitDecision($('#modal-decision-btn').data('url'), {
    //         onConnectionError: (err) => console.log("Error: ", err),
    //         onSuccess: (data) => {
    //             $('#decision-modal').modal('hide');
    //             location.reload();
    //         },
    //         onFailure: (err) => console.log("Failure: " + err)
    //     });*/
    //     $decisionModal.modal('hide');
    //     new ShowEditEmailModal(e, $editEmailModal).do();
    //
    // });

});

/*
window.onload = () => {
    $('#modal-decision-btn').on('click', e => {
        submitDecision($('#modal-decision-btn').data('url'), {
            onConnectionError: (err) => console.log("Error: ", err),
            onSuccess: (data) => {
                $('#decision-modal').modal('hide');
                location.reload();
            },
            onFailure: (err) => console.log("Failure: " + err)
        });
    })
};
*/

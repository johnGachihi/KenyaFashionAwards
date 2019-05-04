import {HOME_URL} from "../../conf";
import ShowEditEmailModal from "../Listeners/ShowEditEmailModal";

export class DecisionModalSetup {

    setUpAndShow($modal, config) {
        this.$modal = $modal;

        this.modalId = $modal.attr('id');
        const url = `${HOME_URL}/admin/applications/decision/${config.decision}/${config.applicationId}`;
        const $modalDecisionBtn = $(`#${this.modalId} #modal-decision-btn`);

        $(`#${this.modalId} #modal-title`).text(`${config.decision} Application`);
        $(`#${this.modalId} #modal-body-text`).text(`${config.decision} ${config.applicant} application`);
        $modalDecisionBtn.text(config.decision);
        // $modalDecisionBtn.data('url', url);
        
        $modalDecisionBtn.data('decision', config.decision);
        $modalDecisionBtn.data('applicant', config.applicant);
        $modalDecisionBtn.data('applicationid', config.applicationId);

        this.setUpEventListeners();

        $modal.modal('show');
    }

    setUpEventListeners() {
        const $modalDecisionBtn = $(`#${this.modalId} #modal-decision-btn`);
        const $editEmailModal = $('#editEmailModal'); //Should be refactored!!!

        $modalDecisionBtn.on('click', e => {
            this.$modal.modal('hide');
            new ShowEditEmailModal(e, $editEmailModal).do();
        });

        this.$modal.on('hide.bs.modal', () => {
            this.tearDownEventListeners();
        })
    }

    tearDownEventListeners() {
        const $modalDecisionBtn = $(`#${this.modalId} #modal-decision-btn`);

        $modalDecisionBtn.off('click');
        this.$modal.off('hide.bs.modal');
    }

}
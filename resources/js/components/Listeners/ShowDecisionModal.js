import {DecisionModalSetup} from "../ModalSetup/DecisionModalSetup";

export default class ShowDecisionModal {

    constructor(e, modal, decision) {
        this.modal = modal;

        this.originator = $(e.target);
        this.decision = decision;
        this.applicant = this.originator.data('applicant');
        this.applicationId = this.originator.data('applicationid');
    }

    do() {
        console.log("To show decision modal");
        new DecisionModalSetup().setUpAndShow(this.modal, {
            decision: this.decision,
            applicant: this.applicant,
            applicationId: this.applicationId
        });
    }

}
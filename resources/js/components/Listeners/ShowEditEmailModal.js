import EditEmailModalSetup from './../ModalSetup/EditEmailModalSetup'

export default class ShowEditEmailModal {

    constructor(e, $modal) {
        this.originator = $(e.target);

        this.$modal = $modal;

        this.decision = this.originator.data('decision');
        this.applicant = this.originator.data('applicant');
        this.applicationId = this.originator.data('applicationid');
    }

    do() {
        new EditEmailModalSetup(this.$modal, {
            decision: this.decision,
            applicant: this.applicant,
            applicationId: this.applicationId
        }).setUpAndShow();
    }

}
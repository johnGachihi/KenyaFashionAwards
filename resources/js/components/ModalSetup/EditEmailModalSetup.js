import {DECISION_ACCEPT, DECISION_REJECT} from "../applications-page";
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import SubmitApplicationDecision from '../Listeners/SubmitApplicationDecision';
import sanitizeHtml from 'sanitize-html';
import HOME_URL from './../../conf'

export default class EditEmailModalSetup {

    constructor($modal, config) {
        this.$modal = $modal;
        this.decision = config.decision;
        this.applicant = config.applicant;
        this.applicationId = config.applicationId;

    }

    setUpAndShow() {
        const modalId = this.$modal.attr('id');

        this.setUpCkEditor(`#${modalId} #emailBodyTxtArea`);

        this.$modal.modal('show');

        this.setUpEventListeners();

    }

    setUpCkEditor(textAreaSelector) {
        ClassicEditor
            .create(document.querySelector(textAreaSelector), {
                toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                initialData: generateDefaultEmailBody(this.decision, this.applicant)
            })
            .then(editor => {
                console.log(editor);
                this.editor = editor;
                // editor.setData(generateDefaultEmailBody(this.decision, this.applicant))
            })
            .catch(err => console.log(err));
    }

    destroyCkEditor() {
        if(this.editor != null && typeof this.editor !== 'undefined') {
            this.editor.destroy()
                .then(a => console.log('destroy().then()', a))
                .catch(err => console.log(err));
        }
    }

    setUpEventListeners() {
        this.$modal.on('hidden.bs.modal', () => {
            this.tearDownEventListeners();
            this.destroyCkEditor();
        });

        $('#modal-send-email-btn').on('click', e => {
            const sanitized = sanitizeHtml(this.editor.getData());
            new SubmitApplicationDecision(
                this.applicationId,
                this.decision,
                {
                    emailBody: sanitized
                },
                {
                    beforeSend: () => {
                        const closeBtn = $(`#${this.$modal.attr('id')} #editEmailModalCloseBtn`);
                        const spinner = $(`#${this.$modal.attr('id')} #editEmailModalSpinner`);

                        closeBtn.addClass('d-none');
                        spinner.removeClass('d-none');
                    },
                    onConnectionError: (err) => console.log("Error: ", err),
                    onSuccess: (data) => {
                        $('#decision-modal').modal('hide');
                        location.reload();
                    },
                    onFailure: (err) => console.log("Failure: " + err)
                }
            ).do();
        })
    }

    tearDownEventListeners() {
        $('#modal-send-email-btn').off('click');
        this.$modal.off('hide.bs.modal');
    }

}

function generateDefaultEmailBody(decision, applicant) {
    if(decision === DECISION_ACCEPT) {
        return `
            <p>Dear ${applicant},</p>
            <br>
            <p>We are happy to inform you that you application has been accepted</p>
        `
    } else {
        return `
            <p>Dear ${applicant},</p>
            <br>
            <p>We are sorry to inform you that you application has been rejected</p>
        `
    }
}
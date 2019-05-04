import {submitDecision} from "../submitdecision";
import {HOME_URL} from "./../../conf";

export default class SubmitApplicationDecision {

    /**
     *
     * @param {number} applicationId
     * @param {string} decision
     * @param {Object} data
     * @param {Object} callbacks
     */
    constructor(applicationId, decision, data, callbacks) {
        this.submissionUrl = `${HOME_URL}/admin/applications/decision/${decision}/${applicationId}`;
        this.callbacks = callbacks;
        this.data = data;
    }

    do() {
        submitDecision(this.submissionUrl, this.data, this.callbacks);
    }


}
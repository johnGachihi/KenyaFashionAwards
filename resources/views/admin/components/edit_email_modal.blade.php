
<div id="editEmailModal" class="modal fade bd-example-modal-xl" tabindex="-1"
     role="dialog" aria-labelledby="emailEditModalTitle" aria-hidden="true" style="z-index: 10000">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content mdc-elevation--z4">
            <div class="modal-header d-flex justify-content-between">
                <h5 id="emailEditModalTitle" class="modal-title">Edit Response Email Body</h5>

                <div>
                    <div id="editEmailModalSpinner" class="spinner-border d-none" style="width: 2rem; height: 2rem;" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <button id="editEmailModalCloseBtn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <textarea name="content" id="emailBodyTxtArea"></textarea>
            </div>
            <div class="modal-footer">
                {{--<button type="button" class="mdc-button" data-dismiss="modal">Cancel</button>--}}
                <button id="modal-send-email-btn" type="button"
                        class="mdc-button mdc-button--raised mdc-button--dense mx-1">
                    Send
                </button>
            </div>
        </div>
    </div>
</div>
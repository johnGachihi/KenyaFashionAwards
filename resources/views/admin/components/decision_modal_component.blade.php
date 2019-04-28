{{--<div id="decision-modal" class="modal" tabindex="-1" role="dialog">--}}
    {{--<div class="modal-dialog" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<h5 class="modal-title">--}}
                    {{--@if($decision === 'accept')--}}
                        {{--Accept--}}
                    {{--@else--}}
                        {{--Reject--}}
                    {{--@endif--}}
                {{--</h5>--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<p id="body-text"></p>--}}
            {{--</div>--}}
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-primary" data-decision="{{ $decision }}">Save changes</button>--}}
                {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="modal fade" id="decision-modal" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="modal-title" class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="modal-body-text"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="mdc-button" data-dismiss="modal">Cancel</button>
                <button id="modal-decision-btn" type="button" class="mdc-button mdc-button--raised mdc-button--dense mx-1">
                </button>
            </div>
        </div>
    </div>
</div>
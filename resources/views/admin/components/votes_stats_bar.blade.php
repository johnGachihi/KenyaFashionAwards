<div id="{{ $id }}" class="card stat-card" style="background-color: #fff; order: 2">
    <div class="card-body">
        <h5 class="card-title" style="background-color: #fff" title="{{ $award_category }}">{{ $award_category }}</h5>
        <div class="row">
            <div class="col-6">
                <div class="side-vote-bargraph-place-holder">
                    <span>No votes yet.</span>
                </div>
                <canvas class="sideVotesBar" data-awardcategory="{{ $award_category }}"
                        id="sideChart{{ $id }}" width="92" height="92"></canvas>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center">
                <div>
                    <span>Total</span>
                    <h3 id="totalVotes{{ $id }}">0</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@extends('layouts.admin.app')

@section('mainContent')

    <div id="voteStatsPage" class="container-fluid">
        <div class="row mt-3 h-fill-screen">
            <div class="col-3 stat-card-column h-100" data-simplebar>
                <div class="d-flex flex-column">
                    {{--@foreach($votes_per_category as $category => $category_vote_data)
                        @sideVotesBar
                            @slot('award_category')
                                {{ $category }}
                            @endslot
                            @slot('total')
                                {{ $category_vote_data['total'] }}
                            @endslot
                            @slot('id')
                                {{ $category_vote_data['category_id'] }}
                            @endslot
                        @endsideVotesBar
                    @endforeach--}}

                    @foreach($categories as $category)
                    @sideVotesBar
                        @slot('award_category')
                            {{ $category->Category_Title }}
                        @endslot
                        @slot('id')
                            {{ $category->id }}
                        @endslot
                    @endsideVotesBar
                @endforeach
                </div>
                <script>
                    let votesPerCategory =  @json($votes_per_category);
                </script>
            </div>
            <div id="main-stats-container" class="col">
                <h4 id="selected-category-title" class="py-3"></h4>
                <div class="w-100 h-100">
                    <div class="grid-stack">
                        {{--<div id="gsi-1" class="grid-stack-item mdc-elevation--z1"
                             data-gs-x="0" data-gs-y="0"
                             data-gs-width="4" data-gs-height="2">
                            <div class="grid-stack-item-content">bleble-1</div>
                        </div>
                        <div id="gsi-1" class="grid-stack-item mdc-elevation--z1"
                             data-gs-x="4" data-gs-y="0"
                             data-gs-width="4" data-gs-height="4">
                            <div class="grid-stack-item-content">bleble-2</div>--}}
                        </div>
                    </div>
                </div>
                <script>
                    // $('.grid-stack').gridstack();
                </script>
                {{--<div class="mdc-card" style="height: 500px;">
                    ble
                </div>--}}
                {{--<div class="w-100 h-100 d-flex justify-content-center align-items-center">
                    <div style="text-align: center">
                        <span class="d-block" style="font-size: 40px;">Not charts yet!</span>
                        <button class="mdc-button mdc-button--outlined dropdown-toggle" id="chartsDropdownButton" data-toggle="dropdown">
                            Create one
                        </button>
                        <div class="dropdown-menu" aria-labelledby="chartsDropdownButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>--}}
                {{--<div class="grid">
                    <div class="item resizable" data-x=0 data-y=0 style="height: 170px; width: 500px; background-color: #4dc0b5">
                        <div class="item-content">
                            <canvas id="toBeRemovedChart" style="width: 92px; height: 92px;"></canvas>
                        </div>
                    </div>
                    <div class="item resizable" style="height: 170px; width: 500px; background-color: #4BBF73;">
                        <div class="item-content">
                            bleble
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
@endsection
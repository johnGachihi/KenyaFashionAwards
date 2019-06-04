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
                    let votesPerCategory = @json($votes_per_category);
                    let chartsPreferences = @json($chartsPreferences);
                </script>
            </div>
            <div id="main-stats-container" class="col">
                <div class="d-flex justify-content-between">
                    <h4 id="selected-category-title" class="pt-4"></h4>
                    <div class="align-self-end mr-5">
                        <div class="dropdown d-inline">
                            <button class="mdc-button material-icons dropdown-toggle top-menu-btn"
                                    type="button"
                                    id="chartsChoiceDropdownBtn"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                add
                            </button>
                            <div class="dropdown-menu" aria-labelledby="chartsChoiceDropdownBtn">
                                <a id="bar-graph" data-charttype="bar" class="dropdown-item" href="#">Bar graph</a>
                                <a id="pie-chart" class="dropdown-item" data-charttype="pie" href="#">Pie chart</a>
                                <a class="dropdown-item disabled" href="#">Line chart</a>
                            </div>
                        </div>

                        <button id="save-chart-area" class="material-icons mdc-button top-menu-btn">save</button>
                    </div>
                </div>
                <div class="w-100 h-100">
                    {{--<div role="progressbar" class="mdc-linear-progress mdc-linear-progress--indeterminate mb-3">
                        <div class="mdc-linear-progress__buffering-dots"></div>
                        <div class="mdc-linear-progress__buffer"></div>
                        <div class="mdc-linear-progress__bar mdc-linear-progress__primary-bar">
                            <span class="mdc-linear-progress__bar-inner"></span>
                        </div>
                        <div class="mdc-linear-progress__bar mdc-linear-progress__secondary-bar">
                            <span class="mdc-linear-progress__bar-inner"></span>
                        </div>
                    </div>--}}
                    {{--@if(isset($chartsPreferencses))--}}
                        <div class="grid-stack">
                            {{--<div id="gsi-1" class="grid-stack-item mdc-elevation--z1"
                                 data-gs-x="0" data-gs-y="0"
                                 data-gs-width="4" data-gs-height="2">
                                <div class="grid-stack-item-content">bleble-1</div>
                            </div>
                            <div id="gsi-1" class="grid-stack-item mdc-elevation--z1"
                                 data-gs-x="4" data-gs-y="0"
                                 data-gs-width="4" data-gs-height="4">
                                <div class="grid-stack-item-content">bleble-2</div>
                            </div>--}}
                        </div>
                    {{--@else--}}
                        {{--<div class="w-100 h-100 d-flex justify-content-center align-items-center">--}}
                            {{--<div style="text-align: center">--}}
                                {{--<span class="d-block" style="font-size: 40px;">Not charts yet!</span>--}}
                                {{--<button class="mdc-button mdc-button--outlined dropdown-toggle" id="chartsDropdownButton" data-toggle="dropdown">--}}
                                    {{--Create one--}}
                                {{--</button>--}}
                                {{--<div class="dropdown-menu" aria-labelledby="chartsDropdownButton">--}}
                                    {{--<a class="dropdown-item" href="#">Action</a>--}}
                                    {{--<a class="dropdown-item" href="#">Another action</a>--}}
                                    {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                </div>

            </div>
        </div>
    </div>
@endsection
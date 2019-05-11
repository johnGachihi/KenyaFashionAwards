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
                </script>
            </div>
        </div>
    </div>
@endsection
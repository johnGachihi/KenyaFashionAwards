@extends('layouts.admin.app')

@section('mainContent')


    <div id='applications_page' class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                {{--<span class="text-uppercase page-subtitle">Awards</span>--}}
                <h3 class="page-title">Applications</h3>
            </div>
        </div>
        <!-- Page Header End -->

        <div id="applications-container">

            <div class="mb-4">
                <h4 class="h5 mb-3" style="color: #838383">Pending</h4>
                @foreach($pending_applications as $application)
                    @applicationDetails(['application' => $application])
                        @slot('statusOrAction')
                        <div class="d-flex">
                            <div>
                                <button id="acceptButton" class="mdc-button mdc-button--raised mdc-button--dense mx-1"
                                        data-applicationid="{{ $application->id }}",
                                        data-applicant="{{ $application->applicant->name }}">
                                    Accept
                                </button>
                            </div>
                            <div>
                                <button id="rejectButton" class="mdc-button mdc-button--outlined mdc-button--dense mx-1"
                                        data-applicationid="{{ $application->id }}"
                                        data-applicant="{{ $application->applicant->name }}">
                                    Reject
                                </button>
                            </div>
                        </div>
                        @endslot
                    @endapplicationDetails
                @endforeach
            </div>

            <div class="mb-4">
                <h4 class="h5 mb-3" style="color: #838383">Approved</h4>
                @foreach($approved_applications as $application)
                    @applicationDetails(['application' => $application])
                        @slot('statusOrAction')
                        @endslot
                    @endapplicationDetails
                @endforeach
            </div>

            <div class="mb-4">
                <h4 class="h5 mb-3" style="color: #838383">Rejected</h4>
                @foreach($rejected_applications as $application)
                    @applicationDetails(['application' => $application])
                        @slot('statusOrAction')
                        @endslot
                    @endapplicationDetails
                @endforeach
            </div>
        </div>

        @decisionModal
        @enddecisionModal

        @editEmailModal
        @endeditEmailModal

    </div>
@endsection

@section('_scripts')
    <script>
    </script>

@endsection
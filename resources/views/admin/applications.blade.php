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

        <div class="row">
            <div class="col-12 mb-4">
                <div class="card mdc-elevation--z3">
                    <div class="card-body">
                        <h5 class="card-title mb-3 applicant-dets-titles">Fashion Designer (Male) Application</h5>
                        <div class="d-flex mb-3 row">
                            <div class="col-3">
                                <span class="applicant-dets-titles" style="font-size: 11px; display: block; letter-spacing: 3px;">Applicant name:</span>
                                <span>Charles Xavier</span>
                            </div>
                            <div class="col-3">
                                <span class="applicant-dets-titles" style="font-size: 11px; display: block; letter-spacing: 3px;">Company name:</span>
                                <span>Nyeri Fashion and Design</span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-3">
                                <span class="applicant-dets-titles" style="font-size: 11px; display: block; letter-spacing: 3px;">Email:</span>
                                <span>charles.xavier@gmail.com</span>
                            </div>
                            <div class="col-3">
                                <span class="applicant-dets-titles" style="font-size: 11px; display: block; letter-spacing: 3px;">Phone number:</span>
                                <span >+254 712 345678 </span>
                            </div>
                        </div>

                        {{-- Collapsible --}}
                        <div class="collapse mb-3" id="collapsibleSection">
                            <div class="row">
                                <div class="col-7">
                                    <span class="applicant-dets-titles" style="font-size: 11px; display: block; letter-spacing: 3px;">Bio:</span>
                                    <span >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                </div>
                            </div>
                        </div>
                        {{-- Collapsible --}}

                        <div>
                            <a data-toggle="collapse" href="#collapsibleSection" id="collapse-btn">
                                <i class="material-icons mdc-elevation--z3 rounded-circle" id="collapse-icon">expand_more</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('_scripts')
    <script>
        const collapseBtn = document.getElementById('collapse-btn');
        const collapseIcon = document.getElementById('collapse-icon');

        collapseBtn.addEventListener('click', e => {
            if(collapseIcon.innerText == 'expand_more') {
                collapseIcon.innerText = 'expand_less';
            } else {
                collapseIcon.innerText = 'expand_more'
            }
        });
    </script>
@endsection
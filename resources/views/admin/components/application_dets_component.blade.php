<div class="row">
    <div class="col-12 mb-4">
        <div class="card mdc-elevation--z3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title mb-3 applicant-dets-titles">{{ $application->award_category->Category_Title }} Application</h5>
                    {{ $statusOrAction }}
                </div>
                <div class="d-flex mb-3 row">
                    <div class="col-3">
                        <span class="applicant-dets-titles" style="font-size: 11px; display: block; letter-spacing: 3px;">Applicant name:</span>
                        <span>{{ $application->applicant->name }}</span>
                    </div>
                    <div class="col-3">
                        <span class="applicant-dets-titles" style="font-size: 11px; display: block; letter-spacing: 3px;">Company name:</span>
                        <span>{{ $application->applicant->company }}</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-3">
                        <span class="applicant-dets-titles" style="font-size: 11px; display: block; letter-spacing: 3px;">Email:</span>
                        <span>{{ $application->applicant->email }}</span>
                    </div>
                    <div class="col-3">
                        <span class="applicant-dets-titles" style="font-size: 11px; display: block; letter-spacing: 3px;">Phone number:</span>
                        <span >{{ $application->applicant->phone_number }}</span>
                    </div>
                </div>

                {{-- Collapsible --}}
                <div class="collapse" id="collapsibleSection{{ $application->id }}">
                    <div class="row">
                        <div class="col-3">
                            <span class="applicant-dets-titles" style="font-size: 11px; display: block; letter-spacing: 3px;">Bio:</span>
                            <span>
                                @if(!empty($application->applicant->bio))
                                    {{$application->applicant->bio}}
                                @else
                                    Not provided.
                                @endif
                            </span>
                        </div>
                        <div class="col-7">
                            <span class="applicant-dets-titles" style="font-size: 11px; display: block; letter-spacing: 3px;">Photo</span>
                    
                            <img style="width:100%; height:100%" src="/storage/pictures/{{$application->applicant->pictures}}">
                            
                        </div>
                    </div>
                </div>
                {{-- Collapsible --}}

                <div>
                    <a data-toggle="collapse" href="#collapsibleSection{{ $application->id }}" style="text-decoration: none;"
                       class="material-icons mdc-elevation--z3 rounded-circle" id="collapse-btn"
                    >
                        {{--<i class="material-icons mdc-elevation--z3 rounded-circle" id="collapse-icon">expand_more</i>--}}
                        expand_more
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
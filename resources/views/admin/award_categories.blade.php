@extends('layouts.admin.app')

@section('mainContent')
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Awards</span>
        <h3 class="page-title">Award Categories</h3>
        </div>
    </div>
    <!-- End Page Header -->

    <div class="row">
        @foreach($categories as $category)
        <div class="col-12 mb-4">
            <div class="card card-small card-post card-post--asisde card-post--1">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="#">{{ $category->Category_Title }}</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">{{ $category->Category_Requirements }}</p>
                </div>
            </div>
        </div>
        @endforeach
        
        <!-- <div class="col-12 mb-4">
            <div class="card card-small card-post card-post--1">
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="text-fiord-blue" href="#">Conduct at an replied removal an amongst</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">However venture pursuit he am mr cordial. Forming musical am hearing studied be luckily. But in for determine what would see...</p>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card card-small card-post card-post--1">
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="text-fiord-blue" href="#">Off tears are day blind smile alone had ready</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">Is at purse tried jokes china ready decay an. Small its shy way had woody downs power. To denoting admitted speaking learning my...</p>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card card-small card-post card-post--aside card-post--1">
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="text-fiord-blue" href="#">Attention he extremity unwilling on otherwise cars backwards yet</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">Conviction up partiality as delightful is discovered. Yet jennings resolved disposed exertion you off. Left did fond drew fat head poor jet pan flying over...</p>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card card-small card-post card-post--aside card-post--1">
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="text-fiord-blue" href="#">Totally words widow one downs few age every seven if miss part by fact</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">Discovered had get considered projection who favourable. Necessary up knowledge it tolerably. Unwilling departure education to admitted speaking...</p>
                </div>
            </div>
        </div> -->

    </div>
    
</div>
@endsection
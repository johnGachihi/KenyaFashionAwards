@extends('layouts.admin.app')

@section('mainContent')
<div id='award_categories_page' class="main-content-container container-fluid px-4">
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
                    <h5 class="card-title d-flex justify-content-between">
                        <a id="{{ $category->id}}" href="{{ url('admin/edit_award_category/'. $category->id) }}" class="">{{ $category->Category_Title }}</a>
                        <div>
                            <a href="{{ url('admin/edit_award_category/'. $category->id) }}">
                                <i class="material-icons ml-4" style="font-size: large;">edit</i>
                            </a>
                            <a href="#" class="deletor" data-id="{{ $category->id }}" data-title="{{ $category->Category_Title }}">
                                <i class="material-icons ml-1" style="font-size: large;">delete</i>
                            </a>
                        </div>
                    </h5>
                    <!-- <p class="card-text d-inline-block mb-3">{{ base64_decode($category->richCategory_Requirements) }}</p> -->
                    <span class="card-text d-inline-block mb-3">{!! base64_decode($category->richCategory_Requirements) !!}</span>
                    <!-- <p class="bleble"><p>man</p></p> -->
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


<button id="showModal" type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#deleteConfirmModal">
  Launch demo modal
</button>

<!--Category Deletion Confirmation Modal -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a href="{{ url('admin/delete_award_category') }}" id="deleteLink" type="button" class="btn btn-primary">Delete</a>
      </div>
    </div>
  </div>
</div>

@endsection
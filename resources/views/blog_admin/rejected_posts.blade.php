@extends('layouts.blog_admin.app')

@section('mainContent')
<div id='award_categories_page' class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Posts</span>
        <h3 class="page-title">Rejected Posts</h3>
        </div>
    </div>

    <div class="row">
        @if($rejected_posts->count() > 0)
            @foreach($rejected_posts as $post)
            <div class="col-12 mb-4">
                    <div class="card-shards card-small card-post card-post--asisde card-post--1">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <img style="width:100%;" src="{{ url('/storage/cover_images/' . $post->cover_image)}}"/>
                            </div>
                            <div class="col-md-8 col-sm-8">
                            <h5 class="card-title d-flex justify-content-between">
                                <a id="{{ $post->id}}" href="#" class="">{{ $post->title }}</a>
                                <div>
                                    <a href="{{ url('blog_admin/approve_post/'. $post->id) }}">
                                        <i class="material-icons ml-4" style="font-size: large;">done_outline</i>
                                        <input type="hidden" name="approvedPostStatus" value="approved">
                                        <input type="hidden" name="declinedPostStatus" value="declined">
                                    </a>
                                    <a href="#" class="deletor" data-id="{{ $post->id }}" data-title="{{ $post->title }}">
                                        <i class="material-icons ml-1" style="font-size: large;">delete</i>
                                    </a>
                                </div>
                            </h5>
                            <hr>
                            <div>
                                <p style="display: inline-block; 
                                width: 100%;
                                white-space: nowrap; 
                                overflow: hidden; 
                                text-overflow: ellipsis;"
                            class="card-text d-inline-block mb-3" class="card-text d-inline-block mb-3">{!! $post->body !!}</p>
                            </div>
                            <hr>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                            </div>
                            <!-- <p class="card-text d-inline-block mb-3">{{ base64_decode($post->body) }}</p> -->
                            <!-- <p class="bleble"><p>man</p></p> -->
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
            <p>No posts found</p>
        @endif

    <!-- End Page Header -->
        
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
        <a href="{{ url('blog_admin/delete_post') }}" id="deleteLink" type="button" class="btn btn-primary">Delete</a>
      </div>
    </div>
  </div>
</div>

@endsection
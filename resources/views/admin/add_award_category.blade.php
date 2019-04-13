@extends('layouts.admin.app')

@section('_stylesheets')
<link href="{{ asset('css/quill.snow.css') }}" rel="stylesheet">
@endsection

@section('mainContent')
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Awards</span>
                <h3 class="page-title">Add New Award Category</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form id="category-form" class="add-new-post">
                        <!-- @csrf     -->
                        <input name="categoryTitle" class="form-control form-control-lg mb-3 inputs" type="text" placeholder="Category Title e.g Male Model">
                        <textarea name="categoryRequirement" id="editor-container" class="form-control form-control-lg add-new-post__editor mb-1 inputs py-3" placeholder="Insert category requirements"></textarea>
                        <!-- <div class="d-flex"> -->
                            <!-- <button id="category-form-submit" type="submit" class="btn btn-outline-primary my-3">Submit</button> -->
                        <!-- </div> -->
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
            </div>
          </div>
@endsection

@section('_scripts')
<!-- <script src="{{ asset('js/quill.min.js') }}"></script> -->
<script>
    let form = document.getElementById('category-form');
    form.addEventListener('submit', event => {
        event.preventDefault();
        alert('blebleble')
    })

    let submitBtn = document.getElementById('category-form-submit');
    submitBtn.addEventListener('click', event => {
        event.preventDefault();
        alert('alert alert')
    })
</script>
@endsection
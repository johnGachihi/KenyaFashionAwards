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
                    <form id="category-form" class="add-new-post" onsubmit="onSubmit(event)">
                        @csrf    
                        <input name="categoryTitle" class="form-control form-control-lg mb-3 inputs" type="text" placeholder="Insert Category Title e.g Male Model" onfocus="clearSubmitSuccessAnimation()">
                        <textarea name="categoryRequirements" id="editor-container" class="form-control form-control-lg add-new-post__editor mb-1 inputs py-3" placeholder="Insert category requirements" onfocus="clearSubmitSuccessAnimation()"></textarea>
                        <div class="d-flex align-items-center"> 
                            <button id="category-form-submit" type="submit" class="btn btn-outline-primary my-3">Submit</button>
                            <div id="submit-success" class="d-flex ml-5 align-items-center opacity-0 submit-success">
                              <i class="material-icons text-success font-weight-bold">done</i>
                              <span class="submit-success-text mx-1">Saved</span>
                            </div>
                        </div>
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

    const submitSuccess = document.querySelector('#submit-success');

    function onSubmit(event) {
      event.preventDefault();

      const form = document.getElementById('category-form');
      const formData = new FormData(form);
      for(let entry of formData.entries()) {
        console.log(entry[0], entry[1]);
      }

      postData('{{ url('admin/createCategory') }}', formData)
        .then(result => {
          console.log(result);
          if(!result['error']) {
            submitSuccessAnimation();
            form.reset();
          }
        })
    } 

    function postData(url, formData) {
      return fetch(url, {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
    }

    function submitSuccessAnimation() {
      let submitSuccess = document.querySelector('#submit-success');
      submitSuccess.classList.remove('opacity-0');
    }

    function clearSubmitSuccessAnimation() {
      let submitSuccess = document.querySelector('#submit-success');
      submitSuccess.classList.add('opacity-0');
    }

</script>
@endsection
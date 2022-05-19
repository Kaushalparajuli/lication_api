@extends('layouts.backend.app')

@section('content')
    <div class="mb-3">
        <a href="/admin/documentation" class="btn btn-outline-primary mb-3">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back
        </a>
    </div>
    <div class="d-flex justify-content-between">

        <h3 class="text-center">

            Add
        </h3>
    </div>


    <form class="row g-3 needs-validation" action='/admin/documentation' method="post">
        @csrf
        <div class="col-md-9">
            <label for="validationCustom01" class="form-label">First name</label>
            <input name="title" type="text" class="form-control" id="validationCustom01" required>

        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Status</label>
            <select name="status" class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option value="1">Active</option>
                <option value="2">Inactive</option>
            </select>
        </div>
        <div class="col-md-12">
            <label for="mytextarea" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="mytextarea" required></textarea>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>



    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
                        selector: '#mytextarea',
            plugins: [
'codesample','fullscreen',
                'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',

                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',

                'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help',
                'wordcount'

            ],
            toolbar: 'codesample undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help fullscreen'

        });


    </script>


@endsection

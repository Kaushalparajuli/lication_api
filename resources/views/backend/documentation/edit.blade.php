@extends('layouts.backend.app')

@section('content')
    <div class="mb-3">
        <a href="/admin/documentation" class="link mb-3">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back
        </a>
    </div>
    <div class="d-flex justify-content-between">

        <h3 class="text-center">
            Edit
        </h3>
    </div>


    <form class="row g-3 needs-validation" action='/admin/documentation/{{ $doc->id }}' method="post">
        @csrf
        @method('PUT')
        <div class="col-md-9">
            <label for="validationCustom01" class="form-label">Title</label>
            <input value="{{ $doc->title }}" name="title" type="text" class="form-control" id="validationCustom01"
                required>

        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Status</label>
            <select name="status" class="form-select" id="validationCustom04" required>
                <option value="1" @if ($doc->status == 1) selected @endif>Active</option>
                <option value="0" @if ($doc->status == 0) selected @endif>Inactive</option>
            </select>
        </div>
        <div class="col-md-12">
            <label for="mytextarea" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="mytextarea"
                required>  
            </textarea>
        </div>
        

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>



    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({

            selector: '#mytextarea',

            plugins: [

                'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',

                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',

                'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help',
                'wordcount'

            ],

            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +

                'alignleft aligncenter alignright alignjustify | ' +

                'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'

        });

    //    tinymce.activeEditor.setContent($doc->description);
    </script>
    
  
@endsection

@extends('layouts.backend.app')

@section('content')
    <div class="d-flex justify-content-between">
        <h3 class="text-center">Tokens</h3>
        <div class="button">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Create Token <i class="fa fa-plus"></i>
            </button>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Token</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/admin/tokens" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Token Name</label>
                            <input required type="text" class="form-control" name="name" id="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <table class="table  table-bordered table-striped table-hover mt-3">
        <thead class="">
            <th>#</th>
            <th>Name</th>
            <th>Token</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($tokens as $key => $token)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $token->name }}
                    </td>
                    <td>
                        {{ $token->token }}
                    </td>
                    <td>
                        <form action="/admin/tokens/{{ $token->id }}" method="post">
                            {!! method_field('delete') !!}
                            {!! csrf_field() !!}
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

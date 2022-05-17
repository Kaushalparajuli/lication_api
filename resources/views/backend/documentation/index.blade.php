@extends('layouts.backend.app')

@section('content')
    <div class="d-flex justify-content-between">
        <h3 class="text-center">Documentation</h3>
        <div class="button">
            <a href="/admin/documentation/create" class="btn btn-primary">
                Add <i class="fa fa-plus"></i>
            </a>

        </div>
    </div>



    <table class="table  table-bordered table-striped table-hover mt-3">
        <thead class="">
            <th>#</th>
            <th>Title</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($doc as $key => $item)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $item->title }}
                    </td>
                    <td>
                        @if ($item->status == 1)
                            <span class="badge bg-primary">
                                Active
                            </span>
                        @else
                            <span class="badge bg-danger">
                                Inactive
                            </span>
                        @endif


                    </td>
                    <td>
                        <a href="{{ route('documentation.edit', $item->id) }}" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form action="/admin/documentation/{{ $item->id }}" method="post">
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

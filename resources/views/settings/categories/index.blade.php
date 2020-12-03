@extends('layouts.app')

@section('title', 'Table Category | Toko Sepatu')

@section('titlePage', 'Table Category')

@section('content')
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
            Add
        </button>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5%">No</th>
                <th>Name</th>
                <th style="width: 20%">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $d->name }}</td>
                <td class="table-action">
                    <a href="{{ route('category.edit', $d->id) }}"><i class="fa fa-edit"></i></a>
                    <button class="btn" data-toggle="modal" data-target="#deleteModal"><i
                            class="fa fa-trash"></i></button>
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Data Category</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body m-3">
                                    <p class="mb-0">Apakah anda yakin ingin menghapusnya ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="{{ route('category.destroy', $d->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $data->links() }}
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Data Category</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3">
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

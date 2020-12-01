@extends('layouts.app')

@section('title', 'Table Customer | Toko Sepatu')

@section('titlePage', 'Table Customer')

@section('content')
<div class="card">
    <div class="card-header">
        {{-- <button class="btn btn-success">Add</button> --}}
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5%">No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $d->name }}</td>
                <td>{{ $d->user->email }}</td>
                <td class="table-action">
                    <button class="btn" data-toggle="modal" data-target="#deleteModal"><i
                            class="fa fa-trash"></i></button>
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Data Brand</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body m-3">
                                    <p class="mb-0">Apakah anda yakin ingin menghapusnya ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="{{ route('brand.destroy', $d->id) }}" method="post">
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
@endsection

@extends('layouts.app')

@section('title', 'Edit Brand | Toko Sepatu')

@section('titlePage', 'Edit Brand')

@section('content')
<div class="card">
    <form action="{{ route('brand.update', $brand->id) }}" method="post">
        @csrf
        @method('put')
        <div class="m-3">
            <div class="mb-3 row">
                <label class="col-form-label col-sm-2 text-sm-right">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{ $brand->name }}">
                </div>
            </div>
        </div>
        <a href="{{ route('brand.index') }}">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </a>
        <button type="submit" class="btn btn-success">Save</button>
        <div class="modal-footer">
        </div>
    </form>
</div>
@endsection

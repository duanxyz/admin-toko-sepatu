@extends('layouts.app')

@section('title', 'Table Item | Toko Sepatu')

@section('titlePage', 'Table Item')

@section('content')
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
            Add
        </button>
    </div>
    <div class="table-responsive">
        <table class="table mb-0 table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Category</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Kondisi</th>
                    <th scope="col">Terjual</th>
                    <th scope="col">Dilihat</th>
                    <th scope="col">Description</th>
                    <th class="fixed">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $d->name }}</td>
                    <td>Rp. {{ $d->price }}</td>
                    <td>{{ $d->stock }}</td>
                    <td>{{ $d->brand->name }}</td>
                    <td>{{ $d->category->name }}</td>
                    <td>{{ $d->weight }}</td>
                    <td>{{ $d->condition }}</td>
                    <td>{{ $d->sold }}</td>
                    <td>{{ $d->seen }}</td>
                    <td>{{ $d->description }}</td>
                    <td class="table-action">
                        <a href="{{ route('item.edit', $d->id) }}"><i class="fa fa-edit"></i></a>
                        <button class="btn" data-toggle="modal" data-target="#deleteModal"><i
                                class="fa fa-trash"></i></button>
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete Data Item</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body m-3">
                                        <p class="mb-0">Apakah anda yakin ingin menghapusnya ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <form action="{{ route('item.destroy', $d->id) }}" method="post">
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
</div>
{{ $data->links() }}
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('item.store') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Data Item</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3">
                    <input type="text" class="form-control mb-3" placeholder="Name" name="name">
                    <input type="number" class="form-control mb-3" placeholder="Price" name="price">
                    <input type="number" class="form-control mb-3" placeholder="Stock" name="stock">
                    <select class="form-control mb-3" name="brand_id">
                        <option selected="">Select Brand</option>
                        <option value="1">Convers</option>
                        <option value="2">3 Second</option>
                        <option value="3">Jack Joker</option>
                    </select>
                    <select class="form-control mb-3" name="category_id">
                        <option selected="">Select Category</option>
                        <option value="1">Pria</option>
                        <option value="2">Casual</option>
                        <option value="3">Sport</option>
                    </select>
                    <textarea class="form-control" rows="2" placeholder="Description" name="description"></textarea>
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

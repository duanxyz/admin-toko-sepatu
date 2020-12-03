@extends('layouts.app')

@section('title', 'Table Order | Toko Sepatu')

@section('titlePage', 'Table Order')

@section('content')
<div class="card">
    <div class="card-header">
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 5%">No</th>
                    <th>Nama Pembeli</th>
                    <th>Nama Sepatu</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $item->customer->name }}</td>
                    <td></td>
                    <td>Rp. {{ $item->total_price }}</td>
                    <td>{{ $item->status }}</td>
                    <td class="table-action">
                        {{-- <a href="#"><i class="align-middle" data-feather="trash"></i></a> --}}
                        <a href="#"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

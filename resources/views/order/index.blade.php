@extends('layouts.app')

@section('title', 'Table Order | Toko Sepatu')

@section('titlePage', 'Table Order')

@section('content')
<div class="card">
    <div class="card-header">
        <button class="btn btn-success">Add</button>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5%">No</th>
                <th>Nama Member</th>
                <th>Nama Sepatu</th>
                <th>Ukuran</th>
                <th>Jumlah</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Maulida Hanifa</td>
                <td>Sepatu Turning</td>
                <td>39</td>
                <td>1</td>
                <td class="table-action">
                    {{-- <a href="#"><i class="align-middle" data-feather="trash"></i></a> --}}
                    <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

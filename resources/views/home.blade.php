@extends('layouts.app')

@section('title', 'Toko Sepatu')

@section('titlePage', 'Dashboard')

@section('content')
<div class="card-header">Dashboard</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    You are logged in!
</div>
@endsection

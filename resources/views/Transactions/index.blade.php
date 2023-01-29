@extends('layouts.admin')

@section('content')
    <div>
        @livewire('transactions.index', ['user' => $user])
@endsection
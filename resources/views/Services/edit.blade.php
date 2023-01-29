@extends('layouts.admin')

@section('content')
    <div>
        @livewire('services.edit', ['service' => $service])
    </div>
@endsection
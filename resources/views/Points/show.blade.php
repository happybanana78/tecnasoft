@extends('layouts.admin')

@section('content')
    <div>
        @livewire('points.show', ['point' => $point])
    </div>
@endsection
@extends('layouts.dashboard')
@section('content')
@livewire('global.side-list', ['model' => 'App\Models\Product', 'title' => 'Products'])

@endsection
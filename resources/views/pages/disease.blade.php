@extends('layouts.app')
@section('content')

    @foreach($result as $key => $value)
        {{ $value->name }}

    @endforeach


@endsection

@extends('layouts.default')

@section('content')
@foreach($items as $item)
{{$item}}
@endforeach

@endsection
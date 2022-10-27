@extends('layout')

@section('content')

@if (count($listings) == 0)
    <p> No Listings Found </p>
@endif

@foreach ($listings as $listing)

{{-- cara lain untuk if statement --}}
{{-- @unless (count($listings) == 0)

@else <p> No Listings found </p>

@endunless --}}

<h2>
    <a href="/listings/{{$listing['id']}}">{{$listing['tittle']}}</a>
</h2>
<p>
    {{$listing['description']}}
</p>
@endforeach

@endsection

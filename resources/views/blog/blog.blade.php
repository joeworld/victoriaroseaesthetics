@extends('partials.master')
@section('title', 'Blog')
@section('page', '5fa686c7b73fbb4dd28a52dd')

@section('content')

<section>Blog List</section>

{{-- instagram --}}
    @include('partials.instagram')

    {{-- gift card --}}
    @include('partials.giftcard')

@endsection

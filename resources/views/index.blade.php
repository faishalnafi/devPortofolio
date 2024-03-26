@extends('layouts.main')

@section('hero')
    @include('partials.hero')
@endsection

@section('conten')
    @include('partials.about')
    @include('partials.counts')
    @include('partials.value')
    @include('partials.feature')
    @include('partials.faq')
    @include('partials.teams')
    @include('partials.company')
    @include('partials.tech')
    @include('partials.contacs')
    @include('partials.footer')
@endsection

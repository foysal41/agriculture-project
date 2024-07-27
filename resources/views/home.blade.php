@extends('layout.app')

@section('content')
    @include('component.homepage.hero')
    @include('component.homepage.about')
    @include('component.homepage.features')
    @include('component.homepage.product')
    @include('component.homepage.faq')

@endsection
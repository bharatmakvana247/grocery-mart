@extends('frontend.layouts.master')
@section('frontend.title')
    Dashboard
@endsection
@section('frontend.Content')
    <!-- top Products -->
    @include('frontend.pages.Dashboard.topProducts')

    <!-- special offers -->
    @include('frontend.pages.Dashboard.specialOffers')
@endsection
@section('frontend.styles')
@endsection
@section('frontend.scripts')
@endsection

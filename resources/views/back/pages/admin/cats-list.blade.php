@extends('back.layout.pages-layout')
@section('pageTitle',isset($pageTitle) ? $pageTitle : 'Page title here')
@section('content')
    @livewire('admin-categories-list')
@endsection

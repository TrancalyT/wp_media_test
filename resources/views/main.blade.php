@extends('layouts.app');

@section('content')
    @include('pages.news', ['newsData' => $news])
    @include('pages.tour', ['tourData' => $tour])
    @include('pages.albums', ['albumsData' => $albums])
@endsection
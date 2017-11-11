@extends('layouts.layout')

@section('content')
	@include('info.service')
		@include('info.plans')
	@include('info.carousel')
@endsection

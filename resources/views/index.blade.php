@extends('layout')

@section('title',"Welcome")

@section('slider')
@include('slider')
@stop

@section('content')
@include('about')
@include('works')
@include('testimonials')
@include('services')
@stop
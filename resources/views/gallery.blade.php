@extends('layout')

<?php 
$page = "Gallery";
?>

@section('title',"Gallery")

@section('slider')
@include('secondary-slider')
@stop

@section('content')
@include('gallery-content')
@stop
@extends('errors::illustrated-layout')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
@section('image', asset('public/images/404.svg'))
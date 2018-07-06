<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 06.07.18
 * Time: 15:55
 */
?>

@extends('layouts.admin')

@section('data')
    <h1>{{ $user->exists ? "Edit" : "Create"  }} user {{ $user["name"] }}</h1>
    @include('partials.errors')
    {{ Form::model($user, ['route' => ["admin.user.store"]]) }}
        {{ Form::bsText('name', ["placeholder" => "Enter your name"]) }}
        {{ Form::bsText('email', ["placeholder" => "Enter email"]) }}
        {{ Form::bsPassword('password', ["placeholder" => "Password"]) }}
        {{ Form::bsPassword('password_confirmation', ["placeholder" => "Password confirmation"]) }}
        {{ Form::bsSubmit('Submit') }}
    {{ Form::close() }}
@endsection

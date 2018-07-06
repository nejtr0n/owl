<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 06.07.18
 * Time: 15:35
 */
?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <nav id="sidebar">
                    <ul class="list-unstyled components">
                        <li>
                            <a href="{{ route("admin.home") }}">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route("admin.user.index") }}">Users</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-10">
                @include('flash::message')
                {{ Breadcrumbs::render() }}
                @yield('data')
            </div>
        </div>
    </div>
@endsection

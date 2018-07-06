<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 06.07.18
 * Time: 15:32
 */
?>
@extends('layouts.admin')

@section('data')
    <h1>User list</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Registration data</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @php($i=0)
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $user["name"] }}</td>
                <td>{{ $user["email"] }}</td>
                <td>{{ $user["created_at"] }}</td>
                <td>
                    <a href="{{ route("admin.user.edit", $user) }}" class="btn btn-info" title="Edit">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route("admin.user.delete", $user) }}" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure?')">
                        <i class="fa fa-remove" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
    <a href="{{ route("admin.user.create") }}" class="btn btn-success" title="Edit">
        <i class="fa fa-plus" aria-hidden="true"></i> Создать
    </a>
@endsection

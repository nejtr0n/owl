<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 06.07.18
 * Time: 16:51
 */

Breadcrumbs::for('admin.home', function ($trail) {
    $trail->push('Home', route('admin.home'));
});

Breadcrumbs::for('admin.user.index', function ($trail) {
    $trail->parent('admin.home');
    $trail->push('List', route('admin.user.index'));
});

Breadcrumbs::for('admin.user.create', function ($trail) {
    $trail->parent('admin.user.index');
    $trail->push('Create', route('admin.user.create'));
});

Breadcrumbs::for('admin.user.edit', function ($trail, $user) {
    $trail->parent('admin.user.index');
    $trail->push(sprintf("Edit %s", $user["email"]), route('admin.user.edit', $user));
});

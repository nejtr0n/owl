<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 06.07.18
 * Time: 16:18
 */
?>
@if(!empty($errors = session("errors")))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            {!! $error !!}
        </div>
    @endforeach
@endif

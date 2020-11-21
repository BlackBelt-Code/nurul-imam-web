@extends('master.index')

@section('content')
<?php $title = 'Create Form Guru'; ?>
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4>form input create guru</h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                       @include('pages.teachers._form', ['program' => $program])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('master.index') @section('content')
<div class="container-fluid">
    <div class="col-md-12"> {!! Form::open(['url' => 'app/teachers/update/', $program->id, 'method' => 'POST']) !!}
        <!-- <form action="app/programs/update/" method="post"> -->
        @include('pages.teachers._form_setting')
        <!-- </form> -->

        {!! Form::close() !!}
    </div>
</div>
@endsection
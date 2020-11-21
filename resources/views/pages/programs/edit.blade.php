@extends('master.index')
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        {{-- {!! Form::open(['url' => 'app/programs/update/', $program->id, 'method' => 'POST']) !!} --}}
        <form action="{{ route('apps-programs-update', ['id' => $program->id]) }}" method="post">
            @include('pages.programs._update')
        </form>

        {{-- {!! Form::close() !!} --}}
    </div>
</div>
@endsection
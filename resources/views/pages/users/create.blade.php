@extends('master.index') @section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card_body">
            <form action="{{ route('apps-users-post') }}" method="post">
                @include('pages.users._form')
            </form>
        </div>
    </div>
</div>

@endsection
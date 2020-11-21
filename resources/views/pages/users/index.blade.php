@extends('master.index') @section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="card">
            @include('pages.users._alert')
            <div class="table-responsive card-body">
                @role('admin')
                <p>
                    <a href="{{ route('apps-register') }}" class="btn btn-sm btn-primary">Create New Users</a
                    >
                </p>  @endrole {!! $html->table(['class' => 'table
                table-bordered table-hover', 'id' => 'data_users_side'], true)
                !!}
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#data_users_side").DataTable({
            processing: true,
            serverSide: true,
            columns: [
                {
                    data: "name",
                    name: "name"
                },
                {
                    data: "email",
                    name: "email"
                },
                {
                    data: "roleuser.role.name",
                    name: "name"
                },
                { data: "action", name: "action", "bSearchable": false }
            ]
        });
    });
</script>
@endsection
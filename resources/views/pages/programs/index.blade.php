@extends('master.index') @section('content')
<div class="container-fluid">
    <div class="col md-12">
        <div class="form-group">
            @include('pages.programs._alert')
            <div class="card">
                <div class="card-header border-transparent">
                    <label for="" style="
                    color: black;
                    cursor: pointer;
                    vertical-align: middle;
                ">
                        Form Input Program Unggulan
                    </label>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="table-responsive card-body p-0">
                    <div id="form-input"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <a href="#" class="btn btn-sm btn-primary" onclick="loadFormPrograms()">Create Program Unggulan</a
        >
    </div>
    <div class="card">
        <div class="table-responsive card-body">
            {!! $html->table(['class' => 'table table-bordered table-hover',
            'id' => 'data_users_side' ]) !!}
        </div>
    </div>
    >
</div>
<script type="application/javascript">
    function loadFormPrograms() {
        event.preventDefault();
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(
                    "form-input"
                ).innerHTML = this.responseText;
            } else {
            }
        };
        $(document).Toasts("create", {
            class: "bg-info",
            title: "Show Form Input",
            subtitle: "Subtitle",
            body: "Show Form Input Success"
        });
        xhttp.open("GET", "/app/programs/create/", true);
        xhttp.send();
    }

    function myFunction() {
        var choice = confirm("Do you really want to delete this record?");
        if (choice === true) {
            $(document).Toasts("create", {
                class: "bg-success",
                title: "Toast Title",
                subtitle: "Subtitle",
                body: "Delete Success"
            });
            return true;
        }
        return false;
    }

    $(function() {
        $("#data_users_side").DataTable({
            processing: true,
            serverSide: true,
            columns: [
                {
                    data: "time_programs",
                    name: "time_programs"
                },
                {
                    data: "time",
                    name: "time"
                },
                {
                    data: "person_charge",
                    name: "person_charge"
                },
                {
                    data: "desc_activitie",
                    name: "desc_activitie"
                },
                {
                    data: "evaluation_activitie",
                    name: "evaluation_activitie"
                },
                {
                    data: "action",
                    name: "action",
                    searchable: false,
                    orderable: false
                }
            ]
        });
    });
</script>
@endsection
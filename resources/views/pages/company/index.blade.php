@extends('master.index') @section('content')
<div class="container-fluid">
    <div class="col-md-12">
        @include('pages.company._alert') @role('admin')
        <div class="card">
            <div class="card-header border-transparent">
                <label for="" style="
                    color: black;
                    cursor: pointer;
                    vertical-align: middle;
                ">
                    Form Input Company
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
        <div class="form-group">
            <a href="#" onclick="loadFormCompany()" class="btn btn-sm btn-primary">Create Company</a
            >
        </div>
        @endrole
        <div class="card">
            <div class="card-body">
                {!! $html->table(['class' => 'table table-bordered
                table-hover','id' => 'company', 'style' => ' vertical-align:
                middle;'], true) !!}
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#company").DataTable({
            processing: true,
            serverSide: true,
            columns: [
                {
                    data: "id",
                    name: "id"
                },
                {
                    data: "company_name",
                    name: "company_name",
                    bSearchable: false
                },
                {
                    data: "created_at",
                    name: "created_at",
                    bSearchable: false,
                    render: function(data, type, row) {
                        if (type === "sort" || type === "type") {
                            return data;
                        }
                        return moment(data).format("MM-DD-YYYY HH:mm");
                    }
                },
                {
                    data: "updated_at",
                    name: "updated_at",
                    bSearchable: false,
                    render: function(data, type, row) {
                        if (type === "sort" || type === "type") {
                            return data;
                        }
                        return moment(data).format("MM-DD-YYYY HH:mm");
                    }
                },
                {
                    data: "action",
                    name: "action",
                    bSearchable: false
                }
            ]
        });
    });

    function loadFormCompany() {
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
        xhttp.open("GET", "/app/company/create/", true);
        xhttp.send();
    }
</script>
@endsection
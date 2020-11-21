@extends('master.index') @section('content')
<div class="container-flud">
    <div class="col-md-12">
        <div class="row">
            @role(['admin', 'member'])
            <a class="btn btn-app" href="{{ route('apps-company') }}"><span class="badge bg-success">{{ $company->count() }}</span>
                <i class="fas fa-arrow-left"></i> Back
            </a> @endrole @role('admin')
            <a class="btn btn-app" href="{{ route('apps-company') }}">
                <span class="badge bg-success">{{ $company->count() }}</span>
                <i class="fas fa-barcode"></i> Company
            </a>
            <a class="btn btn-app" onclick="loadFormCompany()"><span class="badge bg-success">{{ $company->count() }}</span>
                <i class="fas fa-edit"></i> Edit
            </a>
            <a class="btn btn-app" href="{{ route('apps-company-delete', ['id' => $company->id]) }}">
                <span class="badge bg-success">{{ $company->count() }}</span>
                <i class="fas fa-trash"></i> Delete
            </a>
            @endrole
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th colspan="4" style="text-align: center;">
                                        Company Detail
                                    </th>
                                </tr>
                                <th>
                                    Code Company
                                </th>
                                <th>
                                    Company Name
                                </th>
                                <th>
                                    Created
                                </th>
                                <th>
                                    Updated
                                </th>
                            </thead>
                            <tbody>
                                <td>
                                    {{ $company->id }}
                                </td>
                                <td>
                                    {{ $company->company_name }}
                                </td>
                                <td>
                                    {{ $company->created_at }}
                                </td>
                                <td>
                                    {{ $company->updated_at }}
                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <a href="{{ route('apps-company') }}" style="width: 100%;" class="btn btn-sm btn-info">Back</a
                            >
                        </div>
                        <div class="form-group">
                            <a
                                href="#"
                                style="width: 100%;"
                                class="btn btn-sm btn-success"
                                onclick="loadFormCompany()"
                                >Edit</a
                            >
                        </div>
                        <div class="form-group">
                            <a
                                href="{{ route('apps-company-delete', ['id' => $company->id]) }}"
                                style="width: 100%;"
                                class="btn btn-sm btn-danger"
                                >delete</a
                            >
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

<div id="form-input"></div>
<script>
    function loadFormCompany() {
        event.preventDefault();
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(
                    "form-input"
                ).innerHTML = this.responseText;
            } else {}
        };
        $(document).Toasts("create", {
            class: "bg-info",
            title: "Show Form Input",
            subtitle: "Subtitle",
            body: "Show Form Input Success"
        });
        xhttp.open("GET", "/app/company/edit/{{ $company->id }}", true);
        xhttp.send();
    }
</script>
@endsection
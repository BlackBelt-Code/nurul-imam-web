@extends('master.index') @section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col md-12">
                <div class="card">
                    <div class="card-header border-transparent">
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="form-login">
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                @include('pages.subjectlist._alert')
                <a href="#" class="btn btn-sm btn-primary" style="margin-bottom: 10px;" onclick="loadFormSubject()">Create Subject</a>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <tr>
                                        <th colspan="8" style="text-align: center;">subject table</th>
                                    </tr>
                                    <th>Number</th>
                                    <th>Study Name</th>
                                    <th>Study Description</th>
                                    <th>times</th>
                                    <th>count times</th>
                                    <th colspan="3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($subject->count()) @foreach($subject as $item)
                                <tr>
                                    <td>
                                        {{ $item->id }}
                                    </td>
                                    <td>
                                        {{ $item->study["study_name"] }}
                                    </td>
                                    <td>
                                        {{ $item->study["study_desc"] }}
                                    </td>
                                    <td>{{ $item->times }} minutes</td>
                                    <td>{{ $item->count_times }} jam</td>
                                    <td style="width: 2px;">
                                        <a href=""><i class="fa fa-eye" aria-hidden="true"></a></i>
                                    </td>
                                    <td style="width: 2px;">
                                        <a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    </td>
                                    <td style="width: 2px;">
                                        <a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endforeach @else
                                <tr>
                                    <td colspan="4" style="text-align: center;">Available</td>
                                </tr>

                                @endif
                            </tbody>
                        </table>
                        <hr> {{ $subject->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="application/javascript">
    function loadFormSubject() {
        event.preventDefault();
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("form-login").innerHTML = this.responseText;
            } else {}
        };
        xhttp.open("GET", "/app/subject/create/", true);
        xhttp.send();
    }
</script>
@endsection
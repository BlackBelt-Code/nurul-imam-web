@extends('master.index') @section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="form-group">
            {{$rpp->links() }}
        </div>

        <div class="card">
            <div class="card-body">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Terdapat : {{ $rpp->count() }} Rencana pelaksana pembelajaran
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row mt-4">
                            @foreach($rpp as $item)
                            <div class="col-sm-4" style="margin-top: 10px;">
                                <div class="position-relative p-3 bg-gray" style="height: 180px;">
                                    <div class="ribbon-wrapper ribbon-lg">
                                        <div class="ribbon bg-success text-lg" style="cursor: pointer;">
                                            <a href="#" id="{{ $item->id }}" onclick="loadStudent(this)">{{ $item->study["study_name"] }}</a
                                            >
                                        </div>
                                    </div>
                                    <td>
                                        <div class="card-footer card-comments">
                                            <img
                                                class="img-circle img-sm"
                                                src="{{
                                                    asset('asset/img/icon.PNG')
                                                }}"
                                                alt="User Image"
                                            />
                                            <div class="comment-text">
                                                <span class="username">
                                                    {{ $item->study["study_desc"] }}
                                                    <span
                                                        class="text-muted float-right"
                                                    ></span>
                                                </span>
                                                {{ $item->study["study_desc"] }}
                                                <br />
                                                {{ $item->class["class_name"] }}
                                                <br />
                                                <small
                                                    >{{ \Illuminate\Support\Str::limit($item->sumber_belajar, $limit = 20, $end = ' ...') }}</small
                                                >
                                                <span
                                                    class="badge badge-primary"
                                                    >{{ \Illuminate\Support\Str::limit($item->tujuan, $limit = 20, $end = ' ...') }}</span
                                                >
                                                <br />
                                                <span
                                                    class="badge badge-primary"
                                                    >{{ $item->alokasi_waktu }}</span
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header border-transparent">
                <label
                    for=""
                    style="
                        color: black;
                        cursor: pointer;
                        vertical-align: middle;
                    "
                >
                    &nbsp;&nbsp;Download Excel Rencana Pelaksana Pembelajaran
                    <a
                        class="float-left"
                        style="margin-left: 5px; cursor: pointer;"
                        href="{{ route('apps-rpp-export') }}"
                        ><i class="fas fa-download"></i></a
                ></label>
                <div class="card-tools">
                    <button
                        type="button"
                        class="btn btn-tool"
                        data-card-widget="collapse"
                    >
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <div
                    class="table table-bordered table-stripped table-responsive"
                >
                    <div id="nav"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function loadStudent(item) {
        event.preventDefault();
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("nav").innerHTML = this.responseText;
            } else {
            }
        };
        xhttp.open("GET", "/app/rpp/show/" + $(item).attr("id"), true);
        xhttp.send();
    }
</script>

@endsection
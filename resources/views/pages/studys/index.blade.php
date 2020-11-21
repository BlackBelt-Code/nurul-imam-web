@extends('master.index') @section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <tr>
                                        <th colspan="6" style="text-align: center;">Study table</th>
                                    </tr>
                                    <th>Number</th>
                                    <th>Study Name</th>
                                    <th>Study Description</th>
                                    <th colspan="3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($study->count()) @foreach($study as $item)
                                <tr>
                                    <td>
                                        {{ $item->id }}
                                    </td>
                                    <td>
                                        {{ $item->study_name }}
                                    </td>
                                    <td>
                                        {{ $item->study_desc }}
                                    </td>
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
                        <hr> {{ $study->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="">
                            @include('pages.classes.index')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
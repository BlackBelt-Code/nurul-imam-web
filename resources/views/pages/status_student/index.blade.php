@extends('master.index') @section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <tr>
                            <th colspan="8" style="text-align: center;">status student</th>
                        </tr>
                        <th>Status Students</th>
                        <th colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if($status_student ->count()) @foreach($status_student as $item)
                    <tr>
                        <td>
                            {{ $item->status_student_name }}
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
        </div>
    </div>
</div>
@endsection
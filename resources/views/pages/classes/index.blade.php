<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <tr>
                <th colspan="5" style="text-align: center;">Class table</th>
            </tr>
            <th>No</th>
            <th>Class</th>
            <th colspan="3" style="text-align: center;">Action</th>
        </tr>
    </thead>
    <tbody>
        @if($classes->count()) @foreach($classes as $item)
        <tr>
            <td>
                {{ $item->id }}
            </td>
            <td>
                {{ $item->class_name }}
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
            <td colspan="3" style="text-align: center;">available</td>
        </tr> @endif
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Class</th>
            <th colspan="3" style="text-align: center;">Action</th>
        </tr>
    </tfoot>
</table>
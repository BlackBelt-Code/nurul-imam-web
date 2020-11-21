@extends('master.index') @section('content')
<div class="container-fluid">
    <div class="col md-12">
        <table>
            <thead>
                <th>id</th>
            </thead>
            <tbody>
                @foreach('$rpp as $item')
                <tr>
                    <td>{{ $item->id }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
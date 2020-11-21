@extends('master.index') @section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div id="notif"></div>
        @include('notifications._alert')
        <div class="card">
            <div class="col-md-12">
                <div class="card-body">
                    <a href="" class="btn btn-sm btn-primary" onclick="loadStudent()">Show Form Notification</a
                    >
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-stripped table-hover">
                    <thead>
                        <tr>
                            <th>To Users</th>
                            <th>Notifications Title</th>
                            <th>Notification Body</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lesson as $notifications)
                        <tr>
                            <td>{{ $notifications->user["name"] }}</td>
                            <td>
                                {{ $notifications->title }}
                            </td>
                            <td>
                                {{ $notifications->body }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $lesson->links() }}
        </div>
    </div>
</div>

<script type="application/javascript">
    function loadStudent(item) {
        event.preventDefault();
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("notif").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "/app/notifications/create/", true);
        xhttp.send();
    }
</script>

@endsection
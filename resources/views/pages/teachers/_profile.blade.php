<div class="card card-primary card-outline">
    <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="{{ asset('asset/img/icon.PNG') }}" alt="User profile picture">
        </div>
        <h3 class="profile-username text-center">{{ $teacher[0]->full_name }}</h3>
        <p class="text-muted text-center">
            @if($teacher[0]->education != null) {{ $teacher[0]->education->education_name }} @else {{ 'tidak ada' }} @endif
        </p>

        <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
                <b>First Name</b> <a class="float-right">{{ $teacher[0]->first_name }}</a>
            </li>
            <li class="list-group-item">
                <b>Last Name</b> <a class="float-right">{{ $teacher[0]->last_name }}</a>
            </li>
            <div id="nik-error"></div>
            <li class="list-group-item">
                <b>NIK</b> <a class="float-right">@if($teacher[0]->nik != null) {{ $teacher[0]->nik->nik }} @else <a href="javascript:void(null)" class="float-right inline-nik" data-type="text" data-name="nik" data-pk="{{ $teacher[0]->id }}">{{ 'Input NIK' }}</a>
                </a> @endif</a>

            </li>
        </ul>

        <a href="{{ route('apps-teacher') }}" class="btn btn-primary btn-block"><b>Back</b></a>
    </div>
    <!-- /.card-body -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.inline-nik').editable({
            mode: 'inline',
            url: '{{ route("apps-teacher-nik") }}',
            type: 'POST',
            pk: "{{ $teacher[0]->id }}",
            name: 'nik',
            title: 'Enter name',
            success: function(data) {
                Toast.fire({
                    icon: 'success',
                    title: 'Update NIK Success !!'
                })
            },

            error: function() {
                Toast.fire({
                    icon: 'error',
                    title: 'Check Your NIK !!'
                })
            }

        });

        // 
    });
</script>
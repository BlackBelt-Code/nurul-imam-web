<style>
    .editable-buttons {
        display: inline-block;
        vertical-align: top;
        margin-left: 7px;
        zoom: 1;
        display: inline;
    }
</style>
<div class="card card-primary">
    <div class="card-header">
        <div id="form-messages" class="alert success" role="alert" style="display: none;"></div>
        <h3 class="card-title">About Me</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <strong><i class="fas fa-book mr-1"></i> KTP</strong>

        <p class="text-muted">
            @if($teacher[0]->ktp != null) {{ $teacher[0]->ktp->nomor_ktp }} @else {{ 'tidak ada' }} @endif
        </p>

        <hr>

        <strong><i class="fas fa-map-marker-alt mr-1 "></i>Address</strong>

        <p class="text-muted ">
            <a href="javascript:void(null)" class="inline-edit" data-type="text" data-name="address" data-pk="{{ $teacher[0]->id }}">{{ $teacher[0]->address }}</a>
            </a>
        </p>

        <hr>

        <strong><i class="fas fa-pencil-alt mr-1 "></i> Cerfiticate</strong>

        <p class="text-muted ">
            <span class="tag tag-danger ">@if($teacher[0]->certificate != null) {{ $teacher[0]->certificate->no_certificate }} @else {{ 'tidak ada' }} @endif</span>
        </p>

        <hr>

        <strong><i class="far fa-file-alt mr-1 "></i>UNPTK</strong>

        <p class="text-muted ">@if($teacher[0]->unptk){{ $teacher[0]->unptk->no_nuptk }} @else {{ 'tidak ada' }} @endif</p>
    </div>
    <!-- /.card-body -->
</div>
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

        $('.inline-edit').editable({

            mode: 'inline',
            url: '{{ url("app/teachers/update/data") }}',

            type: 'POST',

            pk: "{{ $teacher[0]->id }}",

            name: 'address',

            title: 'Enter name',
            success: function(data) {
                Toast.fire({
                    icon: 'success',
                    title: 'Update Address Success !!'
                })
            },

            error: function(error) {
                console.log(error);
                Toast.fire({
                    icon: 'error',
                    title: 'Check Your Address !!'
                })
            }

        });
    });
</script>
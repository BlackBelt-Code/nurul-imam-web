<div class="row">
    <div class="col md-12">
        @include('pages.teachers._alert')
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-transparent">
                <h3 class="card-title">Daftar Siswa SMK Nurul Iman</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>

                    <a href="{{ route('apps-teacher-create') }}" class="btn btn-sm btn-info float-left ">Place New Order</a
                    >
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table table-bordered table-stripped table-responsive">
                    <table class="table m-0" style="table-layout: fixed;">
                        <thead>
                            <tr>
                                <tr>
                                    <th rowspan="2" style="vertical-align : middle;text-align:center;">NIK</th>
                                    <th colspan="1" style="text-align: center; ">Teacher Name</th>
                                    <th colspan="4" style="text-align: center; ">Other</th>
                                </tr>
                                <th>Full Name</th>
                                <th>Teachers Date</th>
                                <th>Address</th>
                                <th>Education</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($teacher as $item)
                            <tr class="data-row">
                                
                                @if($item->nik["nik"])
                                <td class="nisn">{{ $item->nik["nik"] }}</td>
                                @else
                                <td><span class="badge badge-warning" style="width: 100%;">NIK Belum Update</span></td>
                    @endif
                    <td class="first_name">{{ $item->full_name }}</td>
                    <td class="birth">{{ $item->date_of_birth->format('M d Y') }}</td>
                    <td class="address">{{ \Illuminate\Support\Str::limit($item->address, $limit = 50, $end = ' ...') }}</td>
                    <td>{{ $item->programstudy["name_program_study"] }}</td>
                    <td style="width:1%;">
                        <a href="{{ route('apps-teacher-show', $item->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></i>
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    <i class="fa fa-trash" aria-hidden="true"></i></td>
                    </td>

                    </tr>
                    @empty
                    <td>No Data</td>
                    @endforelse
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer clearfix ">
                {{ $teacher->links() }}
            </div>
        </div>
    </div>
</div>
{{-- Modals --}}
<div class="modal fade" id="edit-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-modalLabel">
                    Show Teachers
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-text-width"></i> Description Teacher Detail
                        </h3>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-4"><label for="nisn_modal">NISN</label></dt>
                            <dd class="col-sm-8"><input type="text" class="form-control" id="nisn_modal"></dd>
                            <dt class="col-sm-4"><label for="first_name_modal">First Name</label></dt>
                            <dd class="col-sm-8"><input type="text" class="form-control" id="first_name_modal"></dd>
                            <dt class="col-sm-4"><label for="last_name_modal">First Name</label></dt>
                            <dd class="col-sm-8"><input type="text" class="form-control" id="last_name_modal"></dd>
                            <dt class="col-sm-4"><label for="full_name_modal">First Name</label></dt>
                            <dd class="col-sm-8"><input type="text" class="form-control" id="full_name_modal"></dd>
                            <dt class="col-sm-4"><label for="email_modal">First Name</label></dt>
                            <dd class="col-sm-8"><input type="text" class="form-control" id="email_modal"></dd>
                            <dt class="col-sm-4"><label for="birth_modal">First Name</label></dt>
                            <dd class="col-sm-8"><input type="text" class="form-control" id="birth_modal"></dd>
                            <dt class="col-sm-4"><label for="address_modal">First Name</label></dt>
                            <dd class="col-sm-8"><input type="text" class="form-control" id="address_modal"></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit NISN -->
<div class="modal fade" id="edit-modal-nisn" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-modal-nisnLabel">
                    Show Teachers
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-text-width"></i> Input NISN Teacher
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="form-group">
                                <input type="text" id="id" name="id" hidden>
                                <label for="">Teacher Name</label>
                                <input type="text" id="first_name_modal-nisn" readonly class="form-control" placeholder="Teacher name">
                            </div>
                            <div class="form-group">
                                <label for="">NISN Number</label>
                                <input type="text" class="form-control" name="nisn" placeholder="NISN Number" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" style="width: 100%;" class="btn btn-sm btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
</script>

@push('scripts')
<script type="application/javascript">
    $(document).ready(function() {

        $(document).on("click", "#edit-item-nisn", function() {
            $(this).addClass("edit-item-trigger-clicked");
            let options = {
                backdrop: "static",
            };
            $("#edit-modal-nisn").modal(options);
        });

        $("#edit-modal-nisn").on("show.bs.modal", function() {
            let el = $(".edit-item-trigger-clicked");
            let row = el.closest(".data-row");

            let id = el.data("item-id");
            let first_name = row.children(".first_name").text();

            $("#id").val(id);
            $("#first_name_modal-nisn").val(first_name);
        });

        $("#edit-modal-nisn").on("hide.bs.modal", function() {
            $(".edit-item-trigger-clicked").removeClass(
                "edit-item-trigger-clicked"
            );
            $("#edit-form-nisn").trigger("reset");
        });

        $(document).on("click", "#edit-item", function() {
            $(this).addClass("edit-item-trigger-clicked");
            let options = {
                backdrop: "static",
            };
            $("#edit-modal").modal(options);
        });

        $("#edit-modal").on("show.bs.modal", function() {
            let el = $(".edit-item-trigger-clicked");
            let row = el.closest(".data-row");

            let id = el.data("item-id");
            let first_name = row.children(".first_name").text();
            let last_name = row.children(".last_name").text();
            let full_name = row.children('.full_name').text();
            let nisn = row.children(".nisn").text();
            let birth = row.children(".birth").text();
            let email = row.children(".email").text();
            let address = row.children(".address").text();

            $("#id").val(id);
            $("#first_name_modal").val(first_name);
            $("#last_name_modal").val(last_name);
            $("#full_name_modal").val(full_name);
            $('#nisn_modal').val(nisn);
            $('#birth_modal').val(birth);
            $('#address_modal').val(address);
            $("#email_modal").val(email);
        });

        $("#edit-modal").on("hide.bs.modal", function() {
            $(".edit-item-trigger-clicked").removeClass(
                "edit-item-trigger-clicked"
            );
            $("#edit-form").trigger("reset");
        });
    });
</script>

@endpush
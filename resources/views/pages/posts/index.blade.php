@extends('master.index') @section('content')
<div class="col md-12">
    @include('pages.posts._alert')
</div>
<div class="col-md-12" style="margin-top: 10px;">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-stripped">
                <thead>
                    <tr>
                        <td colspan="3">
                            <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#staticBackdrop">Tambah Data Posts</a
                            >
                        </td>
                    </tr>
                    <tr>
                        <th>title</th>
                        <th>content</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $item)
                    <tr class="data-row">
                        <td class="title">{{ $item->title }}</td>
                        <td class="content">{{ $item->content }}</td>
                        <td style="text-align: center;">
                            <a
                                href="#"
                                id="edit-item"
                                data-item-id="{{ $item->id }}"
                                ><i class="fa fa-pencil" aria-hidden="true"></i
                            ></a>
                            <a href="{{ route('about-delete', $item->id) }}"><i class="fa fa-trash" aria-hidden="true"></i
                            ></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" style="text-align: center;">
                            No data
                        </td>
                    </tr>
                    @endforelse
                    </tbody>
            </table>
            {{-- pagination --}}
            <div style="text-align: left;">
                {{ $posts->links() }} {{-- Halaman : {{ $posts->currentPage() }} --}}
            </div>
        </div>
    </div>
</div>
{{-- Modals --}}
<div class="modal fade" id="edit-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-modalLabel">
                    Modal title
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('apps-about-update') }}" method="POST">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="hidden" id="id" name="id" placeholder="id" class="form-control" />
                        <input type="text" id="title" name="title" placeholder="Title" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="content">Title</label>
                        <textarea type="text" id="content" name="content" placeholder="content" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('pages.posts.modal') {{-- Modals --}}
<script>
    $(document).ready(function() {
        /**
         * for showing edit item popup
         */

        $(document).on("click", "#edit-item", function() {
            $(this).addClass("edit-item-trigger-clicked"); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

            let options = {
                backdrop: "static",
            };
            $("#edit-modal").modal(options);
        });

        // on modal show
        $("#edit-modal").on("show.bs.modal", function() {
            let el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
            let row = el.closest(".data-row");

            // get the data
            let id = el.data("item-id");
            let title = row.children(".title").text();
            let content = row.children(".content").text();

            // fill the data in the input fields
            $("#id").val(id);
            $("#title").val(title);
            $("#content").val(content);
        });

        // on modal hide
        $("#edit-modal").on("hide.bs.modal", function() {
            $(".edit-item-trigger-clicked").removeClass(
                "edit-item-trigger-clicked"
            );
            $("#edit-form").trigger("reset");
        });
    });
</script>
@endsection
<div class="col-md-12">
    <div class="card" id="newsHeading">
        <div class="card-header container-fluid">
            <div class="row">
                <div class="col">
                    <h3>News Items</h3>
                </div>
                <div class="col">
                    <button type="button" data-dismiss="card" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('apps-notifications-push') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="first_name">Times</label>
                        <textarea type="text" class="form-control" id="times" name="title" placeholder="Title" required></textarea>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="first_name">Count Times</label>
                        <textarea type="text" class="form-control" id="times" name="body" placeholder="Body" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <hr />
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" style="width: 100%;" class="btn btn-success">
                        Send Notification
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function close() {
        alert("a");
    }
</script>
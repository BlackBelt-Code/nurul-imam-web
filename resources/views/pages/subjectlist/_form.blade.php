<div class="card-body">
    <form action="{{ route('apps-subject-store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first_name">Times</label>
                <input type="text" class="form-control" id="times" name="times" placeholder="Times" required />
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Study Times</label>
                <input type="text" class="form-control" id="study_time" name="study_time" placeholder="Study Times" required />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="first_name">Count Times</label>
                <input type="text" class="form-control" id="count_times" name="count_times" placeholder="Count Times" required />
            </div>

            <div class="form-group col-md-6">
                <label for="">Program Study</label>
                <select id="study_id" name="study_id" class="custom-select">
                    @foreach($study as $item)
                    <option
                        value="{{ $item->id }}"
                        >{{ $item->study_name }}</option
                    >
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group col-md-6">
            <button type="submit" style="width: 100%;" class="btn btn-success">
                Save
            </button>
        </div>
    </form>
</div>
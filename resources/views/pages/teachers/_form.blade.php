<form action="{{ route('apps-teacher-store') }}" method="POST">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">first name</label>
                <input type="text" class="form-control" placeholder="input first name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="">last name</label>
                <input type="text" class="form-control" placeholder="input first name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="">full name name</label>
                <input type="text" class="form-control" placeholder="input first name" name="full_name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Program Study</label> @foreach($program as $items)
                <select name="program" class="custom-select">
                    <option value="{{ $items->id }}">{{ $items->name_program_study }}</option>
                  </select> @endforeach
            </div>
            <div class="form-group">
                <label for="">date</label>
                <input type="date" class="form-control" placeholder="input first name" name="date" required>
            </div>
            <div class="form-group">
                <label for="">address</label>
                <textarea type="text" class="form-control" placeholder="input first name" name="address" required></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <button class="btn btn-sm btn-success" style="width: 100%;" type="submit">save</button>
        </div>
    </div>
</form>
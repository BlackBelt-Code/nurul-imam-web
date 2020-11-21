<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                {{-- <input type="text" class="form-control" placeholder="input first name" name="first_name" required> --}}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Input Name Users']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', 'password', ['class' => 'control-label']) !!}
                {{-- <input type="text" class="form-control" placeholder="input first name" name="full_name" required> --}}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password-confrim', 'Password Confrim') !!}
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{-- <label for="">last name</label> --}}
                {!! Form::label('name', 'Email', ['class' => 'control-label']) !!}
                {!! Form::email('email', null, ['class' => 'form-control' , 'placeholder' => 'example@gmail.com']) !!}
                {{-- <input type="text" class="form-control" placeholder="input first name" name="last_name" required> --}}
            </div>
            <div class="form-group">
                <label for="">Role</label>
                <select name="role" class="custom-select">
                    @foreach($role as $roles)
                    <option value="{{ $roles->name }}">{{ $roles->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                {!! Form::label('Save Users', null) !!}
                <button class="btn btn-sm btn-success" style="width: 100%;" type="submit">save</button>
            </div>

        </div>
    </div>
</div>
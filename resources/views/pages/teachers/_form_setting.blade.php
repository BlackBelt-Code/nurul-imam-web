<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::model($teacher[0], ['method' => 'POST', 'action' =>
            ['TeacherController@update', $teacher[0]->id]]) !!}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('name', 'First Name', ['class' => 'control-label']) !!}
                        {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name'])
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('name', 'Last Name', ['class' => 'control-label']) !!}
                        {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('name', 'Address', ['class' => 'control-label']) !!}
                        {!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('name', 'Full Name', ['class' => 'control-label']) !!}
                        {!! Form::text('full_name', null, ['class' => 'form-control', 'placeholder' => 'Full Name']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('name', 'Date', ['class' => 'control-label']) !!}
                        {!!Form::text('date_of_birth', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::label('name', 'Program', ['class' => 'control-label']) !!}
                        <select name="programstudy_id" id="" class="form-control">
                            @foreach($program as $value)
                            <option value={{ $value->id }}>{{ $value->name_program_study }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::label('name', 'NIK', ['class' => 'control-label']) !!}
                        {!! Form::text('name', $teacher[0]->ktp["nomor_ktp"], ['class' => 'form-control','disabled'])
                        !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('name', 'NISN', ['class' => 'control-label']) !!}
                        {!! Form::text('name', $teacher[0]->certificate["no_certificate"], ['class' => 'form-control',
                        'disabled'])
                        !!}
                    </div>
                    {!! Form::submit('Save', ['class' => 'btn btn-sm btn-primary' , 'style' => 'width: 100%']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
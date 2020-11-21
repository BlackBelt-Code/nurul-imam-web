<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('time_programs', 'Waktu Kegiatan', ['class' => 'control-label']) !!} {!! Form::date('time_programs', null, ['class' => 'form-control', 'placholder' => 'Waktu Kegiatan']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('desc_activitie', 'Deksripsi Kegiatan', ['class' => 'control-label']) !!} {!! Form::textarea('desc_activitie', null, ['class' => 'form-control', 'placholder' => 'Deksripsi Kegiatan']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('person_charge', 'Penanggung Jawab', ['class' => 'control-label']) !!} {!! Form::text('person_charge', null, ['class' => 'form-control', 'placholder' => 'Penanggung Jawab']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('evaluation_activitie', 'Evaluasi Kegiatan', ['class' => 'control-label']) !!} {!! Form::textarea('evaluation_activitie', null, ['class' => 'form-control', 'placholder' => 'Evaluasi Kegiatan']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::time('time', \Carbon\Carbon::now()->format('H:i'), ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::submit('Save', ['style' => 'width: 100%;', 'class' => 'btn btn-sm btn-success']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
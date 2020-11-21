{!! Form::model($company, ['method' => 'POST', 'action' => ['CompanyController@store']]) !!}
<div class="container">
    <div class="col-md-12" style="margin-bottom: 20px;">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('company_name', 'Company Name', ['class' => 'control-label']) !!} {!! Form::text('company_name', null, ['class' => 'form-control', 'placeholder' => 'Company Name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Save', ['class' => 'btn btn-block btn-default btn-xs', 'style' => 'width: 100%;']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
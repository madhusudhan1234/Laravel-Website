
<div class="form-group">
    {!! Form::label('label','Label :',['class'=>'control-label']) !!}
    {!! Form::text('label',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('name','Name :',['class'=>'control-label']) !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('status','Status :',['class'=>'control-label']) !!}
    {!! Form::select('status',['Active','Inactive'],null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
        {!! Form::submit($submitButtonText,['class' => 'btn btn-primary pull-right']) !!}
</div>

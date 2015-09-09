<div class="form-group">
    {!! Form::label('label','Label :',['class'=>' control-label']) !!}
    {!! Form::text('label',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('url','Url :',['class'=>'control-label']) !!}
    {!! Form::text('url',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('status','Status :',['class'=>'control-label']) !!}
    {!! Form::select('status',[0,1],null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
       {!! Form::submit($submitButtonText,['class' => 'btn btn-primary pull-right']) !!}
</div>
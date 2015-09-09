<div class="form-group">
    {!! Form::label('title','Title :',['class'=>'control-label']) !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description','Description :',['class'=>' control-label']) !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('image','Image :',['class'=>' control-label']) !!}
    {!! Form::file('image') !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary pull-right']) !!}
</div>

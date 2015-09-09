
<div class="form-group">
    {!! Form::label('news_title','Title :',['class'=>'control-label']) !!}
    {!! Form::text('news_title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('news_body','News :',['class'=>'control-label']) !!}
    {!! Form::textarea('news_body',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary pull-right']) !!}
</div>
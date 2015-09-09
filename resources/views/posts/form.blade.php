<div class="form-group">
    {!! Form::label('slug','Slug :',['class'=>'control-label']) !!}
    {!! Form::text('slug',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('title','Title :',['class'=>'control-label']) !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('label','Label :',['class'=>'control-label']) !!}
    {!! Form::text('label',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('user_id','User Name :',['class'=>'control-label']) !!}
    {!! Form::select('user_id',$users,null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('post_type','Post ID :',['class'=>'control-label']) !!}
    {!! Form::select('post_type',$posts,null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body','Body :',['class'=>'control-label']) !!}
    {!! Form::textarea('body',null,['class'=>'form-control editor']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary pull-right']) !!}
</div>
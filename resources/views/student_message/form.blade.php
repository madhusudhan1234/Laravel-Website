<div class="form-group">
    {!! Form::label('student_name','Student Name :',['class'=>' control-label']) !!}
    {!! Form::text('student_name',null,['class'=>'form-control']) !!}
</div>

{{--
<div class="form-group">
    {!! Form::label('user_id','Choose User :',['class'=>'control-label']) !!}
    {!! Form::select('user_id',$users,null,['class'=>'form-control']) !!}
</div>
--}}

<div class="form-group">
    {!! Form::label('student_image','Choose Image :',['class'=>'control-label']) !!}
    {!! Form::file('student_image') !!}
</div>

<div class="form-group">
    {!! Form::label('published_at','Publish On :',['class'=>'control-label']) !!}
    {!! Form::input('date','published_at',date('20y/m/d'),['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('message','Student Message :',['class'=>' control-label']) !!}
    {!! Form::textarea('message',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary pull-right']) !!}
</div>
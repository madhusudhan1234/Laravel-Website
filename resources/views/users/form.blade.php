<div class="form-group">
    {!! Form::label('name','Name :',['class'=>'control-label']) !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email','Email :',['class'=>' control-label']) !!}
    {!! Form::email('email',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label class="control-label">Password</label>
    <input type="password" class="form-control" name="password">
</div>

<div class="form-group">
    <label class="control-label">Confirm Password</label>
    <input type="password" class="form-control" name="password_confirmation">
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText,['class' => 'btn btn-primary pull-right']) !!}
</div>

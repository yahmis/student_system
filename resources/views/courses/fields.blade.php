<!-- Course Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_name', 'Course Name:') !!}
    {!! Form::text('course_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_code', 'Course Code:') !!}
    {!! Form::text('course_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('course_description', 'Course Description:') !!}
    {!! Form::textarea('course_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_status', 'Course Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('course_status', 0) !!}
        {!! Form::checkbox('course_status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('courses.index') }}" class="btn btn-default">Cancel</a>
</div>

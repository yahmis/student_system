<!-- Course Name Field -->
<div class="form-group">
    {!! Form::label('course_name', 'Course Name:') !!}
    <p>{{ $course->course_name }}</p>
</div>

<!-- Course Code Field -->
<div class="form-group">
    {!! Form::label('course_code', 'Course Code:') !!}
    <p>{{ $course->course_code }}</p>
</div>

<!-- Course Description Field -->
<div class="form-group">
    {!! Form::label('course_description', 'Course Description:') !!}
    <p>{{ $course->course_description }}</p>
</div>

<!-- Course Status Field -->
<div class="form-group">
    {!! Form::label('course_status', 'Course Status:') !!}
    <p>{{ $course->course_status }}</p>
</div>


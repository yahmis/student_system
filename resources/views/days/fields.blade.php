<!-- Day Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day_name', 'Day Name:') !!}
    {!! Form::text('day_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('days.index') }}" class="btn btn-default">Cancel</a>
</div>

<!-- Batch Field -->
<div class="form-group col-sm-6">
    {!! Form::label('batch', 'Batch:') !!}
    {!! Form::text('batch', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a>
</div>

@extends('layouts.app')
@section('content')

    <h3>Edit Tag</h3>
    <hr>

    {!! Form::model($tag, ['method' => 'post', 'route' => ['admin.tags.update', $tag->id]]) !!}

        <div class="form-group">
            {!! Form::label('Name', 'Name') !!}
            {!! Form::text('name', $tag->name, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('admin.tags.index') }}" class="btn btn-default">Back</a>
        </div>

    {!! Form::close() !!}
@endsection
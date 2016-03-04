@extends('layouts.app')
@section('content')

    <h3>Create Tag</h3>

    {!! Form::open(['method' => 'post', 'route' => ['admin.tags.store']]) !!}

        <div class="form-group">
            {!! Form::label('Name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Tag', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('admin.tags.index') }}" class="btn btn-default">Back</a>
        </div>

    {!! Form::close() !!}
@endsection
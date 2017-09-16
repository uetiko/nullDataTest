@extends('base')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>iEditar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('register.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Error!</strong><br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($user, ['method' => 'PATCH','route' => ['register.update', $user->id]]) !!}
        @include('register.form')
    {!! Form::close() !!}

@endsection

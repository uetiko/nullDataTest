@extends('base')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('register.create') }}"> Registro</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>nombre</th>
            <th>cumpleaños</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name}}</td>
        <td>{{ $user->birthday}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('register.show',$user->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('register.edit',$user->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['register.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $articles->links() !!}
@endsection

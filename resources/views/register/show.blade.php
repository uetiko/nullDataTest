@extends('base')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Muestra usuario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('$users.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $user->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                {{ $user->email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>cumpleaños:</strong>
                {{ $user->birtday}}
            </div>
        </div>
        @foreach ($address as $user->address)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>calle:</strong>
                {{ $address->calle}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>colonia:</strong>
                {{ $address->colonia}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Delegación/municipio:</strong>
                {{ $address->delegacion_municipio}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>estado:</strong>
                {{ $address->estado}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Numero exterior:</strong>
                {{ $address->numero_ext}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Código postal:</strong>
                {{ $address->cp}}
            </div>
        </div>
        @endforeach
    </div>
@

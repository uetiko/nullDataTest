<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>nombre:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'email','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>cumpleaños:</strong>
            {!! Form::text('birthday', null, array('placeholder' => 'Cunmpleaños','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>calle:</strong>
            {!! Form::text('calle', null, array('placeholder' => 'calle','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>estado:</strong>
            {!! Form::text('estado', null, array('placeholder' => 'Estado','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Delegacion o municipio:</strong>
            {!! Form::text('delegacion_municipio', null, array('placeholder' => 'Delegación o municipio','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Numero exterior:</strong>
            {!! Form::text('numero_ext', null, array('placeholder' => 'numero exteriro','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Código postal:</strong>
            {!! Form::text('cp', null, array('placeholder' => 'Código postal','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

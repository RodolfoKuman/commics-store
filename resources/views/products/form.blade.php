{!! Form::open(['url' => '/products', 'class' => 'app-form']) !!}
  <div>
    {!! Form::label('title', 'Titulo del producto') !!}
    {!! Form::text('title', '', ['class' => 'form-control']) !!}
  </div>
  <div>
    {!! Form::label('price', 'Precio del producto') !!}
    {!! Form::text('price', 0, ['class' => 'form-control']) !!}
  </div>
  <div>
    {!! Form::label('description', 'Descripcion del producto') !!}
    {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
  </div>
<br>
  <div class="">
    <input type="submit"  class="btn btn-primary" value="Guardar">
  </div>
{!! Form::close() !!}

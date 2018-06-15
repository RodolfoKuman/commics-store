@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-6">
    <div class="card padding">
      <header>
        <h4>Crear nuevo producto</h4>
      </header>
      <div class="card-body">
        @include('products.form')
      </div>
    </div>
  </div>
</div>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">

<h1 class="display-4">{{ __('product.title_list') }}</h1>
<hr class="my-4">

<a class="btn btn-primary mb-3" href="{{ route('manager.product.create') }}" role="button">
    <i class="icon ion-md-add"></i> {{ __('common.create') }}
</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{ __('product.column_image') }}</th>
            <th scope="col">{{ __('product.column_name') }}</th>
            <th scope="col">{{ __('product.column_enabled') }}</th>
            <th scope="col">{{ __('product.column_options') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
          <th scope="row">{{ $product->id }}</th>
          <td><img width="64" src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}"></td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->enabled ? __('common.enabled') : __('common.disabled') }}</td>
          <td>
              <a href="{{ route('manager.product.edit', $product->id) }}"><i class="icon ion-md-create"></i></a>
              <a href="{{ route('manager.product.delete', $product->id) }}"><i class="icon ion-ios-close"></i></a>
          </td>
        </tr>
        @endforeach  
    </tbody>
</table>

</div>
@endsection

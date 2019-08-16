@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="display-4">{{ __('product.title_edit') }}</h1>
    <hr class="my-4">

    <form action="{{ route('manager.product.edit') }}" method="post" enctype="multipart/form-data">
        @include('manager.product._form')        
    </form>
</div>
@endsection
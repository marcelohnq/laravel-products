@csrf

<div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">{{ __('product.column_image') }}</label>
    <div class="col-sm-10">
        <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image">

        @if (isset($product->image))
            <img class="mt-2" width="150" src="{{ asset($product->image) }}" alt="{{ __('product.column_image') }} {{ $product->name }}">
        @endif
        @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">{{ __('product.column_name') }}</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ isset($product->name) ? $product->name : '' }}">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="description" class="col-sm-2 col-form-label">{{ __('product.column_description') }}</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" value="{{ isset($product->description) ? $product->description : '' }}">
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row mb-4">
    <label for="description" class="col-sm-2 col-form-label">{{ __('product.input_enabled') }}</label>
    <div class="col-sm-10">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="enabled" id="enabled" value="true" {{ isset($product->enabled) && $product->enabled ? 'checked' : '' }} {{ !isset($product->enabled) ? 'checked' : '' }}>
            <label class="form-check-label" for="enabled">{{ __('common.enabled') }}</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="enabled" id="disabled" value="false" {{ isset($product->enabled) && !$product->enabled ? 'checked' : '' }}>
            <label class="form-check-label" for="disabled">{{ __('common.disabled') }}</label>
        </div>
        @error('enabled')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="">
    
</div>

<button type="submit" class="btn btn-primary">
    <i class="icon ion-md-checkmark"></i> {{ __('common.ok') }}
</button>
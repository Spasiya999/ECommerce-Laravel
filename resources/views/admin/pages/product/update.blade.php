@extends('admin.layouts.app')

@section('content')
    <div class="card p-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="font-weight-bold">Update Product</h5>
            </div>
            <form action="{{ route('admin.product.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" hidden name="id" value="{{ $product->id }}">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug"
                                value="{{ $product->slug }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="base_price" class="form-label">Base Price</label>
                            <input type="text" class="form-control" id="base_price" name="base_price"
                                value="{{ $product->base_price }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="quantity" name="quantity"
                                value="{{ $product->quantity }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if ($product->productImages[0] != null)
                                <img src="{{ asset($product->productImages[0]->image) }}" width="100" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Parent product</label>
                            <select class="form-select form-control" id="category_id" name="category_id">
                                <option value="" {{ $product->category_id == 0 ? 'selected' : '' }}>No Parent
                                </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select form-control" id="status" name="status">
                                <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm" data-dismiss="modal">Update Product</button>
            </form>

        </div>
    </div>
@endsection

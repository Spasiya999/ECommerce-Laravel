@extends('admin.layouts.app')

@section('content')
    <div class="card p-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="font-weight-bold">Update Category</h5>
            </div>
            <form action="{{ route('admin.category.update') }}" method="POST">
                @csrf
                <input type="text" hidden name="id" value="{{ $categoryData->id }}">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $categoryData->name }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug"
                                value="{{ $categoryData->slug }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="mb-3">
                            <label for="type" class="form-label">Category Type</label>
                            <select class="form-select form-control" id="type" name="type">
                                <option value="1" {{ $categoryData->type == 1 ? 'selected' : '' }}>Product</option>
                                <option value="2" {{ $categoryData->type == 2 ? 'selected' : '' }}>Post</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="mb-3">
                            <label for="parent_id" class="form-label">Parent Category</label>
                            <select class="form-select form-control" id="parent_id" name="parent_id">
                                <option value="" {{ $categoryData->parent_id == 0 ? 'selected' : '' }}>No Parent
                                </option>
                                @foreach ($categories as $categoryNow)
                                    <option value="{{ $categoryNow->id }}"
                                        {{ $categoryData->parent_id == $categoryNow->id ? 'selected' : '' }}>
                                        {{ $categoryNow->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select form-control" id="status" name="status">
                                <option value="1" {{ $categoryData->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $categoryData->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm" data-dismiss="modal">Update Category</button>
            </form>

        </div>
    </div>
@endsection

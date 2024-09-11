@extends('admin.layouts.app')

@section('content')
    <div class="card p-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="font-weight-bold">Create Category</h5>
            </div>
            <form action="{{ route('admin.category.create') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="mb-3">
                            <label for="type" class="form-label">Category Type</label>
                            <select class="form-select form-control" id="type" name="type">
                                <option value="1">Product</option>
                                <option value="2">Post</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="mb-3">
                            <label for="parent_id" class="form-label">Parent Category</label>
                            <select class="form-select form-control" id="parent_id" name="parent_id">
                                <option value="" @readonly(true)>No Parent</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select form-control" id="status" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm" data-dismiss="modal">Add Category</button>
            </form>

        </div>
    </div>
@endsection

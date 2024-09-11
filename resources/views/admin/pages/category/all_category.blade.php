@extends('admin.layouts.app')

@section('content')
    <div class="card p-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="font-weight-bold">All Categories</h5>
                <a href="{{ route('admin.category.createUI') }}" class="btn btn-primary btn-sm" data-toggle="tooltip"
                    data-placement="top" title="Add Category">
                    <i class="fas fa-plus"></i> Add Category
                </a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Parent Category</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($categories->count() > 0)
                        @foreach ($categories as $key => $category)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    @if ($category->parent)
                                        {{ $category->parent->name }}
                                    @else
                                        No Parent
                                    @endif
                                </td>
                                <td>
                                    <span class="badge badge-{{ $category->status == 1 ? 'success' : 'danger' }}">
                                        {{ $category->status == 1 ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.category.editUI', $category->id) }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="{{ route('admin.category.delete', $category->id) }}"
                                        class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">No Category Found</td>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

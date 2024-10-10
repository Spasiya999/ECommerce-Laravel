@extends('admin.layouts.app')

@section('content')
<div class="card p-3">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h5 class="font-weight-bold">All products</h5>
            <a href="{{ route('admin.product.createUI') }}" class="btn btn-primary btn-sm" data-toggle="tooltip"
                data-placement="top" title="Add product">
                <i class="fas fa-plus"></i> Add product
            </a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($products->count() > 0)
                @foreach ($products as $key => $product)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->slug }}</td>
                    <td>
                        <span class="badge badge-{{ $product->status == 1 ? 'success' : 'danger' }}">
                            {{ $product->status == 1 ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.product.editUI', $product->id) }}"
                            class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="{{ route('admin.product.delete', $product->id) }}"
                            class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="5" class="text-center">No product Found</td>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>

        <div class="row">
            <div class="col-md-12">
                {{$products->links()}}
            </div>
        </div>
    </div>
</div>
@endsection

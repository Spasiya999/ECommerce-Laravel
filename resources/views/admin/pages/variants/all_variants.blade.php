@extends('admin.layouts.app')

@section('content')
<div class="card p-3">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h5 class="font-weight-bold">All Variants</h5>
            @include('admin.pages.variants.create_variant')
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($variants->count() > 0)
                @foreach ($variants as $key => $variant)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $variant->name }}</td>
                    <td>
                        <span class="badge badge-{{ $variant->status == 1 ? 'success' : 'danger' }}">
                            {{ $variant->status == 1 ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        @include('admin.pages.variants.edit_variant')
                        @include('admin.pages.variants.delete_variant')
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
                {{$variants->links()}}
            </div>
        </div>
    </div>
</div>
@endsection

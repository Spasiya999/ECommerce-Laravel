<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="{{ '#editVarinat' . $variant->id }}">
    <i class="fas fa-edit"></i>
</button>

<div class="modal fade show" id="{{ 'editVarinat' . $variant->id }}" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Variant</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('admin.variant.update') }}" method="post">
                @csrf
                <input type="text" hidden name="id" value="{{ $variant->id }}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $variant->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description">{{ $variant->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select form-control">
                            <option value="1" {{ $variant->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $variant->status == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>

    </div>

</div>

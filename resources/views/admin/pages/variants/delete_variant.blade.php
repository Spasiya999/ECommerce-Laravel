<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteVariant">
    <i class="fas fa-trash"></i>
</button>

<div class="modal fade show" id="deleteVariant" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Are you sure want to delete?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ route('admin.variant.delete') }}" method="get">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="{{ $variant->id }}">
                        <p>Are you sure want to delete?</p>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Yes</button>
                </div>
            </form>
        </div>

    </div>

</div>

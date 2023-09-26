<div class="row">
    <div class="col-md-6">
        Showing {{ $items->firstItem() }} of {{ $items->lastItem() }} out of {{ $items->total() }}
    </div>
    <div class="col-md-6 d-flex justify-content-end">
        {{ $items->links() }}
    </div>
</div>

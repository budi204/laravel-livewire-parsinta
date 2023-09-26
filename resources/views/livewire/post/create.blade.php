<div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form wire:submit="store">
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea wire:model="body" name="body" id="body" class="form-control @error('body') is-invalid @enderror"></textarea>
            @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary">Save</button>
    </form>
</div>

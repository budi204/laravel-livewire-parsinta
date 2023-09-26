<div>
    @foreach ($posts as $post)
        <livewire:post.block :post="$post" wire:key="{{ $post->id }}" />
    @endforeach
</div>

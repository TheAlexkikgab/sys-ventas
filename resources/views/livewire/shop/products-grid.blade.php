<div class="products-grid">
    {{-- {{ $products }} --}}
    @forelse ($products as $product)
        <livewire:shop.grid-item :product="$product" wire:key="{{ $product->create_at }}"/>
    @empty
        <p class= 'content'>No hay contenido para mostrar.</p>
    @endforelse
    <style>
    .products-grid{
        width: 100%;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
        gap: 2rem;
            
    }
    .content {
        color: #f5f7f6;
        font-size: 2rem;
        text-align: center;
        margin-top: 6rem;
    }
    </style>


</div>

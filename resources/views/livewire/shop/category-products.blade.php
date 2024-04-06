<div class="category'products">
    <livewire:shop.products-grid :products="$products" wire:key="cate-products"/>
{{--     @forelse ($products as $product)
        {{ $product }}
    @empty
        <p>No hay productos en esta {{ $category->name }} categoria</p>
    @endforelse --}}
    <style>
    .category-products{
        margin-top: 5rem;
    }
</style>
</div>

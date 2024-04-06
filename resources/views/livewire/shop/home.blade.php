<div class="home">
    <h2>Caracteristicas del producto</h2>
    {{-- {{ $featured }} --}}
    <livewire:shop.products-grid :products="$featured" wire:key="featured"/>
    <h2>Nuevos productos</h2>
    {{-- {{ $newArrivals }} --}}
    <livewire:shop.products-grid :products="$newArrivals" wire:key="newArrivals"/>
    <style>
        .home{
            width: 100%;
        }
        .home h2{
            text-transform: capitalize;
            font-size: 2rem;
            text-align: center;
            margin: 3rem 0;
            color: var(--black-color);
            
        }
    </style>
</div>


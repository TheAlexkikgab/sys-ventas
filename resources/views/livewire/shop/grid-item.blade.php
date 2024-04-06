<div class="grid-item">
    <div class="img-container">
        <img src="{{ asset('storage/'.$product->image) }}">
        <a href="" wire:click.prevent="addToBasket" class="add-to-basket">Añadir al carrito</a>
    </div>
    <div class="prod-name">{{ $product->name }}</div>
    <div class="prod-desc">{{ $product->description ?? 'No hay descripcion'}}</div>
    <div class="prod-price">${{ $product->price ?? '0.00'}}</div>

    
    <style>
        .prod-desc{
            text-align:center;
        }

        .prod-price{
            text-align:center;
        }

        .grid-item{
            /* background-color: rgb(233, 205, 255); */
            padding:1rem;
        }
        .grid-item:nth-of-type(odd){
            background-color: #98445b
        }
        .grid-item .img-container{
            width: 90%;
            position: relative;
            margin: auto;
        }
        .grid-item .img-container img {
            width: 30%;
            object-fit:cover;
            display: block;
            margin:0 auto;
            border-radius: 2rem;
        }

        .grid-item .img-container .add-to-basket{
            /*display: none;*/
            opacity:0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: var(--darker-shade);
            border-radius: 1rem;
            color: white;
            font-size: 1.6rem;
            padding: .8rem .5rem;
        }
        .grid-item:hover .img-container .add-to-basket{
            /*display: block;*/
            opacity:1;
        }
        .grid-item div {
            font-size: 1.5rem;
            padding:.6rem 0;
            text-transform: capitalize;
        }
        .grid-item .prod-name{
            padding-top: 1rem;
            font-weight: bold;
            font-size: 2rem;
            text-align:center;
        }

    </style>

<div>
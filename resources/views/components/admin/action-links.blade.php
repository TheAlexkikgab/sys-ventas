<a {{ $attributes->merge(['class'=>'default-action']) }} href="{{ route($routeName, $routeParam) }}">{{ $slot }}</a>

@pushOnce('component-styles')
<style>
    .default-action{
        margin:0 .5rem;
        display: flex;
        justify-content: center;
        align-content: center;
        text-decoration: none;
        text-transform: capitalize;
        font-weight: 500;
        font-size: 1.2rem;
        letter-spacing: .1rem;
        letter-spacing: 0ch
        display:inline;
        width:40%;
        height:80%;
        border:none;
        outline:none;
        background-color: rgb(43, 49, 48);
        color: rgb(255, 255, 255);
        border-radius: 40px;
        box-shadow: 5px 5px 10px gray;
        transition: all .5s ease;
        &:hover{
            transform: scale(1.1);
        }
}

.view {background-color: rgb(4, 233, 23) !important;}
.edit{background-color: rgb(0, 47, 255) !important;}
</style>
@endPushOnce
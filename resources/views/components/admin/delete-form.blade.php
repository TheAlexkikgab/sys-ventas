@props(['routeName', 'routeParam'])

<form class="delete-form" action="{{ route($routeName, $routeParam) }}" method="POST">
    @method('DELETE')
    @csrf
    <input class="delete-form-btn" type="submit" value="Eliminar">
    </form>
    @pushOnce('component-styles')
    <style>
        .delete-form{
            width: 40%;
            height: 80%;
            margin:0 .5rem;
                .delete-form-btn{
                    
            text-transform: capitalize;
            font-weight: 500;
            font-size: 1rem;
            letter-spacing: .1rem;
            width:100%;
            height:100%;
            border:none;
            outline:none;
            background-color: rgb(233, 4, 4);
            color: rgb(255, 255, 255);
            border-radius: 40px;
            box-shadow: 5px 5px 10px gray;
            transition: all .5s ease;
            &:hover{
                transform: scale(1.1);
            }
            
    }
}
    </style>
    @endPushOnce
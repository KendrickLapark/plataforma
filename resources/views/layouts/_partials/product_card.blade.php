<div class="product_card">

    <div class="img_container">
        <img src="{{asset('storage/products/'.$product->images->first()->name)}}" alt="{{$product->name}}">
    </div>

    <div class="product_info">
        <p> Nombre : {{$product->name}} </p>
        <p> Apellido: {{$product->description}} </p>
        <p> Precio: {{$product->price}} </p>
        <p> Código: {{$product->code}} </p>    
    </div>
</div>
<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
  <div class="card">
    <a href="{{asset($product->image()->first()->url)}}">
      <img src="{{ asset($product->image()->first()->url) }}" class="card-img-top align-self-center" style="max-height: 150px; max-width: 150px" alt="" />
    </a>
    <div class="card-body">
      <h4>{{ $product->name }}</h4>
      <div class="d-flex justify-between ">
        <h4 class="text-decoration-line-through text-danger">{{ $product->price }} €</h4>
        <h4>{{ $product->price - ($product->price * $product->discount / 100) }} €</h4>
      </div>
      <p class="card-text " style="max-width: 150px">
        {{ $product->description }}
      </p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Category:</strong> {{ $product->category()->first()->name }}</li>
        <li class="list-group-item"><strong>Discount:</strong> {{ $product->discount }}</li>
        <li class="list-group-item"><strong>Brand:</strong> {{ $product->marca()->first()->name }}</li>
    </ul>
      <div>
        <x-primary-button >
          <a href="{{ route('products.show', $product) }}">
            View
          </a>
        </x-primary-button>
        <x-primary-button href="{{ route('Cartitems.create', $product) }}">Add to Cart</x-primary-button>

      </div>
    </div>
  </div>
  
</div>
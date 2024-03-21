<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
    <div class="card">
        
        {{-- show all products of this category when u click on a category  --}}
        <a href="{{ route('products.index', ['category_id' => $category->id] ) }}">
            <img src="{{ asset($category->image()->first()->url) }}" class="card-img-top" style="width: 200px " alt="" />
          </a>
          <div class="card-body">
            <h4>{{ $category->name }}</h4>
            <p class="card-text">{{ $category->description }}</p>
            <div>
              <x-primary-button>
                <a href="{{ route('categories.show', $category) }}">
                  View
                </a>
              </x-primary-button>
            </div>
          </div>
        </div>
    </div>
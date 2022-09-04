<div>
  <div class="bg-gray-200 py-4 mb-16">
    <div class="container flex">
      <button 
        class="focus:outline-none bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4"
        wire:click="resetFilters"
      >
        <i class="fas fa-archway text-xs mr-2"></i>
        Todos los cursos
      </button>

      {{-- Categorias --}}
      <div class="relative mr-4" x-data="{ open: false }">
        <button 
          class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow"
          @click="open = true"
        >
          <i class="fas fa-tags text-sm"></i>
          <span class="mx-2">
            Categoria
          </span>
          <i class="fas fa-angle-down text-sm"></i>
        </button>

        <div 
          class="absolute right-0 w-40 mt-2 p-0 bg-white border rounded shadow-xl"
          x-show="open"
          @click.away="open = false"
        >
          @foreach ($categories as $item)
            <a 
              wire:click="$set('category', {{ $item->id }})"
              class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white cursor-pointer"
              @click="open = false"
            >
              {{ $item->name }}
            </a>
          @endforeach
        </div>
      </div>

      {{-- Nieveles --}}
      <div class="relative" x-data="{ open: false }">
        <button 
          class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow"
          @click="open = true"
        >
          <i class="fas fa-tags text-sm"></i>
          <span class="mx-2">
            Level
          </span>
          <i class="fas fa-angle-down text-sm"></i>
        </button>

        <div 
          class="absolute right-0 w-40 mt-2 p-0 bg-white border rounded shadow-xl"
          x-show="open"
          @click.away="open = false"
        >
          @foreach ($levels as $item)
            <a 
              wire:click="$set('level', {{ $item->id }})"
              class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white cursor-pointer"
              @click="open = false"
            >
              {{ $item->name }}
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
    @foreach ($courses as $course)
      <x-course-card :course="$course" />
    @endforeach
  </div>

  <div class="container mt-4 mb-8">
    {{ $courses->links() }}
  </div>
</div>

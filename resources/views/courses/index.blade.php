<x-app-layout>
  {{-- Portada --}}
  <section 
    class="bg-cover"
    style="background-image: url({{ asset('img/home/banner.jpg') }});"
  >
    <div class="container py-36">
      <div class="w-full md:w-3/4 lg:w-1/2">
        <h1 class="text-white font-bold text-4xl">Domina la tecnología web con Coders Free</h1>
        <p class="text-white text-lg mt-2 mb-4">
          En Coders Free encontrarás cursos, manuales y artículos que te ayudarán a convertirte en un profesional del desarrollo web.
        </p>
        <div class="pt-2 relative mx-auto text-gray-600">
          <input 
            class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
            type="search" 
            name="search" 
            placeholder="Search"
          >
          <button 
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2"
            type="submit" 
          >
            Buscar
          </button>
        </div>
      </div>
    </div>
  </section>

  @livewire('course-index')
  
</x-app-layout>
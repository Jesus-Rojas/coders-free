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

  <section class="mt-24">
    <h1 class="text-gray-600 text-center text-3xl mb-6">Contenido</h1>
    <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
      <article>
        <figure>
          <img 
            class="rounded-xl h-36 w-full object-cover" 
            src="{{ asset('img/home/1.jpg') }}" 
            alt=""
          >
        </figure>
        <header class="mt-2">
          <h1 class="text-center text-xl text-gray-700">Blog</h1>
          <p class="text-sm text-gray-500">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis aspernatur quia soluta blanditiis error.
          </p>
        </header>
      </article>
      <article>
        <figure>
          <img 
            class="rounded-xl h-36 w-full object-cover" 
            src="{{ asset('img/home/2.jpg') }}" 
            alt=""
          >
        </figure>
        <header class="mt-2">
          <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
          <p class="text-sm text-gray-500">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis aspernatur quia soluta blanditiis error.
          </p>
        </header>
      </article>
      <article>
        <figure>
          <img 
            class="rounded-xl h-36 w-full object-cover" 
            src="{{ asset('img/home/3.jpg') }}" 
            alt=""
          >
        </figure>
        <header class="mt-2">
          <h1 class="text-center text-xl text-gray-700">Manual de laravel</h1>
          <p class="text-sm text-gray-500">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis aspernatur quia soluta blanditiis error.
          </p>
        </header>
      </article>
      <article>
        <figure>
          <img 
            class="rounded-xl h-36 w-full object-cover" 
            src="{{ asset('img/home/4.jpg') }}" 
            alt=""
          >
        </figure>
        <header class="mt-2">
          <h1 class="text-center text-xl text-gray-700">Desarrollo</h1>
          <p class="text-sm text-gray-500">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis aspernatur quia soluta blanditiis error.
          </p>
        </header>
      </article>
    </div>
  </section>

  <section class="mt-24 bg-gray-700 py-12">
    <h1 class="text-center text-white text-3xl">¿No sabes qué curso llevar?</h1>
    <p class="text-center text-white">
      Dirigete al catálogo de cursos y filtralos por categoría o niveles.
    </p>
    <div class="flex justify-center mt-4">
      <a 
        href="{{ route('courses.index') }}"
        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
      >
        Catálogo de cursos
      </a>
    </div>
  </section>

  <section class="my-24">
    <h1 class="text-center text-3xl text-gray-600">ÚLTIMOS CURSOS</h1>
    <p class="text-center text-gray-500 text-sm mb-6">
      Trabajo duro para seguir subiendo cursos
    </p>

    <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
      @foreach ($courses as $course)
        <x-course-card :course="$course" />
      @endforeach
    </div>

  </section>
</x-app-layout>
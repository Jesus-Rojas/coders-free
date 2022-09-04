<x-app-layout>
  <section class="bg-gray-700 py-12 mb-16">
    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
      <figure>
        <img 
          src="{{ Storage::url($course->image->url) }}" 
          alt=""
          class="w-full h-60 object-cover"
        >
      </figure>
      <div class="text-white">
        <h1 class="text-4xl">{{ $course->title }}</h1>
        <h2 class="text-xl mb-3">{{ $course->subtitle }}</h2>
        <p class="mb-2">
          <i class="fas fa-chart-line"></i>
          Nivel: {{ $course->level->name }}
        </p>
        <p class="mb-2">
          <i class="fas fa-chart-line"></i>
          Categoria: {{ $course->category->name }}
        </p>
        <p class="mb-2">
          <i class="fas fa-users"></i>
          Matriculados: {{ $course->students_count }}
        </p>
        <p>
          <i class="fas fa-star"></i>
          Calificación: {{ $course->rating }}
        </p>
      </div>
    </div>
  </section>

  <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6 mb-12">
    <div class="order-2 lg:col-span-2 lg:order-1">
      <section class="card mb-12">
        <div class="card-body">
          <h1 class="font-bold text-2xl mb-2">Lo que aprenderás</h1>

          <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
            @foreach ($course->goals as $goal)
              <li class="text-gray-700 text-base">
                <i class="fas fa-check text-gray-600 mr-2"></i>
                {{ $goal->name }}
              </li>
            @endforeach
          </ul>
        </div>
      </section>

      <section class="mb-12">
        <h1 class="font-bold mb-2 text-3xl">Temario</h1>
        @foreach ($course->sections as $section)
          <article class="mb-4 shadow" x-data="{ open: {{ $loop->first ? 'true' : 'false' }} }">
            <header 
              class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200"
              @click="open = !open"
            >
              <h1 class="font-bold text-lg text-gray-600">{{ $section->name }}</h1>
            </header>
            <div class="bg-white py-2 px-4" x-show="open">
              <ul class="grid grid-cols-1 gap-2">
                @foreach ($section->lessons as $lesson)
                  <li class="text-gray-700 text-base">
                    <i class="fas fa-play-circle mr-2 text-gray-600"></i>
                    {{ $lesson->name }}
                  </li>
                @endforeach
              </ul>
            </div>
          </article>
        @endforeach
      </section>

      <section class="mb-8">
        <h1 class="font-bold text-3xl">Requisitos</h1>
        <ul class="list-disk list-inside">
          @foreach ($course->requirements as $requirement)
            <li class="text-gray-700 text-base">{{ $requirement->name }}</li>
          @endforeach
        </ul>
      </section>

      <section>
        <h1 class="font-bold text-3xl">Descripción</h1>
        <div class="text-gray-700 text-base">
          {{ $course->description }}
        </div>
      </section>
    </div>

    <div class="order-1 lg:order-2">
      <section class="card mb-4">
        <div class="card-body">
          <div class="flex items-center">
            <img 
              src="{{ $course->teacher->profile_photo_url }}" 
              alt=""
              class="h-12 w-12 object-cover rounded-full shadow-lg"
            >
            <div class="ml-4">
              <h1 class="font-bold text-gray-500 text-lg ">
                Prof. {{ $course->teacher->name }}
              </h1>
              <a href="" class="text-blue-400 text-sm font-bold">
                {{ '@'.Str::slug($course->teacher->name, '') }}
              </a>
            </div>
          </div>
          <a href="" class="btn btn-danger btn-block mt-4">
            Llevar este curso
          </a>
        </div>
      </section>

      <aside class="hidden lg:block">
        @foreach ($similares as $similar)
          <article class="flex mb-3 bg-white rounded-lg overflow-hidden">
            <img 
              class="h-32 w-1/3 object-cover"
              src="{{ Storage::url($similar->image->url) }}" 
              alt=""
            >
            <div class="ml-3 w-2/3 pt-3">
              <h1>
                <a 
                  href="{{ route('courses.show', $similar) }}" 
                  class="font-bold text-gray-500 mb-3"
                >
                  {{ Str::limit($similar->title, 20) }}
                </a>
              </h1>

              <div class="flex items-center pt-3 mb-2">
                <img 
                  src="{{ $similar->teacher->profile_photo_url }}" alt=""
                  class="h-8 w-8 object-cover rounded-full shadow-lg"
                >
                <p class="text-gray-700 text-sm ml-2">
                  {{ $similar->teacher->name }}
                </p>
              </div>

              <p class="text-sm pl-1">
                <i class="fas fa-star mr-2 text-yellow-400"></i>
                {{ $similar->rating }}
              </p>
            </div>
          </article>
        @endforeach
      </aside>
    </div>
  </div>
</x-app-layout>
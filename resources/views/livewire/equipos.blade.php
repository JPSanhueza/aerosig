<div class="w-full flex" id="equipos">
    <div class="bg-gradient-to-r from-[#3C4D31] to-[#4C663C] py-20 pl-7  w-full">
        <p class="text-5xl text-white font-semibold pb-7 text-center ">NUESTROS EQUIPOS</p>

        <div class="mx-auto p-4 ">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">
                @foreach($equipments as $service)
                <div class="contenedor group relative aspect-w-16 aspect-h-9 transform transition duration-700 hover:scale-105 cursor-pointer overflow-hidden border-2 border-white">
                    <div class="transition duration-300 group-hover:brightness-75">
                        <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}" class="h-64 object-cover w-full ">
                    </div>
                    <!-- Contenedor para el título y el párrafo -->
                    <div class="absolute bottom-0 left-0 w-full p-2 text-container">
                        <h3 class="text-white text-xl font-bold hover-underline-animation">{{ $service->title }}</h3>
                        <p class="text-white text-sm paragraph">{{ $service->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

   
</div>


@php
    $sliderWidthPercentage = 100 * $slides->count();
       
@endphp
<div class="relative w-full m-auto overflow-hidden "> 
  <div class="h-[70vh] flex ml-[-100%] lg:h-[90vh]" id="slider" style="width: {{ $sliderWidthPercentage }}%"> 
        @foreach($slides as $slide)        
            <div class="relative w-full slider__section">
                <picture>
                    <source media="(min-width: 1024px)" srcset="{{Storage::url($slide->image)}}"/>
                    <img src="{{Storage::url($slide->image_responsive)}}" alt="{{$slide->description}}" class="block object-cover w-full h-full"/>
                </picture>
            </div>
        @endforeach
        <div class="cursor-pointer flex items-center justify-center text-4xl font-bold z-40 absolute  leading-[23px] left-5 sm:left-14 top-1/2 w-11 h-11 bg-gray-100 shadow-md rounded-full text-gray-900 text-opacity-60  hover:bg-gray-200" id="btn-left">
            <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
            </path>
        </svg>
        </div>
        <div class="flex items-center justify-center w-11 h-11 shadow-md right-5 sm:right-14 hover:bg-gray-200 cursor-pointer z-40  absolute top-1/2 text-4xl  text-gray-900 text-opacity-70 leading-[23px]  bg-gray-100 rounded-full" id="btn-right">
            <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
            </svg>
        </div>
    </div>
     <div class="absolute w-full top-[40%] sm:top-[40%] sm:px-11 ">
            <div class="relative text-3xl lg:text-5xl text-center" id="titulo"> 
                <h1 class="text-white text-4xl sm:text-7xl">
                    <span class="bg-gray-900-70 p-4 font-bold">SOLUCIONES RPAS <br>
                        <span class="text-sm sm:text-3xl text-center">19 Años de experiencia en el rubro</span> <br>
                        {{-- <span class="font-bold text-sm sm:text-xl font-racing">Somos un equipo de ingenieros con 18 años de experiencia en los rubros, topográficos, Cartográficos, Agrícolas y Forestal.  </span> --}}
                    </span>
                </h1>
            </div>
    </div> 
</div>

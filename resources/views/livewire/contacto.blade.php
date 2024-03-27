<div class="pb-20 text-gray-900 bg-white dark:bg-gray-800 dark:text-gray-300" id="contacto">
    <h2 class="text-5xl font-bold text-center mb-7 pt-20 pb-7">{{__('CONTACTO')}}</h2>
    <div class="grid items-center justify-center grid-cols-1 mx-auto sm:grid-cols-2 max-w-7xl sm:px-6 lg:px-8">

      <div class="mx-auto w-full pb-7 sm:pb-0">
          <picture>
              <source media="(min-width: 1024px)" srcset="{{asset('img/contacto-dron.webp')}}" width="210px" height="210px" class="mx-auto">
              <img width="200px" height="200px" src="{{asset('img/contacto-dron.webp')}}" alt="logo" class="mx-auto mb-7 rounded-full">
        </picture>
        <div class=" mx-4">
          <h3 class="text-gray-900 text-lg text-center font-bold mb-2 mx-auto animate-pulse">{{__('Contáctanos')}}</h3>
         
          <ul class="list-disc ml-5">
              <li class="mb-2">
                  <strong>{{__('Formulario de Contacto')}}:</strong> {{__('Complétalo y te responderemos vía email.')}}
              </li>
              <li class="mb-2">
                  <strong>WhatsApp:</strong> {{__('Haz clic en el botón de WhatsApp en la esquina inferior derecha para chatear con nosotros.')}} 
              </li>
              <li>
                  <strong>{{__('Teléfono o Email')}}:</strong> {{__('Llámanos al')}} <a href="tel:+569 7970 8737" class="text-green-900 hover:text-orange-900 dark:text-orange-atiye">+56 9 7970 8737</a> {{__('o escríbenos a')}} <a href="mailto:paguila@aerosig.cl" class="text-green-900 hover:text-orange-800 dark:text-orange-atiye">paguila@aerosig.cl</a>.
              </li>
          </ul>
          
        </div>
      </div>


      {{-- <div class="mx-auto">
            <img width="136" height="224" src="{{asset('img/contacto/contacto.jpg')}}" alt="contacto" class="w-auto mb-7 h-[136px] sm:mb-0 sm:h-[29rem] ">
        </div> --}}
      <div class="">
        @livewire('form-contacto')
      </div>
    </div>

</div>



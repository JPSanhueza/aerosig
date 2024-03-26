<div class="py-20 text-gray-700 bg-white dark:bg-gray-800 dark:text-gray-300" id="contacto">
    <h2 class="text-5xl font-bold text-center mb-7 ">{{__('CONTACTO')}}</h2>
    <div class="grid items-center justify-center grid-cols-1 mx-auto sm:grid-cols-2 max-w-7xl sm:px-6 lg:px-8">

      <div class="mx-auto w-full pb-7 sm:pb-0 flex gap-4">
          
        <div class="block rounded-lg bg-white shadow-xl w-52 h-96">
            <a href="#!">
                <img
                class="rounded-t-lg"
                src="{{asset('img/pedro-aguila.jpg')}}"
                alt="" />
            </a>
            <div class="text-center mt-2 text-surface ">
                <h5 class="mb-2 text-xl font-medium leading-tight">Pedro Aguila</h5>
                <p class="mb-4 text-base">
                 +5697567523 <br>
                 perdo@aerosig.cl
                </p>
               
            </div>
        </div>

        <div class="block rounded-lg bg-white shadow-xl w-52 ">
            <a href="#!">
                <img
                class="rounded-t-lg"
                src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
                alt="" />
            </a>
            <div class="p-6 text-surface dark:text-white">
                <h5 class="mb-2 text-xl font-medium leading-tight">Pedro Aguila</h5>
                <p class="mb-4 text-base">
                 +5697567523 <br>
                 perdo@aerosig.cl
                </p>
               
            </div>
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


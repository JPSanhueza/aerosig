<div class="py-20 text-gray-700 bg-white " id="servicios">
    <h2 class="mb-12 text-4xl text-center font-bold sm:text-5xl">{{__('NUESTROS SERVICIOS')}}</h2>
    <div class="sm:mx-auto  sm:px-6 lg:px-8">
      
        @foreach($services as $service)
            <div class="bg-white rounded-sm dark:bg-gray-900 w-full flex flex-col sm:flex-row border-gray-100 border-[1px] mb-3">
              
                <div class="p-3 bg-purple-menu dark:bg-gray-900 flex justify-center items-center">
                    <a href=""><img height="241" width="300" class="rounded-sm " src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}"> </a>
                </div>
                <div class="bg-white w-full border-b-0 my-auto p-7 dark:bg-gray-900">
                    <h3 class="py-3 text-xl dark:text-gray-300 font-bold"> {{$service->name}}</h3>
                    <p>{{$service->description}}</p>
                </div>
            </div>
        @endforeach
        
      </div> 
      
    
     
    
     
   

   
            

    </div>
</div>



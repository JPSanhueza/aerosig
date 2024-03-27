<div>


    <div class="p-6 bg-[#2E332C] ">
        <form wire:submit.prevent="submit">
            @csrf
            <label class="text-xs text-gray-100 uppercase dark:text-gray-100" for="name">{{__('Nombre')}}</label>
            <span class="text-xs text-red-600 "> @error ('nombre') {{$message}}  @enderror</span>
            <input wire:model="nombre" type="text" id="name" name="nombre" class="w-full mb-4 border-gray-200 rounded" value="{{old('nombre')}}">
    
            <label class="text-xs text-gray-100 uppercase dark:text-gray-100" for="email">Email</label>
            <span class="text-xs text-red-600 "> @error ('email') {{$message}}  @enderror</span>
            <input wire:model="email" type="text" id="email" name="email" class="w-full mb-4 border-gray-200 rounded" value="{{old('email')}}">
    
            <label class="text-xs text-gray-100 uppercase dark:text-gray-100" for="msg">{{__('Mensaje')}}</label>
            <span class="text-xs text-red-600 "> @error ('msg') {{$message}}  @enderror</span>
            <textarea wire:model="msg" id="msg" name="msg" class="w-full mb-4 border-gray-200 rounded" id="" cols="30" rows="5"></textarea>
            <div class="text-center">
                <input type="submit" value="{{__('Enviar')}}" class="px-7 py-2 text-[#2E332C] font-semibold  bg-white hover:bg-[#95A5A6] hover:text-white  rounded cursor-pointer">
            </div>
            @if (session()->has('message'))
                <div x-data="{ isVisible: true}"
                     x-init="
                        setTimeout(()=>{
                            isVisible=false
                        },3000)
                     "
                     x-show.transition.duration.1000ms="isVisible"
                    class="text-green-900">
                    {{ session('message') }}
                </div>
                @endif
        </form>
    
    </div>
    </div>
    

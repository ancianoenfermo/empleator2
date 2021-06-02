<div>
    <div class="form-group row text-gray-500 mt-5">
        <label class="block text-sm font-medium text-gray-700">Autonomías</label>
        <div>
            <select wire:model="autonomia" class="form-control w-full bg-white-500 h-8 text-xs  rounded-lg" >
                <option value="">Todas</option>
                @foreach ($autonomias as $autonomia )
                    <option value="{{$autonomia->id}}">{{$autonomia->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row text-gray-500 mt-5 ">
        <label class="block text-sm font-medium text-gray-700">Provincias</label>
        <div>
            <select wire:model="provincia"
            @if(!$provincias)
            disabled
            @endif
            class="form-control w-full bg-white-500 h-8 text-xs rounded-lg" >
                <option value="">Todas</option>
                @if($provincias)
                    @foreach ($provincias as $provincia )
                        <option value="{{$provincia->id}}">{{$provincia->name}}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>

    <div class="form-group row text-gray-500 mt-5 ">
        <label class="block text-sm font-medium text-gray-700">Localidad</label>
        <div>
            <select   class="form-control w-full bg-white-500 h-8 text-xs rounded-lg" >
                <option value="">Todas</option>

            </select>
        </div>
    </div>

    <button wire:click="clear" class="ml-6">
        <span class="fa fa-eraser"></span>
    </button>
</div>



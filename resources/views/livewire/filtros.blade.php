<div>
    <div class = "row text-gray-500 mt-5">
        <label class="block text-sm font-medium text-gray-700">Elementos por página</label>
        <select wire:model = "perPage" class="bg-white-500 h-8 text-xs  rounded-lg">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
        </select>
    </div>
    <div class = "row text-gray-500 mt-5">
        <label class="block text-sm font-medium text-gray-700">Búsqueda por palaras</label>
        <input type="text"
            class="form-imput text-gray-500 bg-white-500 h-8 text-xs rounded-lg w-full"
            wire:model = "buscar"
            placeholder="introduzca el término de búsqueda">
    </div>
</div>

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
            <select wire:model="provincia"  class="form-control w-full bg-white-500 h-8 text-xs rounded-lg" >
                <option value="">Todas</option>
                @if($provincias)
                    @foreach ($provincias as $provincia )
                        <option value="{{$provincia->id}}">{{$provincia->name}}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>

    <button wire:click="clear" class="ml-6">
        <span class="fa fa-eraser"></span>
    </button>
</div>



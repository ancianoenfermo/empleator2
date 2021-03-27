<div>
    <div class="form-group">
        <label class="block text-sm font-medium text-gray-700">Autonomías</label>
        <div>
            <select wire:model="autonomia" class="form-control" >
                <option value="">Todas</option>
                @foreach ($autonomias as $autonomia )
                    <option value="{{$autonomia->id}}">{{$autonomia->name}}</option>
                @endforeach
            </select>
        </div>

        @if(count($provincias) > 0)
        <label>Provincias</label>
        <div>
            <select wire:model="provincia" class="form-control" >
                <option value="">Seleccione provincia</option>
                @foreach ($provincias as $provincia )
                    <option value="{{$provincia->id}}">{{$provincia->name}}</option>
                @endforeach
            </select>
        </div>
        @endif
    </div>
</div>

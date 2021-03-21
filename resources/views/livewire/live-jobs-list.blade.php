<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <div class="bg-white px-4 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
                <div class = "flex text-gray-500">
                    <select wire:model = "perPage">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                    </select>
                    <input type="text"
                        class="form-imput w-full text-gray-500 ml-6"
                        wire:model = "buscar"
                        placeholder="introduzca el término de búsqueda">

                    <button wire:click="clear" class="ml-6">
                        <span class="fa fa-eraser"></span>
                    </button>

                </div>
            </div>
            <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Title
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($jobs as $job )
                    <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">

                        <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                            {{$job->title}}
                        </div>
                        <div class="text-sm text-gray-500">
                            jane.cooper@example.com
                        </div>
                        </div>
                    </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$job->localidad}} ({{$job->provincia}})</div>



                    </td>



                </tr>
                @endforeach
              <!-- More items... -->
            </tbody>
          </table>
          <div class="bg-white px-4 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
            {{$jobs->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>

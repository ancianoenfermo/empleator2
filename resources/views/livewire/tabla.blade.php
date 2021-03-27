<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

            <div class="grid grid-cols-12">

                <div class="col-span-12">
                    <table class="min-w-full divide-y divide-gray-200">
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($jobs as $job )
                            <tr>
                                <x-detalle-job :job="$job"></x-detalle-job>
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
    </div>
  </div>

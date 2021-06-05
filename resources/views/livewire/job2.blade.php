
@foreach ($jobs as $job )
    <div class="overflow-hidden bg-gray-100 shadow-none">
        <div class="px-8  mx-auto mt-16 rounded-lg shadow-2xl dark:bg-gray-800 bg-white">
            <br>
            <div class="flex justify-center -mt-14 md:justify-start">
                <span class="text-base font-bold inline-block py-1 px-2 text-white shadow-md bg-pink-500">
                    {{$job->dateHumana}}
                </span>
                <div class=" flex flex-1 justify-end space-x-9">
                    @isset($job->discapacidad)
                        <div style="padding-top: 0.2em; padding-bottom: 0.2rem" class="flex items-center space-x-1 text-xs px-2 bg-green-50 border border-bg-green-900 text-green-800 rounded-full">
                            <div style="width: 0.4rem; height: 0.4rem" class=" bg-green-900 rounded-full"></div>
                            <div>Discapacidad</div>
                        </div>
                    @endisset
                    @isset($job->practicas)
                        <div style="padding-top: 0.2em; padding-bottom: 0.2rem" class="flex items-center space-x-1 text-xs px-2 bg-red-50 border border-bg-red-900 text-red-800 rounded-full">
                            <div style="width: 0.4rem; height: 0.4rem" class=" bg-red-900 rounded-full"></div>
                            <div>Prácticas</div>
                        </div>
                    @endisset
                    @isset($job->teletrabajo)
                        <div style="padding-top: 0.2em; padding-bottom: 0.2rem" class="flex items-center space-x-1 text-xs px-2 bg-indigo-50 border border-bg-indigo-900 text-indigo-800 rounded-full">
                            <div style="width: 0.4rem; height: 0.4rem" class=" bg-indigo-900 rounded-full"></div>
                            <div>Teletrabajo</div>
                        </div>
                    @endisset
                    @isset($job->ett)
                        <div style="padding-top: 0.2em; padding-bottom: 0.2rem" class="flex items-center space-x-1 text-xs px-2 bg-blue-50 border border-bg-blue-900 text-blue-800 rounded-full">
                            <div style="width: 0.4rem; height: 0.4rem" class=" bg-blue-900 rounded-full"></div>
                            <div>ETT</div>
                        </div>
                    @endisset

                </div>
            </div>

            <div class="flex flex-row mt-5 mb-5 ">
                <div>
                    <span class="text-base font-semibold py-1 px-2  text-gray-700 bg-gray-50 shadow  last:mr-0 mr-2">
                        <strong>{{$job->localidad}}</strong>
                        @if ($job->provincia != $job->localidad)
                            ( {{$job->provincia}} )
                        @endif
                    </span>
                </div>
            </div>


            <div class="flex flex-row justify-between items-center mt-5 mb-5 ">
                        <h3 class="text-xl leading-6 font-medium text-gray-900">
                            <strong>{{$job->title}}</strong>
                        </h3>
            </div>

            <div class="flex flex-row justify-between items-center mt-5 mb-5 ">
                <div class="m-auto">
                    <span class="text-justify">
                            {{$job->excerpt}}
                    </span>
                </div>
            </div>

            <div class="flex flex-row justify-start">
                @isset($job->contrato)
                    <span class="text-base font-medium text-gray-900 ml-2">
                        <i class="fas fa-file-contract"></i>
                        <strong>Contrato:</strong>
                        {{$job->contrato}}
                    </span>
                @endisset
                @isset($job->jornada)
                    <span class="text-base font-medium text-gray-900 ml-6">
                        <i class="fas fa-cloud-moon"></i>
                        <strong>Jornada:</strong>
                        {{$job->jornada}}
                    </span>
                @endisset
                @isset($job->salario)
                    <span class="text-base font-medium text-gray-900 ml-6">
                        <i class="fas fa-euro-sign"></i>
                        <strong>Salario:</strong>
                        {{$job->salario}}
                    </span>
                @endisset
                @isset($job->vacantes)
                    <span class="text-base font-medium text-gray-900 ml-6">
                        <i class="fas fa-user-friends"></i>
                        <strong>Vacantes:</strong>
                        {{$job->vacantes}}
                    </span>
                @endisset
                @isset($job->experiencia)
                    <span class="text-base font-medium text-gray-900 ml-6">
                        <i class="fas fa-adjust"></i>
                        <strong>Experiencia:</strong>
                        Si
                    </span>
                @endisset
            </div>

            <div class="flex flex-row mt-3 border-4 border-light-blue-500 border-opacity-50 mt-5">
                <div class="mt-2 mb-2 ml-5">
                    Publicado el: {{ Carbon\Carbon::parse($job->datePosted)->format('d-m-Y')}}
                </div>
                <div class="w-36 content-center flex-1 mt-2 mb-2">
                    <span>
                        <img class="mx-auto" src="{{'storage/logo_images/'.$job->logo}}">
                    </span>
                </div>
                <div class="justify-end mt-2 mb-2">
                    <button onclick="window.open('{{$job->JobUrl}}')" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-3 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 " type="button">
                        <i class="far fa-eye"></i> Ver la oferta

                    </button>
                </div>

            </div>

        </div>
    </div>

@endforeach


<div class="bg-gray-50 px-4 py-3 mt-5 mb-5 mr-2 items-center justify-between border-t border-gray-200 sm:px-6">

    {{$jobs->links()}}

</div>



{{--
        <div class="flex flex-row justify-between items-center mt-5 mb-5 ">
                    <span class="text-xs font-bold inline-block ml-5 py-1 px-2 rounded-full text-gray-700 bg-gray-200 shadow">
                        {{$job->dateHumana}}
                    </span>
                    <h3 class="text-xl ml-5 leading-6 font-medium text-gray-900 flex-1">
                        <strong>{{$job->title}}</strong>
                    </h3>
                    <div class="w-36 content-center">
                        <span>
                            <img class="mx-auto" src="{{'storage/logo_images/'.$job->logo}}">
                        </span>
                    </div>
                    <div>
                        <button class = "mr-5">
                            <i class="far fa-eye text-red-500 hover:text-red-900"></i>
                        </button>
                    </div>
        </div>



--}}

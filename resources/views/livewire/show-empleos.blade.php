<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ofertas de trabajo') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <x-table>
            <div class="px-2 py-3">
                <x-jet-input class="w-full" type="text" placeholder="Escriba lo que quiere buscar" wire:model="search">
                </x-jet-input>
            </div>
            @if ($jobs->count())
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>

                            <th scope="col"
                                class="px-2 py-3  text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Trabajo
                            </th>

                            <th scope="col"
                                class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Publicado en
                            </th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 ">
                        @foreach ($jobs as $job)
                            <tr>
                                <td class="px-4 py-4">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <span
                                                class="inline-flex items-center justify-center -ml-7 px-2 py-1 mr-2 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                                                {{ $job->dateHumana }}
                                            </span>
                                            <span
                                                class="text-base font-semibold py-1 px-2  text-gray-700   last:mr-0 mr-2">
                                                <strong>{{ $job->localidad }}</strong>
                                                @if ($job->provincia != $job->localidad)
                                                    ( {{ $job->provincia }} )
                                                @endif
                                            </span>

                                            @isset($job->discapacidad)
                                                <span style="padding-top: 0.2em; padding-bottom: 0.2rem"
                                                    class="inline-flex items-center space-x-1 text-xs px-2 bg-green-50 border border-bg-green-900 text-green-800 rounded-full">
                                                    Discapacidad
                                                </span>
                                            @endisset

                                            @isset($job->practicas)
                                                <span style="padding-top: 0.2em; padding-bottom: 0.2rem"
                                                    class="inline-flex items-center space-x-1 text-xs px-2 bg-red-50 border border-bg-red-900 text-red-800 rounded-full">
                                                    Prácticas
                                                </span>
                                            @endisset
                                            @isset($job->teletrabajo)
                                                <span style="padding-top: 0.2em; padding-bottom: 0.2rem"
                                                    class="inline-flex items-center space-x-1 text-xs px-2 bg-indigo-50 border border-bg-indigo-900 text-indigo-800 rounded-full">
                                                    Teletrabajo
                                                </span>
                                            @endisset
                                            @isset($job->ett)
                                                <span style="padding-top: 0.2em; padding-bottom: 0.2rem"
                                                    class="inline-flex items-center space-x-1 text-xs px-2 bg-blue-50 border border-bg-blue-900 text-blue-800 rounded-full">
                                                    ETT
                                                </span>
                                            @endisset

                                            <div class="text-lg font-bold text-gray-900 py-2">
                                                {{ $job->title }}
                                            </div>



                                            <div class="text-sm text-gray-900">
                                                {{ $job->excerpt }}
                                            </div>
                                            <div class="py-1">
                                                @isset($job->contrato)
                                                    <span
                                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-black bg-gray-300 rounded">
                                                        <strong>Contrato:</strong>
                                                        <span class="px-1 font-semibold">{{ $job->contrato }}</span>
                                                    </span>

                                                @endisset
                                                @isset($job->jornada)
                                                    <span
                                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-black bg-gray-300 rounded">
                                                        <strong>Jornada:</strong>
                                                        <span class="px-1 font-semibold">{{ $job->jornada }}</span>
                                                    </span>
                                                @endisset
                                                @isset($job->salario)
                                                    <span
                                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-black bg-gray-300 rounded">
                                                        <strong>Salario:</strong>
                                                        <span class="px-1 font-semibold">{{ $job->salario }}</span>
                                                    </span>
                                                @endisset
                                                @isset($job->vacantes)
                                                    <span
                                                        class="inline-flex items-center justify-center px- py-1 text-xs font-bold leading-none text-black bg-gray-300 rounded">
                                                        <strong>Vacantes:</strong>
                                                        <span class="px-1 font-semibold">{{ $job->vacantes }}</span>
                                                    </span>
                                                @endisset
                                                @isset($job->experiencia)
                                                    <span
                                                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-black bg-gray-300 rounded">
                                                        <strong>Experiencia:</strong>
                                                        <span class="px-1 font-semibold">Requerida</span>
                                                    </span>
                                                @endisset

                                            </div>


                                        </div>
                                </td>


                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>
                                        <span>
                                            Publicado el {{ Carbon\Carbon::parse($job->datePosted)->format('d-m-Y') }}
                                        </span>
                                        <span>
                                            <img class="mx-auto" src="{{ 'storage/logo_images/' . $job->logo }}">
                                        </span>
                                        <span>
                                            <x-jet-button class="w-full bg-blue-500 hover:bg-blue-900 mt-2"
                                                onclick="window.open('{{ $job->JobUrl }}')">
                                                Ir a la oferta
                                            </x-jet-button>

                                        </span>
                                    </div>
                                </td>

                            </tr>


                            <!-- More people... -->

                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="px-2 py-3">
                    No existe ningún empleo coincidente
                </div>
            @endif
            @if ($jobs->hasPages())
                <div
                    class="bg-gray-50 px-4 py-3 mt-5 mb-5 mr-2 items-center justify-between border-t border-gray-200 sm:px-6">
                    {{ $jobs->links() }}
                </div>
            @endif
        </x-table>

    </div>
</div>

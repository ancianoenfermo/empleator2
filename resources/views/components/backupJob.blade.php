<div>
    <tr>
        <td class="px-6 py-4 whitespace-nowrap">
        <div class="flex items-center">

            <div class="ml-4">
                <div class="text-xl font-medium text-gray-900">
                    {{$job->title}}
                </div>
                <div>
                    <i class="fas fa-calendar-minus"></i>
                    {{$job->datePosted}}
                </div>



                <div class="text-sm text-gray-500">
                    <i class="fas fa-map-marked-alt"></i>
                    {{$job->localidad}} ({{$job->provincia}})


                    <i class="fas fa-file-contract"></i>
                    {{$job->contract}}
                </div>



                <div class="text-sm text-gray-500">
                    <i class="fas fa-map-marked-alt"></i>
                    {{$job->localidad}} ({{$job->provincia}})
                </div>
                <div class="text-sm text-gray-500" >
                    <i class="fas fa-file-contract"></i>
                    {{$job->contract}}
                </div>
                <div class="text-sm text-gray-500" >
                    <i class="fas fa-cloud-moon"></i>
                    {{$job->workingDay}}
                </div>
                <div class="text-sm text-gray-500" >
                    <i class="fas fa-wrench"></i>
                    {{$job->experience}}
                </div>
                <div class="text-sm text-gray-500" >
                    <i class="fas fa-users"></i>
                    {{$job->vacancies}}
                </div>

                <div class="text-sm text-gray-500" >
                    <i class="fas fa-euro-sign"></i>
                    {{$job->salario}}
                </div>

            </div>
        </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{$job->localidad}} ({{$job->provincia}})</div>
        </td>
        <td>
            HOOOOOOO
        <td>
    </tr>
</div>

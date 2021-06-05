<div class="bg-white shadow overflow-hidden sm:rounded-lg">

    @foreach ($jobs as $job)

        <div class="flex flex-col">
            <div class="bg-red-400">
                {{ $job->datePosted }} Publicado por: {{ $job->jobSource }}
            </div>
            <div class="bg-red-600">
                {{ $job->title }}
            </div>
        </div>

        <div class="flex flex-row">
            <div class="flex flex-col">
                <div class="bg-red-800">
                    <i class="fas fa-file-contract"></i>
                    {{ $job->contract }}
                </div>
                <div class="bg-red-800">
                    <i class="fas fa-file-contract"></i>
                    {{ $job->workingDay }}
                </div>
            </div>

            <div class="flex-1">
                {{ $job->excerpt }}
            </div>
        </div>
    @endforeach
</div>
<div class="bg-white px-4 py-3 items-center justify-between border-t border-gray-200 sm:px-6">
    {{ $jobs->links() }}
</div>

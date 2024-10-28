<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-[#3D6AB2] hover:underline">
                    <strong>{{ $job['title'] }}: </strong>Pays {{ $job['salary'] }} per year.
                </a>
            </li> 
        @endforeach
    </ul>
</x-layout>
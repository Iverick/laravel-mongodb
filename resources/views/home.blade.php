<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @empty($posts)
                        There are no posts
                    @endempty

                    @foreach($posts as $post)
                        @component('components.post', ['post' => $post])
                        @endcomponent
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

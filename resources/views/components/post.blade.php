<div class="mt-2 mb-2">
    <h1 class="text-xl md:text-2xl">{{ $post['title'] }}</h1>
    <p class="my-3">{{ $post['content'] }}</p>
    <small class="text-gray-500">{{ $post['user']['name'] }} - {{ $post['created_at'] }}</small>
    @if(\Auth::user()->id === $post['user_id'])
        <div class="flex-row">
            <a href="{{ route('post.edit.form', ['id' => $post['_id']]) }}" class="inline-block align-middle pb-1 text-decoration-none text-gray-600">
                @component('components.edit')
                @endcomponent
            </a>
            <form method="POST" action="{{ route('post.delete') }}" class="inline-block align-middle">
                @csrf

                <input type="hidden" name="id" value="{{ $post['_id'] }}" />
                <button class="border-0 bg-transparent text-red-400">
                    @component('components.delete')
                    @endcomponent
                </button>
            </form>
        </div>
    @endif
</div>
<hr>

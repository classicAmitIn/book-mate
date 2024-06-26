<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('books.update', $book) }}">
                        @csrf
                        @method('patch')
                        <x-input-label for="title" :value="__('Title of your Book')" />
                        <x-text-input
                            id="title"
                            name="title"
                            placeholder="{{ __('Title of your book?') }}"
                            :value="old('title', $book->title)"
                            required autofocus
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        <x-primary-button class="mt-4">{{ __('Update Book') }}</x-primary-button>
                        <a href="{{ route('books.index') }}">{{ __('Cancel') }}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

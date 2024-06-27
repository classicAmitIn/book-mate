<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Books') }}
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('books.store') }}">
            @csrf
            <x-text-input
                name="title"
                placeholder="{{ __('Title of your book?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('title') }}</x-text-input>
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Add Book') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>
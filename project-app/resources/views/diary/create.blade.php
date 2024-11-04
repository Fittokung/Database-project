<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Diary') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    <!-- Display user greeting -->
                    <h1 class="text-2xl font-bold mb-4">{{ __('Hello, ') . Auth::user()->name . '!' }}</h1>
                    <p class="mt-4"><b>{{ __("How was your day? Create Diary Entry Here") }}</b></p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Form to create a new diary entry -->
                    <form method="POST" action="{{ route('diary.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="date"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date</label>
                            <input type="date" id="date" name="date"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-100"
                                value="{{ old('date') }}" required>
                            @error('date')
                                <div class="text-red-500 text-sm">{{ $message }}</div> <!-- Displaying the error message -->
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="content"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Content</label>
                            <textarea id="content" name="content" rows="5"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-100"
                                required>{{ old('content') }}</textarea>
                            @error('content')
                                <div class="text-red-500 text-sm">{{ $message }}</div> <!-- Displaying the error message -->
                            @enderror
                        </div>

                        <x-primary-button>{{ __('Save Entry') }}</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <center>
        <!-- Back to Previous Page Button -->
        <x-secondary-button onclick="disableFormSubmissionAndGoBack()">
            {{ __('Back to Previous') }}
        </x-secondary-button>
    </center>

    <script>
        function disableFormSubmissionAndGoBack() {
            window.onbeforeunload = null; // Disable any beforeunload
            window.history.back(); // Navigate back to the previous page
        }
    </script>
</x-app-layout>
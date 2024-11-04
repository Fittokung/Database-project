<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 mt-5"
        style="display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 0px;gap: 9px; mt">
        <div class="max-w-3xl  sm:px-6  ">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
        <div class="max-w-3xl  sm:px-6  ">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                {{-- Add these lines --}}
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-photo-form')
                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
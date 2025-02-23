<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <a href="{{ route('superadmin.create') }}" style="background-color:blue;color:white;padding:5px;margin-left:50%;border-radius:5px;">
                        Invite Friends
                    </a>
                </div>

                <table class="min-w-full bg-white border border-gray-300 rounded-md" width="100%">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="py-2 px-4 border-b">Id</th>
                                <th class="py-2 px-4 border-b">Email</th>
                                <th class="py-2 px-4 border-b">Role</th>
                                <th class="py-2 px-4 border-b">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invitations as $invitation)
                                <tr class="border-b">
                                    <td class="py-2 px-4">{{ $invitation->id }}</td>
                                    <td class="py-2 px-4">{{ $invitation->email }}</td>
                                    <td class="py-2 px-4">{{ $invitation->role }}</td>
                                    <td class="py-2 px-4">{{ $invitation->created_at->format('Y-m-d H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{ route('shorten.create') }}" style="background-color:blue;color:white;padding:5px;margin-left:50%;border-radius:5px;">
                        Generate Url
                    </a>
                <table class="min-w-full bg-white border border-gray-300 rounded-md" width="100%">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="py-2 px-4 border-b">Id</th>
                                <th class="py-2 px-4 border-b">Email</th>
                                <th class="py-2 px-4 border-b">Role</th>
                                <th class="py-2 px-4 border-b">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invitations as $invitation)
                                <tr class="border-b">
                                    <td class="py-2 px-4">{{ $invitation->id }}</td>
                                    <td class="py-2 px-4">{{ $invitation->email }}</td>
                                    <td class="py-2 px-4">{{ $invitation->role }}</td>
                                    <td class="py-2 px-4">{{ $invitation->created_at->format('Y-m-d H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
  
       
                </div>
        </div>
    </div>
</x-app-layout>

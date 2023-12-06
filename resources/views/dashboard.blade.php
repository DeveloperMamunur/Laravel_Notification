<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach (auth()->user()->unreadNotifications as $notification)
                        <div class="bg-blue-400 p-3 m-2">
                            <a class="bg-red-400 p-3 rounded" href="{{route('markasread', $notification->id)}}">Unread Notification</a>
                            <b class="font-black">{{$notification->data['name']}}</b> Welcome to registration!!!
                        </div>
                    @endforeach
                    @foreach (auth()->user()->readNotifications as $notification)
                        <div class="bg-blue-400 p-3 m-2">
                            <a class="bg-gray-300 p-3 rounded" href="{{route('markasread', $notification->id)}}">Read Notification</a>
                            <b class="font-black">{{$notification->data['name']}}</b> Welcome to registration!!!
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

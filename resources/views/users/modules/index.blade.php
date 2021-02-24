@extends('layouts.app')

@section('content')

    <div class="max-w-screen-xl mx-auto px-4">
        <!-- Grid wrapper -->
        <div class="-mx-4 flex flex-wrap">
            <!-- Grid column -->
            <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
                <!-- Column contents -->
                <div class="flex-1 px-10 py-12 bg-white rounded-lg shadow-lg">
                    <h1 class="text-2xl font-medium mb-1">{{ $user->name }} <br> {{ $user->email }}</h1>
                    <p>Posted {{ $modules->count() }} {{ Str::plural('module', $modules->count()) }}</p> <br>
                    <p>Adres: Schietsekade 42</p>
                    <p>Stad: Bleskesgraaf</p>
                    <p>Postcode: 3212AE</p>
                    <br>

                    @if (auth()->user()->username === $user->username)
                        <div class="mb-4">
                            <label for="body" class="sr-only">Body</label>
                            <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Beschrijving">Hier staat je oude beschrijving</textarea>
                            @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Update</button>
                        </div>
                    @else

                        <p>Bescrijving hier</p>

                    @endif

                </div>
            </div>
            <!-- Grid column -->
            <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/2 ">
                <!-- Column contents -->
                <div class="flex-1 px-10 py-12 bg-white rounded-lg shadow-lg ">
                    <div class="bg-white p-6 rounded-lg ">
                        @if ($modules->count())
                            @foreach ($modules as $module)
                                <x-module :module="$module" /> <br>
                            @endforeach

                            {{ $modules->links() }}
                        @else
                            <p>{{ $user->name }} does not have any modules</p>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>






@endsection

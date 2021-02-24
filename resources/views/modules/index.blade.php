@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            @auth
                <form action="{{ route('modules') }}" method="post" class="mb-4">
                    @csrf

                    <div class="mb-4">
                        <label for="title" class="sr-only">Body</label>
                        <textarea name="title" id="title" cols="30" rows="1" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') border-red-500 @enderror" placeholder="Titel"></textarea>
                        @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>



                    <div class="mb-4">
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Beschrijving"></textarea>
                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="category" class="sr-only">category</label>

                        <label for="category" class="p-2">Kies een categorie:</label>
                        <br>
                        <select name="category" id="category" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option value="Keuken">Keuken</option>
                            <option value="Woonkamer">Woonkamer</option>
                            <option value="Zolder">Zolder</option>
                            <option value="Tuin">Tuin</option>
                            <option value="Overig">Overig</option>
                        </select>

                        @error('category')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
                    </div>
                </form>
            @endauth

            @if ($modules->count())
                @foreach ($modules as $module)
                    <x-module :module="$module" />
                @endforeach

                {{ $modules->links() }}
            @else
                <p>There are no modules</p>
            @endif
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="flex justify-center">

        <div class="w-6/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="voornaam" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Voornaam</label>
                        <input type="text" name="voornaam" id="voornaam" placeholder="Voornaam" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('voornaam') border-red-500 @enderror" value="{{ old('voornaam')  }}">

                        @error('voornaam')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="md:w-1/2 px-3">
                        <label for="achternaam" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Achternaam</label>
                        <input type="text" name="achternaam" id="achternaam" placeholder="Achternaam" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('achternaam') border-red-500 @enderror" value="{{ old('achternaam')  }}">

                        @error('achternaam')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">E-mail</label>
                    <input type="text" name="email" id="email" placeholder="E-mail" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email')  }}">

                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">E-mail bevestigen</label>
                    <input type="text" name="email_confirmation" id="email" placeholder="Herhaal uw E-mail" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="">

                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="postcode" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Postcode</label>
                        <input type="text" name="postcode" id="postcode" placeholder="Postcode" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('postcode') border-red-500 @enderror" value="{{ old('postcode')  }}">

                        @error('postcode')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="md:w-1/2 px-3">
                        <label for="huisnummer" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Huisnummer</label>
                        <input type="text" name="huisnummer" id="huisnummer" placeholder="Huisnummer" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('huisnummer') border-red-500 @enderror" value="{{ old('huisnummer')  }}">

                        @error('huisnummer')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="straat" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Straatnaam</label>
                        <input type="text" name="straat" id="straat" placeholder="Straatnaam" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('straat') border-red-500 @enderror" value="{{ old('straat')  }}">

                        @error('straat')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="md:w-1/2 px-3">
                        <label for="woonplaats" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Woonplaats</label>
                        <input type="text" name="woonplaats" id="woonplaats" placeholder="Woonplaats" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('woonplaats') border-red-500 @enderror" value="{{ old('woonplaats')  }}">

                        @error('woonplaats')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="telefoon" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Telefoonnummer</label>
                        <input type="text" name="telefoon" id="telefoon" placeholder="Telefoonnummer" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('telefoon') border-red-500 @enderror" value="{{ old('telefoon')  }}">

                        @error('telefoon')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="md:w-1/2 px-3">
                        <label for="mobiel" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Mobiele telefoonnummer</label>
                        <input type="text" name="mobiel" id="mobiel" placeholder="Mobiele telefoonnummer" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('mobiel')  }}">
                    </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label for="password" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Wachtwoord</label>
                        <input type="password" name="password" id="password" placeholder="Kies een wachtwoord" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                        @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="md:w-1/2 px-3">
                        <label for="password" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Wachtwoord herhalen</label>
                        <input type="password" name="password_confirmation" id="password" placeholder="Herhaal uw wachtwoord" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                        @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="clearance">Kies een opties:</label>
                        <select class="bg-gray-100 border-2 w-full p-4 rounded-lg" id="grid-state" name="clearance" id="clearance">
                            <option value="afnemer">Afnemer</option>
                            <option value="aanbieder">Aanbieder</option>
                            <option value="beheerder">Beheerder</option>
                        </select>
                    </div>
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded">
                        Registreren
                    </button>
                </div>
            </form>
        </div>

    </div>

@endsection

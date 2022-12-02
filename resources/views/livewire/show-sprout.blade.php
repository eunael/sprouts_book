<div>
    <nav class="rounded-md w-full ml-3 mt-2">
        <ol class="list-reset flex">
            <li class="text-blue-500"><a href="{{route('dashboard')}}">Home</a></li>
            <li><span class="text-gray-500 mx-2">/</span></li>
            <li class="text-gray-500">{{ $sprout['title'] }}</li>
        </ol>
    </nav>

    <div class="bg-white rounded m-3 drop-shadow-xl p-3">
        <div class="mb-5">
            <span class="text-xl font-semibold">{{$sprout['title']}}</span><br>
            <span class="text-xs opacity-50 italic">por {{ $sprout->author['name'] }}&nbsp
                <img class="inline-block h-5 w-5 rounded-full ring-2 ring-white border" src="{{ asset('assets/avatar-default.png') }}" alt="{user.handle}"/></span>
        </div>
        <div class="mb-5">
            <p class="text-lg font-semibold">Ingredientes</p>
            <p class="text-sm text-justify">
                {{$sprout['ingredients']}}
            </p>
        </div>
        <div class="mb-5">
            <p class="text-lg font-semibold">Preparo</p>
            <p class="text-sm text-justify">
                {{$sprout['preparation']}}
            </p>
        </div>
        <div class="mb-5">
            <p class="text-lg font-semibold">Descrição</p>
            <p class="text-sm text-justify">
                {{$sprout['description']}}
            </p>
        </div>
    </div>
</div>

<div>
    <div class="bg-white rounded m-3 drop-shadow-xl p-3">
        <div class="mb-5">
            <span class="text-xl font-semibold">{{$this->sprout['title']}}</span><br>
            <span class="text-xs opacity-50 italic">por {{ $this->sprout->author['name'] }}&nbsp
                <img class="inline-block h-5 w-5 rounded-full ring-2 ring-white border" src="{{ asset('assets/avatar-default.png') }}" alt="{user.handle}"/></span>
        </div>
        <div class="mb-5">
            <p class="text-lg font-semibold">Ingredientes</p>
            <p class="text-sm text-justify">
                {{$this->sprout['ingredients']}}
            </p>
        </div>
        <div class="mb-5">
            <p class="text-lg font-semibold">Preparo</p>
            <p class="text-sm text-justify">
                {{$this->sprout['preparation']}}
            </p>
        </div>
        <div class="mb-5">
            <p class="text-lg font-semibold">Descrição</p>
            <p class="text-sm text-justify">
                {{$this->sprout['description']}}
            </p>
        </div>
    </div>
</div>

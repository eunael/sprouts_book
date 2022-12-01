<div>
    <div class="bg-white rounded m-3 drop-shadow-xl p-3">
        <div class="flex justify-start items-center mb-3">
            <div class="mr-3">
                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white border" src="{{ asset('assets/avatar-default.png') }}" alt="{user.handle}"/>
            </div>
            <div>
                <span class="font-semibold">{{ $sprout->author['name'] }}</span><br>
                <span class="text-xs opacity-50">{{ $sprout->author['email'] }}</span>
            </div>
        </div>
        <div class="mb-1">
            <p class="text-lg font-bold">{{$sprout['title']}}</p>
            <p class="text-sm">
                {{$sprout['description']}}
            </p>
        </div>
        <div class="flex justify-between items-center">
            <div class="flex justify-start items-center space-x-3">
                <button><i class="fa-regular fa-heart"></i></button>
                {{-- <button><i class="fa-regular fa-comment"></i></button> --}}
                <button type="button" wire:click='showSprout'><i class="fa-regular fa-eye"></i></button>
                <button><i class="fa fa-share-nodes"></i></button>
            </div>
            <div class="flex justify-end items-center space-x-3">
                {{-- <button><i class="fa fa-share-nodes"></i></button>
                <button><i class="fa-regular fa-bookmark"></i></button> --}}
                <span class="opacity-50 text-xs italic">{{ $sprout['created_at'] }}</span>
            </div>
        </div>
    </div>
</div>

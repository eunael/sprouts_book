<div class="bg-white rounded m-3 drop-shadow-xl">
    <div class="p-3">
        <div class="flex justify-start items-stretch mb-3">
            <div class="mr-3">
                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white border" src="{{ asset('assets/avatar-default.png') }}" alt="{user.handle}"/>
            </div>
            <div class="self-center font-semibold">
                {{ $post['autor'] }}
            </div>
        </div>
        <div class="mb-1">
            <p class="text-xl font-bold">{{$post['titulo']}}</p>
            <p>
                {{$post['descricao']}}
            </p>
        </div>
        <div class="flex justify-between items-center">
            <div class="flex justify-start items-center space-x-3">
                <button><i class="fa-regular fa-heart"></i></button>
                {{-- <button><i class="fa-regular fa-comment"></i></button> --}}
                <button><i class="fa-regular fa-eye"></i></button>
                <button><i class="fa fa-share-nodes"></i></button>
            </div>
            {{-- <div class="flex justify-end items-center space-x-3">
                <button><i class="fa fa-share-nodes"></i></button>
                <button><i class="fa-regular fa-bookmark"></i></button>
            </div> --}}
        </div>
    </div>
</div>

<div>
    <nav class="rounded-md w-full ml-3 mt-2">
        <ol class="list-reset flex">
            <li class="text-gray-500">Home</li>
        </ol>
    </nav>

    <div class="flex-col justify-center align-middle ">
        @foreach ($this->sprouts as $sprout)
            <livewire:sprout-post :sprout="$sprout" :key="$sprout['id']">
        @endforeach
    </div>

    <x-float-link-new-sprout />
</div>

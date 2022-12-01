<div>
    <div class="flex-col justify-center align-middle ">
        @foreach ($this->sprouts as $sprout)
            <livewire:sprout-post :sprout="$sprout" :key="$sprout['id']">
        @endforeach
    </div>
</div>

<div>
    <div class="flex-col justify-center align-middle ">
        @foreach ($posts as $post)
            <livewire:post :post="$post" :key="$post['id']">
        @endforeach
    </div>
</div>

<div>
    <nav class="rounded-md w-full ml-3 mt-2">
        <ol class="list-reset flex">
            <li class="text-blue-500"><a href="{{route('dashboard')}}">Home</a></li>
            <li><span class="text-gray-500 mx-2">/</span></li>
            <li class="text-gray-500">Publicar</li>
        </ol>
    </nav>
    <form wire:submit.prevent="submit">
        <div class="sm:overflow-hidden rounded m-3 drop-shadow-xl p-3 bg-white">
            <div class="mb-5">
                <label for="title" class="block text-sm font-medium"><span class="text-gray-700">Titulo</span> <span class="text-red-600">*</span></label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input type="text" id="title" wire:model='title'
                        class="block w-full flex-1
                            rounded-md border-gray-300 focus:border-indigo-500
                            focus:ring-indigo-500 sm:text-sm"
                        placeholder="Digite um título">
                    @error('title') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-5">
                <label for="ingredients" class="block text-sm font-medium"><span class="text-gray-700">Materiais e Ingredientes</span> <span class="text-red-600">*</span></label>
                <div class="mt-1">
                    <textarea id="ingredients" rows="3" wire:model='ingredients'
                        class="mt-1 block w-full rounded-md border-gray-300
                            shadow-sm focus:border-indigo-500 focus:ring-indigo-500
                            sm:text-sm"
                        placeholder='Liste os materiais e/ou ingredientes que serão usados. Exemplo: "- 100g de sal ..."'></textarea>
                    @error('ingredients') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-5">
                <label for="preparation" class="block text-sm font-medium"><span class="text-gray-700">Preparo</span> <span class="text-red-600">*</span></label>
                <div class="mt-1">
                    <textarea id="preparation" rows="3" wire:model='preparation'
                        class="mt-1 block w-full rounded-md border-gray-300
                            shadow-sm focus:border-indigo-500 focus:ring-indigo-500
                            sm:text-sm"
                        placeholder='Descreva como é feita de forma que outras também pessoas consigam fazer'></textarea>
                    @error('preparation') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-5">
                <label for="description" class="block text-sm font-medium"><span class="text-gray-700">Descrição</span> </label>
                <div class="mt-1">
                    <textarea id="description" rows="3" wire:model='description'
                        class="mt-1 block w-full rounded-md border-gray-300
                            shadow-sm focus:border-indigo-500 focus:ring-indigo-500
                            sm:text-sm"
                        placeholder='Informe uma descrição'></textarea>
                    @error('description') <span class="text-xs text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="text-end">
                <button class="rounded px-4 py-2 bg-purple-600 text-white font-semibold text-sm" type="submit">Publicar</button>
            </div>
        </div>
    </form>
</div>

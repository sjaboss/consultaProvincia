<div class="flex-1 relative"{{--  x-data --}}>
    <form {{-- action="{{route('search')}}" --}} autocomplete="off">
        <x-input name="name" wire:model="search" type="text" class="w-full" placeholder="¿Que estas buscando?" />
 
        <button class="absolute top-0 right-0 w-12 h-full bg-emerald-600 flex items-center justify-center rounded-r-md ">
            <x-search size="35" color="white" />
        </button> 
    </form>
</div>

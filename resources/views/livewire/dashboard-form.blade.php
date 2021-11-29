<div class="p-4">
    <x-jetstream::banner/>
    {{ $this->form }}
    <div class="flex justify-end pt-3 text-right">
        <x-jetstream::button wire:click="saveAndLaunch">Save & Launch</x-jetstream::button>
    </div>
</div>

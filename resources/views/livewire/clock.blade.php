<div wire:poll.5s @class([
    'w-full h-screen flex justify-center items-center' => true,
    'bg-gradient-radial from-yellow-500 via-red-900 to-blue-900' => $sun_is_up,
])>
    <a @class([
        'w-full max-w-2xl p-6 cursor-pointer' => true,
    ]) wire:click="toggle">
        @if($sun_is_up)
            <x-sun class="w-full" />
        @else
            <x-sleeping-sun class="w-full opacity-20" />
        @endif

        <a href='https://www.freepik.com/vectors/sun' class="fixed bottom-0 right-0 text-black">Sun vector created by freepik - www.freepik.com</a>
    </a>
</div>

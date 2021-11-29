<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Clock as ClockModel;

class Clock extends Component
{
    private ClockModel $clock;

    public bool $sun_is_up;

    public function boot()
    {
        $this->clock = auth()->user()->clock;
    }

    public function toggle()
    {
        if ($this->sun_is_up) {
            $this->clock->sunrise_at = now()->addDay()->setHour(7)->setMinutes(0);
        } else {
            $this->clock->sunrise_at = now();
        }
        $this->clock->save();
        $this->sun_is_up = !$this->sun_is_up;
    }

    public function mount()
    {
        $this->sun_is_up = $this->clock->sunrise_at->isPast();
    }

    public function render()
    {
        return view('livewire.clock');
    }
}

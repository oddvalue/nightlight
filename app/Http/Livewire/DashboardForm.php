<?php

namespace App\Http\Livewire;

use App\Models\Clock;
use Filament\Forms;
use Livewire\Component;

class DashboardForm extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    private $clock;

    public $sunrise_at;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\DateTimePicker::make('sunrise_at'),
        ];
    }

    public function mount()
    {
        $this->clock = Clock::whereHas('user')
    }

    public function render()
    {
        return view('livewire.dashboard-form');
    }
}

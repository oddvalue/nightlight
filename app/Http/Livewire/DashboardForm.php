<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class DashboardForm extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    use LivewireAlert;

    private $clock;

    public $sunrise;

    public $rules = [
        'sunrise' => [
            'date',
            'after:now'
        ],
    ];

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\DateTimePicker::make('sunrise')->reactive(),
        ];
    }

    public function save()
    {
        $this->validateOnly('sunrise');
        $this->clock->sunrise_at = $this->sunrise;
        $this->clock->save();
        $this->alert('success', 'Clock updated');
    }

    public function saveAndLaunch()
    {
        $this->save();
        return redirect()->route('clock');
    }

    public function boot()
    {
        $this->clock = auth()->user()->clock;
        $this->sunrise = $this->clock->sunrise_at;
    }

    public function render()
    {
        return view('livewire.dashboard-form');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class StartButton extends Component
{
    


    public function startQuiz(){
        return redirect()->route('quiz.categories');
    }

    public function render()
    {
        return view('livewire.start-button');
    }
}

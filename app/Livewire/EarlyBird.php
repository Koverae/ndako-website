<?php

namespace App\Livewire;

use App\Models\EarlyAdopter;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EarlyBird extends Component
{
    public $name, $email, $msg = 'Salut';

    public $rules = [
        'name' => 'required',
        'email' => 'required',
    ];
    public function save()
    {
        $this->validate();
        // Save early adopters to the database
        DB::table('early_adopters')->insert(['name' => $this->name, 'email' => $this->email]);

        // Return a success response
        $this->msg = 'Success';

        // return response()->json(['message' => 'Email saved successfully!']);
    }

    public function thanks(){
        $this->msg = 'Thanks';
    }
    public function render()
    {
        return view('livewire.early-bird');
    }
}

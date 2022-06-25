<?php

namespace App\Http\Livewire\Tags;

use Livewire\Component;
use phpDocumentor\Reflection\DocBlock\Tag;
use Illuminate\Support\Str;

class Store extends Component
{
    public $name;

    protected $rules = [
        'name' => ['required', 'unique:tags,name', 'min:3'],
        'email' => ['required', 'email']
    ];

    public function updated($propertyNmae) 
    {
        $this->validateOnly($propertyNmae);
    }

    public function store() 
    {
        $this->validate();

        Tag::create([
            'name'   => $this->name,
            'slug'  => Str::slug($this->name),
        ]);

        session()->flash('success', 'Tag created');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.tags.store');
    }
}

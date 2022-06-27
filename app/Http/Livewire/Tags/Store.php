<?php

namespace App\Http\Livewire\Tags;

use Livewire\Component;
use phpDocumentor\Reflection\DocBlock\Tag;
use Illuminate\Support\Str;

class Store extends Component
{
    public $name;

    public $openModal = false;

    protected $rules = [
        'name' => ['required', 'unique:tags,name', 'min:3', 'max:25']
    ];

    public function updated($propertyName) 
    {
        $this->validateOnly($propertyName);
    }

    public function openModalToCreateTag() 
    {
        $this->resetErrorBag();
        $this->openModal = true;

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

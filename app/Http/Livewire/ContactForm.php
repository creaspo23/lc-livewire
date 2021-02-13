<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $successMessage;



 

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required|min:5',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submitForm()
    {
        $contact= $this->validate();


        $contact['name'] = $this->name;
        $contact['email'] = $this->email;
        $contact['phone'] = $this->phone;
        $contact['message'] = $this->message;
        sleep(1);
        $this->reset();
        $this->successMessage = 'we received your message successfuly and will get back to you soon!';
        //session()->flash('success_message', 'we received your message successfuly and will get back to you soon!');
        //Mail::to('creaspo6@gmail.com')->send(new ContactFormMailable($contact));


    }

    public function render()
    {
        return view('livewire.ContactForm');
    }
}

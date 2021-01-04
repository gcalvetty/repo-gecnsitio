<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensRecivido;

class SendMail extends Component
{

    public $name;
    public $email;
    public $phone;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:6|max:50',
        'email' => 'required|email',
        'phone' => 'required|min:7',
        'message'   => 'required|string|min:10|max:100'
    ];
    
    protected $messages = [
        'correo.required' => 'The Email Address cannot be empty.',
        'correo.email' => 'The Email Address format is not valid.',
        'correo.phone' => 'The Phone cannot be empty',
        'correo.message' => 'The message cannot be empty',  
    ];
    
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);        
    }
    
    public function submitGECN()
    {
        $mensajeEmail = $this->validate(); 
        session()->flash('message', 'Message sending...');  
        $confEmail = Mail::to('gcalvetty@gecndev.com')->queue(new MensRecivido($mensajeEmail));        
        session()->flash('message', 'Message sended!!!');   
        $this->name="";
        $this->email="";
        $this->phone="";
        $this->message="";    
    }

    public function render()
    {
        return view('livewire.send-mail');
    }
}

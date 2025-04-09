<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Email;

class ContactForm extends Component
{
    public $company_name;
    public $contact_name;
    public $email;
    public $phone;
    public $subject;
    public $message;

    protected $rules = [
        'company_name' => 'string|max:255',
        'contact_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'string|max:20',
        'subject' => 'string|max:255',
        'message' => 'required|string',
    ];

    public function mount($subject = '', $message = '')
    {
        $this->subject = $subject;
        $this->message = $message;
    }

    public function submit()
    {
        $validatedData = $this->validate();

        \App\Models\ContactForm::create($validatedData);

        // Create an Email record
        $email = new Email();
        $email->recipient = $this->email;
        $email->subject = "Thank you for your enquiry";
        $email->body = "Dear {$this->contact_name},\n\nThank you for your enquiry. We will get back to you as soon as possible.\n\nBest regards Jordan\n\nCryox Co\n\nYour Subject:{$this->subject}\nYour Message:\n\n{$this->message}\n\nYour Number: {$this->phone}\n\nYour Company: {$this->company_name}";
        $email->is_sent = false;
        $email->save();

        // Send to admin
        $adminEmail = new Email();
        $adminEmail->recipient = "jordan@cryox.co";
        $adminEmail->subject = "New Enquiry From {$this->contact_name}";
        $adminEmail->body = "Email: {$this->email} \n\n Phone: {$this->phone}\n\nCompany: {$this->company_name}\n\nSubject: {$this->subject}\n\nMessage: {$this->message}";
        $adminEmail->is_sent = false;
        $adminEmail->save();

        session()->flash('success', 'Your enquiry has been submitted successfully!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

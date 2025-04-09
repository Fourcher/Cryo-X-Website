<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class AdminOrder extends Component
{

    public $order;
    public $admin_notes;
    public $shipping_status; 
    public $shipping_information;
    public $shipping_reference;
    public $status;


    public function mount(Order $order)
    {
        $this->order = $order;
        $this->admin_notes = $order->admin_notes;
        $this->shipping_status = $order->shipping_status;
        $this->shipping_information = $order->shipping_information;
        $this->shipping_reference = $order->shipping_reference;
        $this->status = $order->status;

    }

    public function save()
    {

        // Check if each field has changed

        $changelog = "";

        if($this->admin_notes != $this->order->admin_notes) {
            $this->order->admin_notes = $this->admin_notes;
            $changelog .= now() . " - Admin notes updated by admin. ";
        }

        if($this->shipping_status != $this->order->shipping_status) {
            $this->order->shipping_status = $this->shipping_status;
            $changelog .= now() . "- Shipping status updated by admin. ";

        }

        if($this->shipping_information != $this->order->shipping_information) {
            $this->order->shipping_information = $this->shipping_information;
            $changelog .= now() . "- Shipping information updated by admin. ";
        }

        if($this->shipping_reference != $this->order->shipping_reference) {
            $this->order->shipping_reference = $this->shipping_reference;
            $changelog .= now() . "- Shipping reference updated by admin. ";
        }

        if($this->status != $this->order->status) {

            $this->order->status = $this->status;
            $changelog .= now() . "- Order status updated by admin. ";
        }

        $this->order->admin_notes = $this->admin_notes . "\n" . $changelog;

        $this->order->save();
    }

    public function render()
    {
        return view('livewire.admin-order');
    }
}

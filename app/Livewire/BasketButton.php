<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Product;
use App\Models\Basket;
use App\Models\BasketItem;

class BasketButton extends Component
{
    
    public $amount_selected = 1;
    public $product;

    public $already_in_basket = false;
    public $amount_already_in_basket = 0;
    public function render()
    {
        return view('livewire.basket-button');
    }

    public function mount(Product $product)
    {
        $this->product = $product;
    
        // Determine if the user is authenticated or use session ID if not
        if (auth()->check()) {
            // If user is signed in, use user_id to find the basket
            $basket = Basket::where('user_id', auth()->id())
                            ->where('status', 'open')
                            ->first();
        } else {
            // If user is not signed in, use session ID to find the basket
            $sessionId = session()->getId();
            $basket = Basket::where('session_id', $sessionId)
                            ->where('status', 'open')
                            ->first();
        }
    
        // Check if the product is already in the basket
        if ($basket) {
            $basketItem = BasketItem::where('basket_id', $basket->id)
                                    ->where('product_id', $product->id)
                                    ->first();
    
            if ($basketItem) {
                $this->already_in_basket = true;
                $this->amount_already_in_basket = $basketItem->amount;
            }
        }
    }
    

    public function addToBasket()
    {

        if($this->product->status == "Preorder")
        {
            // Redirect to contact-us page with parameters "subject - preorder" and "message - Product name and quantity"
            return redirect()->route('contact-us', ['subject' => 'CryoCan Preorder Request', 'message' => "Automated Message: Preorder request of " . $this->product->title . " - " . $this->amount_selected . " units"]);
        }

        if ($this->product->stock_available < $this->amount_selected) {
            session()->flash('message', 'Not enough stock available!');
            return;
        }
        $sessionId = session()->getId();
        // Check if user is authenticated
        if (auth()->check()) {
            // Use user_id if the user is signed in
            $basket = Basket::firstOrCreate([
                'user_id' => auth()->id(),
                'status' => 'open',
                'session_id' => $sessionId
            ], [
                
                'subtotal' => 0,
                'postage' => 0,
                'discount' => 0,
                'total' => 0
            ]);
        } else {
            // Use session ID if the user is not signed in
            $basket = Basket::firstOrCreate([
                'session_id' => $sessionId,
                'status' => 'open',
            ], [
                
                'subtotal' => 0,
                'postage' => 0,
                'discount' => 0,
                'total' => 0
            ]);
        }
    
        $basketItem = BasketItem::firstOrCreate([
            'basket_id' => $basket->id,
            'product_id' => $this->product->id,
        ], [
            'product_price' => $this->product->price,
            'amount' => 0,
            'subtotal' => $this->product->price * $this->amount_selected
        ]);
    
        $basketItem->amount += $this->amount_selected;
        $basketItem->subtotal = $this->product->price * $basketItem->amount;
    
        $basketItem->save();

        $basket->updateTotal();

    


        $this->dispatch('basketUpdated');
        session()->flash('message', 'Product added to basket!');

        // Redirect to checkout page
        return redirect()->route('checkout');

    }
    
    
    

    public function increaseAmountSelected()
    {
        $this->amount_selected += 1;
    }

    public function decreaseAmountSelected()
    {
        if ($this->amount_selected > 1) {
            $this->amount_selected -= 1;
        }
    }

}

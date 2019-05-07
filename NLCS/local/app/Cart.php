<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    public function add($item, $id)
    {
        $giohang = ['qty' => 0, 'price' => $item->gia, 'item' => $item,'price1'=>($item->gia-($item->gia*$item->khuyen_mai/100))];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $giohang = $this->items[$id];
            }
        }
        $giohang['qty']++;
        if( $item->khuyen_mai==0){
            $giohang['price'] = $item->gia * $giohang['qty'];
            $this->items[$id] = $giohang;
            $this->totalQty++;
            $this->totalPrice += $item->gia;
        }
       else{
        $giohang['price1'] =($item->gia-( ($item->gia* $item->khuyen_mai)/100
        )) * $giohang['qty'];
        $this->items[$id] = $giohang;
        $this->totalQty++;
        $this->totalPrice +=($item->gia-( ($item->gia* $item->khuyen_mai)/100
       ));
       }
    }
   
    //xoa 1items
    public function reduceByone($id)
    {
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
        if($this->items[$id]['item']['khuyen_mai']==0){

        
        $this->totalPrice -= $this->items[$id]['item']['gia'];}
        else{
            $this->totalPrice -= ($this->items[$id]['item']['gia']-($this->items[$id]['item']['gia']* $this->items[$id]['item']['khuyen_mai'])/100);
        }
        if ($this->items[$id]['qty'] <= 0) {
            unset($this->items[$id]);
        }
    }
    public function removeItem($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
 
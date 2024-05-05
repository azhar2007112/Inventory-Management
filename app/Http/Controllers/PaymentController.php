<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Cart;
class PaymentController extends Controller
{

    public function checkout(Request $request)
    {
$data['meta_title'] = 'checkout';
$data['meta_description'] = '';
$data['meta_keywords']= '';



        return view('payment.checkout',$data);
    }



    public function view_cart(Request $request)
    {
$data['meta_title'] = 'Cart';
$data['meta_description'] = '';
$data['meta_keywords']= '';



        return view('payment.cart',$data);
    }
    public function cart_delete($id)
    {
Cart::remove($id);

        return redirect()->back();
    }


    

    public function add_to_cart(Request $request)
    {
        $getProduct = ProductModel::getSingle($request->product_id);
        $total = $getProduct->price;

$color_id= !empty($request->color) ? $request->color_id : 0;

Cart::add([
    'id'=>$getProduct->id,
    'name'=>'Product',
    'price'=>$total,
    'quantity'=>$request->qty,
    'attributes'=>array(
        'color_id'=>$color_id,
    )
    ]);

    return redirect()->back();  
    
    }


public function update_cart(Request $request)
{
    foreach($request->cart as $cart)
    {
        Cart::update($cart['id'],array(
            'quantity' => array(
                'relative' => false,
                'value' => $cart['qty']
            ),
        ));
    }
    return redirect()->back();
}

}

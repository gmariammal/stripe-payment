<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Products;
use Auth;
use Woo\GridView\DataProviders\EloquentDataProvider;
  
class ProductsController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $dataProvider = new EloquentDataProvider(Products::query());
        return view('products', [
            'dataProvider' => $dataProvider
        ]);

    } 
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show(Request $request)
    {
        $id = $request->route('id');
        $intent = auth()->user()->createSetupIntent();
        $product = Products::find($id);
        return view("payment", compact("product", "intent"));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function payment(Request $request)
    {
        $plan = Products::find($request->product);
        $user = Auth::user();
        $paymentMethod = $request->input('token');
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        $price = $plan->price;
        try
        {
            $user->charge($price * 100, $paymentMethod);
        }
        catch (\Exception $e)
        {
            return back()->withErrors(['message' => 'Error creating charge. ' . $e->getMessage()]);
        }
  
        return view("payment_success");
    }
}
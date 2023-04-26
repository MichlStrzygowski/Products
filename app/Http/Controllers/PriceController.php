<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Product;
use App\Http\Requests\StorePriceRequest;
use App\Http\Requests\UpdatePriceRequest;


class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePriceRequest $request, Product $product)
    {
        $price = Price::create(array_merge($request->all(), ['product_id' => $product->id]));
        return response()->json([
            'message' => ($price)? 'Price created successfully' : 'Price not created'
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Price $price)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePriceRequest $request, Product $product, Price $price)
    {

        $result = Price::where('product_id', $product->id)->where('id', $price->id)->update($request->all());

        return response()->json([
            'message' => ($result)? 'Price updated successfully' : 'Price not updated'
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Product $product, Price $price)
    {
        $result = Price::where('id', $price->id)->where('product_id', $product->id)->delete();

        return response()->json([
            'message' => ($result)? 'Price deleted successfully' : 'Price not deleted'
        ], 204);
    }
}

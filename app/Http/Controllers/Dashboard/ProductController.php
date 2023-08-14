<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\ProductInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\View\View;

class ProductController extends Controller
{
    private ProductInterface $product;
    private ProductService $service;


    public function __construct(ProductInterface $product, ProductService $service)
    {
        $this->product = $product;
        $this->service = $service;
    }
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $products = $this->product->get();
        return view('dashboard.product.index', compact('products'));
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
    public function store(ProductRequest $request)
    {
        $this->product->store($this->service->store($request));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $dashboard_product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $dashboard_product)
    {
        $this->product->update($dashboard_product->id, $this->service->update($request, $dashboard_product));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $dashboard_product)
    {
        $this->product->delete($dashboard_product->id);
        return redirect()->back();
    }
}

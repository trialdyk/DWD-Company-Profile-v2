<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Traits\UploadTrait;

class ProductService
{
    use UploadTrait;

    /**
     * update
     *
     * @return array
     */
    public function store(ProductRequest $request): array
    {
        $data = $request->validated();
        return [
            'name' => $data['name'],
            'photo' =>  $request->file('photo')->store(UploadDiskEnum::PRODUCT->value, 'public'),
            'description' => $data['description'],
        ];
    }



    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $product
     * @return array
     */
    public function update(ProductRequest $request, Product $dashboard_product): array|bool
    {
        $data = $request->validated();

        $old_logo = $dashboard_product->logo;

        if ($request->hasFile('logo')) {
            $this->remove($old_logo);
            $old_logo = $request->file('logo')->store(UploadDiskEnum::PRODUCT->value, 'public');
        }

        return [
            'name' => $data['name'],
            'description' => $data['description'],
            'photo' => $old_logo,
        ];
    }
}

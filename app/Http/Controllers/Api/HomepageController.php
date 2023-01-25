<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarouselResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SettingResource;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Product;
use App\Models\Settings\Setting;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function settings() {
        $settings = new SettingResource(Setting::first());
        return response()->json([
           'success' => true,
           'code' => 200,
           'message' => 'OK',
           'data' => $settings
        ]);
    }
    public function categories() {
        $categories = CategoryResource::collection(Category::all());
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'OK',
            'data' => $categories
        ]);
    }
    public function carousels() {
        $carousels = CarouselResource::collection(Carousel::all());
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'OK',
            'data' => $carousels
        ]);
    }
    public function popular_products() {
        $products = ProductResource::collection(Product::all()->random(8));
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'OK',
            'data' => $products
        ]);
    }
}

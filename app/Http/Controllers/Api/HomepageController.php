<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarouselResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SettingResource;
use App\Http\Resources\SpecialProductResource;
use App\Http\Resources\TestimonialResource;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Product;
use App\Models\Settings\Setting;
use App\Models\Testimonial;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function settings(): JsonResponse
    {
        $settings = new SettingResource(Setting::first());
        return response()->json([
           'success' => true,
           'code' => 200,
           'message' => 'OK',
           'data' => $settings
        ]);
    }
    public function categories(): JsonResponse
    {
        $categories = CategoryResource::collection(Category::all());
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'OK',
            'data' => $categories
        ]);
    }
    public function products(): JsonResponse
    {
        $products = ProductResource::collection(Product::all());
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'OK',
            'data' => $products
        ]);
    }
    public function carousels(): JsonResponse
    {
        $carousels = CarouselResource::collection(Carousel::all());
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'OK',
            'data' => $carousels
        ]);
    }
    public function popularRecipes(): JsonResponse
    {
        $products = ProductResource::collection(Product::all()->random(5));
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'OK',
            'data' => $products
        ]);
    }
    public function testimonials(): JsonResponse
    {
        $testimonials = TestimonialResource::collection(Testimonial::all()->random(3));
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'OK',
            'data' => $testimonials
        ]);
    }
}

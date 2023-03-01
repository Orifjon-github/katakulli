<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Http\Resources\GalleryResource;
use App\Http\Resources\HomepageResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SettingResource;
use App\Http\Resources\SpecialProductResource;
use App\Http\Resources\SpecialResource;
use App\Http\Resources\TestimonialResource;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Homepage;
use App\Models\Category;
use App\Models\Product;
use App\Models\Settings\Setting;
use App\Models\Special;
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

    public function showCategory($id): JsonResponse
    {
        $products = ProductResource::collection(Category::find($id)->products);
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'OK',
            'data' => $products
        ]);
    }

    public function gallery(): JsonResponse
    {
        $gallery = GalleryResource::collection(Gallery::all());
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'OK',
            'data' => $gallery
        ]);
    }
    public function homepage(): JsonResponse
    {
        $homepage = HomepageResource::collection(Homepage::all());
        $about = AboutResource::collection(About::all());
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'OK',
            'data' => ['homepage' => $homepage, 'about' => $about]
        ]);
    }
    public function popularRecipes(): JsonResponse
    {
        $products = ProductResource::collection(Product::where("category_id", 1)->get()->random(5));
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

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Store a new review
     */
    public function store(Request $request, Product $product)
    {
        $product->reviews()->create([
            'title' => $request->title,
            'body' => $request->body,
            'rating' => $request->rating,
            'user_id' => $request->user_id,
        ]);

        return ProductResource::make($product->load('reviews'));
    }

    /**
     * Update an existing review
     */
    public function update(Request $request, Product $product, Review $review)
    {
        $product->reviews()->find($review->id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'rating' => $request->rating,
            'user_id' => $request->user_id,
        ]);

        return ProductResource::make($product->load('reviews'));
    }

    /**
     * delete an existing review
     */
    public function delete(Request $request, Product $product)
    {
        $review = Review::find($request->review_id);

        $review->delete();

        return ProductResource::make($product->load('reviews'));
    }
}

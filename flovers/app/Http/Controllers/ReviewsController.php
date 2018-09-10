<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewsController extends Controller
{
  public function index()
  {
    $reviews = Review::all();
    return view('reviews.index', compact('reviews'));
  }
  public function show($id)
  {
    $review = Review::findOrFail($id);
    return view('reviews.show', compact('review'));
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PagesController extends Controller
{
  public function index()
  {
    $articles = Article::all();
    return view('pages.index', compact('articles'));
  }
  public function contact()
  {
      return view('pages.contacts');
  }
  public function create()
  {
      return view('pages.contacts');
  }
  public function about()
  {
      return view('pages.about');
  }
  public function zakazchiki()
  {
      return view('pages.nashi-zakazchiki');
  }
  public function partnery()
  {
      return view('pages.nashi-partnery');
  }
  public function helpful()
  {
      return view('pages.helpful-info');
  }

}

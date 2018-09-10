<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;


class PagesController extends Controller
{
  public function index()
  {
    return view('pages.index');
  }
  public function about()
    {
      $page = Page::findOrFail($id);
      return view('pages.about',compact('page'));
    }
  public function blog()
      {
        return view('pages.blog');
      }
  public function catalog()
      {
        return view('pages.catalog');
      }
  public function delivery()
      {
        return view('pages.delivery');
      }
  public function contact()
  {
    return view('pages.contacts');
  }

}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with("plats")->orderBy("order", "asc")->get();
        $contact = Contact::first();
        return view("welcome", compact("categories", "contact"));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $images = [
            [
                'title' => 'First Time Home Owner Ideas',
                'name' => 'Kristin Watson',
                'date' => 'Dec 19, 2021',
                'image' => 'assets/images/post-1.jpg'
            ],
            [
                'title' => 'How To Keep Your Furniture Clean',
                'name' => 'Robert Fox',
                'date' => 'Dec 15, 2021',
                'image' => 'assets/images/post-2.jpg'
            ],
            [
                'title' => 'Small Space Furniture Apartment Ideas',
                'name' => ' Kristin Watson',
                'date' => 'Dec 12, 2021',
                'image' => 'assets/images/post-3.jpg'
            ],
            [
                'title' => 'First Time Home Owner Ideas',
                'name' => 'Kristin Watson',
                'date' => 'Dec 19, 2021',
                'image' => 'assets/images/post-1.jpg'
            ],
            [
                'title' => 'How To Keep Your Furniture Clean',
                'name' => 'Robert Fox',
                'date' => 'Dec 15, 2021',
                'image' => 'assets/images/post-2.jpg'
            ],
            [
                'title' => 'Small Space Furniture Apartment Ideas',
                'name' => ' Kristin Watson',
                'date' => 'Dec 12, 2021',
                'image' => 'assets/images/post-3.jpg'
            ],
            [
                'title' => 'First Time Home Owner Ideas',
                'name' => 'Kristin Watson',
                'date' => 'Dec 19, 2021',
                'image' => 'assets/images/post-1.jpg'
            ],
            [
                'title' => 'How To Keep Your Furniture Clean',
                'name' => 'Robert Fox',
                'date' => 'Dec 15, 2021',
                'image' => 'assets/images/post-2.jpg'
            ],
            [
                'title' => 'Small Space Furniture Apartment Ideas',
                'name' => ' Kristin Watson',
                'date' => 'Dec 12, 2021',
                'image' => 'assets/images/post-3.jpg'
            ],
            
            ];
        return view('blog',['images'=>$images]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function list()
    {
    	$list = DB::table('Blogs')->get();
    	return $list;
    }
    public function productslist()
    {
    	$list = DB::connection('mysql2')->table('products')->get();
    	return $list;
    }
     public function adddata()
    {
    	DB::connection('mysql2')->table('products')->insert([
         'name' => 'T-Shirts',
         'description' => 'T-Shirts',
         'price' => 200
         ]);
    }
}

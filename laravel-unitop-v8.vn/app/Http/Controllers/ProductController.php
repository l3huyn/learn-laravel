<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show($id) {
        $price = 75000;

        $colors = ['red', 'blue'];
        
        return view('product.show', compact('id', 'price', 'colors'));
    }

    function create() {
        return "Thêm sản phẩm mới";
    }

    function update($id) {
        return "Cập nhật sản phẩm có ID: ". $id;
    }

}



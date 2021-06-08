<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get([
            'id',
            'name',
            'description',
            'photo',
        ]);

        return view('home', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.product-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            $extension = $file->getClientOriginalExtension();

            $photo = $product->id . '_photo.' . $extension;
            $request->file('photo')->move(base_path(). '/public/img/', $photo);
        }

        $product->photo = $photo;
        $product->save();

        return view('forms.product-form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('forms.product-show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('forms.product-edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

	public function destroy($id)
	{
		$product = Product::findOrFail($id);

		$path = base_path("public/img/{$product->photo}");

		if (File::exists($path)) {
			File::delete($path);
		}

		$product->delete();

		return redirect()->action([ProductController::class, 'index']);
	}
}

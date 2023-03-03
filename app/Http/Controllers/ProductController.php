<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

        // $this->middleware('auth');
        
        // $this->middleware('auth')->only([
        //     'create', 'store'
        // ]);

        // $this->middleware('auth')->except([
        //     'index', 'show'
        // ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        $products = Product::paginate();

        return view('admin.pages.products.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateProductRequest $request)
    {
        // $request->validate([
        //     'name'          => 'required|min:3|max:255',
        //     'description'   => 'nullable|min:3|max:2000',
        //     'arquivo'       => 'required|image',
        // ]);

        dd('OK');

        // dd($request->all());
        // dd($request->only(['name', 'description']));
        // dd($request->name);
        // dd($request->input('teste', 'default'));
        // dd($request->except('_token', 'name'));
        if ($request->file('arquivo')->isValid()) {
            // dd($request->file('arquivo')->store('products'));
            
            $nameFile = $request->name . '.' . $request->photo->extension();

            dd($request->file('arquivo')->storeAs('products', $nameFile));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $product = Product::where('id', $id)->first();
        
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back();
        }

        return view('admin.pages.products.show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

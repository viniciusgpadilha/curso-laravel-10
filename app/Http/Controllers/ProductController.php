<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use Illuminate\Http\Request;

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
        $teste = 123;

        $teste2 = 321;

        $teste3 = [1,2,3,4,5];
        
        $products = ['tv', 'ar condicionado', 'geladeira', 'celular'];

        return view('admin.pages.products.index', compact('teste', 'teste2', 'teste3', 'products'));
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
        //
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

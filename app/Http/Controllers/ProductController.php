<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    // Display Admin Options Page
    public function index()
    {
        return view('admin.Admin-opt-page');
    }

    // Display Add Product Page
    public function Admin_add_page()
    {
        return view('admin.Admin-add-page');
    }

    // Create a New Product
    public function create_pro(Request $request)
    {
        // $request->validate([
        //     'Pro_Name' => 'required|max:255|string',
        //     'Pro_Detail' => 'required|max:255|string',
        //     'Pro_Category' => 'required|max:255|string',
        //     'Pro_Price' => 'required|numeric',
        //     'Pro_Img' => 'nullable|file|image',
        // ]);

        $this->productService->createProduct($request);

        return redirect('Admin/add')->with('status', 'Product Created Successfully');
    }

    // Display Update Product Page
    public function Admin_upd_page(int $id)
{
    $product_det = $this->productService->getUpdatePage($id);

    if (!$product_det) {
        return redirect('Admin/view')->with('status', 'Product not found.');
    }

    return view('admin.Admin-upd-page', compact('product_det'));
}


    // Update an Existing Product
    public function Admin_update_page(Request $request, int $id)
    {
        // $request->validate([
        //     'Pro_Name' => 'required|max:255|string',
        //     'Pro_Detail' => 'required|max:255|string',
        //     'Pro_Category' => 'required|max:255|string',
        //     'Pro_Price' => 'required|numeric',
        //     'Pro_Img' => 'nullable|file',
        // ]);

        $this->productService->updateProduct($request, $id);

        return redirect('Admin/'.$id.'/update')->with('status', 'Product Updated Successfully');
    }

    // Display Delete Product Page
    public function Admin_del_page(int $id)
    {
        $this->productService->deleteProduct($id);
        return redirect()->back()->with('status', 'Product Deleted Successfully');
    }

    // Display All Products
    public function Admin_view_page()
    {
        $products = Product::all();
        return view('admin.Admin-view-page', compact('products'));
    }

    // Dynamic Search
    public function dy_search(Request $request)
    {
        $search = $request->input('search_query', '');
        $dyn_pro = Product::where('Pro_Name', 'LIKE', "%$search%")
            ->orWhere('Pro_Category', 'LIKE', "%$search%")
            ->get();

        return view('web.product', compact('dyn_pro'));
    }

    public function search(Request $request)
{
    $query = $request->input('query');
    $products = Product::where('Pro_Name', 'like', '%' . $query . '%')
        ->orWhere('Pro_Category', 'like', '%' . $query . '%')
        ->get();

    return response()->json(['results' => $products]);
}

}
 
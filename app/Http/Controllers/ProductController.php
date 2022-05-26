<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Section;
use App\Models\User;
use App\Exports\ProductExport;
use App\Imports\ProductImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Picqer;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sections = Section::all();
     $products = Product::paginate(5);
     return view('products.index', compact('sections'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::all();
        return view('products.create', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
]);
        // return $request->all();

        // product code section
        $sections = Section::all();
        $product_code = $request->product_code;
        $products = new Product;


        // image 
        if ($request->hasFile('product_image')) {
                
            $file = $request->file('product_image');
            $file->move(public_path(). '/products/images', $file->getClientOriginalName());
            $product_image = $file->getClientOriginalName();
            $products->product_image = $product_image;
        }
        
        // Barcode
        $generator = new Picqer\Barcode\BarcodeGeneratorJPG();
        file_put_contents('products/barcodes/' .$product_code . '.jpg', 
        $generator->getBarcode($product_code,
            $generator::TYPE_CODE_128, 3, 50));

        
        $products->product_name = $request->product_name;
        $products->product_code = $product_code;
        $products->quantity = $request->quantity;
        $products->price = $request->price;
        $products->buy = $request->buy;
        $products->alert_stock = $request->alert_stock;
        $products->description = $request->description;
        $products->section_id = $request->section_id;
        $products->barcode = $product_code . '.jpg';
        $products->save();




       return redirect()->back()->with('نجاح، تم اضافة المنتج بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $sections = Section::all();
        return view('products.edit', compact('product', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $products)
    {

        // if (! Gate::allows('update-products', $products)) {
        //     abort(403);
        // }
        // $section_id = $request->section_id;
        $product_code = $request->product_code;
        $products = Product::find($products);
        
        
        // image 
        if ($request->hasFile('product_image')) {
            

            if ($products->product_image != '') {
                         $proImage_path = public_path() . '/products/images/' .$products->product_image;
                         unlink($proImage_path);
            }
            

            $file = $request->file('product_image');
            $file->move(public_path(). '/products/images', $file->getClientOriginalName());
            $product_image = $file->getClientOriginalName();
            $products->product_image = $product_image;
        }
        
        // Barcode

        if ($request->product_code != '' 
                && $request->product_code != $products->product_code) {

                        $unique = Product::where('product_code', $product_code)->first();

                        if ($unique) {
                             return redirect()->back()->with('error', 'Product Code Already Taken!!');
                        }

                    if ($products->barcode != '') {
                         $barcode_path = public_path() . '/products/barcodes/' .$products->barcode;
                         unlink($barcode_path);
            }
            
            $generator = new Picqer\Barcode\BarcodeGeneratorJPG();
            file_put_contents('products/barcodes/' .$product_code . '.jpg', 
            $generator->getBarcode($product_code,
            $generator::TYPE_CODE_128, 3, 50));

            $products->barcode = $product_code . '.jpg';

        }
        
        
        
        $products->product_name = $request->product_name;
        $products->product_code =  $product_code;
        $products->quantity = $request->quantity;
        $products->price = $request->price;
        $products->buy = $request->buy;
        $products->alert_stock = $request->alert_stock;
        $products->description = $request->description;
        // $products->section_id = $request->section_id;
        $products->save();


        // $product->update($request->all());
        return redirect()->back()->with('تم حفظ');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('تم الحذف بنجاح');
    }

    public function GetProductBarcodes()
    {
       $productsBarcode = Product::select('barcode', 'product_code')->get();

       return view('products.barcode.indix', compact('productsBarcode'));
    }

    public function importExportView()
    {
       return view('import');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ProductExport, 'product.xlsx');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ProductImport,request()->file('file'));
             
        return back();
    }
}

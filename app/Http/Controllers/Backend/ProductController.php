<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Product;
use App\ProductImage;
use Image;

use App\AttributeSet;
use App\Attribute;
use App\Category;
use App\Brand;
use App\Offer;
use File;
use Auth;


class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //create
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $main_categories = Category::orderBy('name','asc')->where('parent_id', Null)->get();
        return view('backend.pages.product.create',compact('categories','main_categories'));
    }

    public function store(Request $request)
    {

    	$request->validate([
    		'title' => 'required|max:150',
    		'description' => 'required',
    		'quantity' => 'required',
    		
    	]);
    	
    	$product = new Product;

    	$product->title = $request->title;
    	$product->description = $request->description;
    	$product->price = $request->price;
    	$product->quantity = $request->quantity;
    	//$product->slug = Str::slug($request->title,'-');

        $new_slug= Str::slug($request->title,'-');

        $checkifsameslughas = Product::orWhere('slug','like','%'.$new_slug.'%')->get();
        if (count($checkifsameslughas) > 0) {
            $slug_last_value = count($checkifsameslughas)+1;
            $final_slug = $new_slug."-".$slug_last_value;
            $product->slug = $final_slug;
        }
        else {
            $product->slug = $new_slug;
        }

        $product->sku = $request->sku;
    	$product->category_id = $request->category;
    	$product->status = $request->status;
    	$product->admin_id = 1;        

    	$product->save();

    	if ( isset($request->product_image) && count($request->product_image) > 0) {
    		$i = 1;
    		foreach ($request->product_image as $image) {
    			//make image name
    			$img = time().$i.'.'.$image->getClientOriginalExtension();
    			//image location
    			$location = public_path('images/'.$img);

    			Image::make($image)->save($location);

    			$product_image = new ProductImage;

    			$product_image->image = $img;
    			$product_image->product_id = $product->id;

    			$product_image->save();
    			$i++;
    		}
    	}

        session()->flash('success', 'Product has been added successfully!!');

    	return redirect()->route('admin.product.create');


    	
    }

    public function manage()
    {
    	$products = Product::orderBy('id','desc')->get();
    	return view('backend.pages.product.index')->with('products',$products);
    }

    public function edit($id)
    {
    	$product = Product::find($id);
        
        $categories = Category::orderBy('name', 'asc')->get();
        $main_categories = Category::orderBy('name','asc')->where('parent_id', Null)->get();
        $sub_categories = Category::orderBy('name','asc')->whereNotNull('parent_id')->get();
        return view('backend.pages.product.editupdate',compact('product','categories','main_categories','sub_categories'));
    	//return view('backend.pages.product.edit')->with('product',$product);
    }

    public function update(Request $request, $id)
    {

    	$request->validate([
            'title' => 'required|max:150',
            'price' => 'required',
            'quantity' => 'required',
            
        ]);
        
        $product = Product::find($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        //$product->slug = Str::slug($request->title,'-');
        $product->sku = $request->sku;
        $product->category_id = $request->category;
        $product->admin_id = 1;
        $product->save();

        if ( isset($request->product_image) && count($request->product_image) > 0) {
            $i = 1;
            foreach ($request->product_image as $image) {
                //make image name
                $img = time().$i.'.'.$image->getClientOriginalExtension();
                //image location
                $location = public_path('images/'.$img);

                Image::make($image)->save($location);

                $product_image = new ProductImage;

                $product_image->image = $img;
                $product_image->product_id = $product->id;

                $product_image->save();
                $i++;
            }
            
        }
        
        session()->flash('success', 'Product has been updated successfully!!');
    	return back();   	
    }

    public function delete($id)
    {
    	$product = Product::find($id);

        //Delete Product Image
        $product_images = ProductImage::where('product_id', $product->id)->get();

        foreach ($product_images as $product_image) {
            if (File::exists('images/'.$product_image->image)) {
            File::delete('images/'.$product_image->image);
            $product_image->delete();
            }
        }

        //Remove from offers

        $offers = Offer::orWhere('product_id','like','%'.$product->id.'%')->get();

        if (!is_null($offers)) {
            foreach ($offers as $offer) {
            $replaced_product_id = str_replace(",$product->id","","$offer->product_id");
            $new_offer = Offer::find($offer->id);
            $new_offer->product_id = $replaced_product_id;
            $new_offer->save();

            }
        }        

    	if (!is_null($product)) {
    		$product->delete();
    	}

    	session()->flash('success', 'Product has been deleted successfully!!');
    	return back();
    }

    public function imageDelete($id)
    {
        $product_image = ProductImage::find($id);
        $product_image->delete();
        

        return back();
    }

    // Set featured image

    public function featured($id)
    {
        $product = Product::find($id);

        if ($product->featured == 0) {
            $product->featured = 1;
            $product->save();
        }
        elseif ($product->featured == 1) {
            $product->featured = 0;
            $product->save();
        }
        return back();
    }

    public function week_deals($id)
    {
        $product = Product::find($id);

        if ($product->week_deals == 0) {
            $product->week_deals = 1;
            $product->save();
        }
        elseif ($product->week_deals == 1) {
            $product->week_deals = 0;
            $product->save();
        }
        return back();
    }

    public function onsale($id)
    {
        $product = Product::find($id);

        if ($product->onsale == 0) {
            $product->onsale = 1;
            $product->save();
        }
        elseif ($product->onsale == 1) {
            $product->onsale = 0;
            $product->save();
        }
        return back();
    }

    public function toprated($id)
    {
        $product = Product::find($id);

        if ($product->toprated == 0) {
            $product->toprated = 1;
            $product->save();
        }
        elseif ($product->toprated == 1) {
            $product->toprated = 0;
            $product->save();
        }
        return back();
    }

}

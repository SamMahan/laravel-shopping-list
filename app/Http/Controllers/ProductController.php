<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Http\Request;
    use App\Product;

    class ProductController extends Controller
    {
      public function __construct()
       {
         //  $this->middleware('auth:api');
       }

       /**
        * create a product resource
        *
        * @return \Illuminate\Http\Response
        */
       public function create(Request $request)
       {
           try{ 
            $this->validate($request, [
                'location_id' => 'required',
                'name' => 'required'
            ]);

            $product = new Product;
            $product->fill($request->input());
            $product->save();
            return response()->json($product);

           } catch(\Exception $err) {
                echo $err->getMessage();
           }
       }

        /**
        * delete a location resource
        *
        * @return \Illuminate\Http\Response
        */
        public function delete(Request $request, $productId)
        {
            Product::destroy($productId);
            return response('', 200);
        }

        /**
        * get all locations 
        *
        * @return \Illuminate\Http\Response
        */
        public function getAll(Request $request)
        {
            return Product::all();
        }
    }    
?>
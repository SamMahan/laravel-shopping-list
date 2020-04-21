<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Http\Request;
    use App\Product;
    use App\ShopList;

    class ShopListController extends Controller
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
            $this->validate($request, [
                'product_id' => 'required',
                'quantity' => 'required'
            ]);

            $shopList = new ShopList;
            $shopList->fill($request->input());
            $shopList->save();
            return response()->json($shopList);
       }

        /**
        * delete a location resource
        *
        * @return \Illuminate\Http\Response
        */
        public function delete(Request $request, $shopListId)
        {
            ShopList::destroy($shopListId);
            return response('', 200);
        }

        /**
        * get all locations 
        *
        * @return \Illuminate\Http\Response
        */
        public function getAll(Request $request)
        {
            return ShopList::all();
        }
    }    
?>
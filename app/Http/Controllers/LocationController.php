<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Http\Request;
    use App\User;
    use App\Location;

    class LocationController extends Controller
    {
      public function __construct()
       {
         //  $this->middleware('auth:api');
       }

       /**
        * create a location resource
        *
        * @return \Illuminate\Http\Response
        */
       public function create(Request $request)
       {
            $this->validate($request, [
                'priority' => 'required',
                'name' => 'required'
            ]);

            $location = new Location;
            $location->fill($request->input());
            $location->save();
            return response()->json($location);
       }

        /**
        * delete a location resource
        *
        * @return \Illuminate\Http\Response
        */
        public function delete(Request $request, $locationId)
        {
            Location::destroy($locationId);
            return response('', 200);
        }


        /**
        * get all locations 
        *
        * @return \Illuminate\Http\Response
        */
        public function getAll(Request $request)
        {
            return Location::all();
        }
    }    
?>
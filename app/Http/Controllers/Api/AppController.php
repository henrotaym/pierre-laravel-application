<?php

namespace App\Http\Controllers\Api;



use App\Models\App;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Resources\AppResource;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // get all the App
        $app = new AppResource(App::paginate());
        return response(['app' => $app, 'message' => 'Retrieved successfully'], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // $validator = Validator::make($data, [
        //     'name' => 'required|max:255',
        //     'url' => 'required|max:255',
        // ]);
        // if ($validator->fails()) {
        //     return response(['error' => $validator->errors(), 'Validation Error']);
        // }

        $app = App::create($data);
        return response(['app' => new AppResource($app), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($appId)
    {
        $app = App::find($appId);
        return response(['app' => new AppResource($app), 'message' => 'Retrieved successfully'], 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $appId)
    {
        $app = App::find($appId);
        $app->update($request->all());
        return response(['app' => new AppResource($app), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($appId)
    {
        $app = App::find($appId);
        $app->delete();

        return response(['message' => 'Deleted']);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\UserDetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserDetailRequest;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserDetail::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserDetailRequest $request)
    {
        $validated = $request->validated();

        return UserDetail::create($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserDetailRequest $request, $id)
    {
        $validated = $request->validated();

        $userDetail = UserDetail::findOrFail($id);
        $userDetail->update($validated);

        return $userDetail;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userDetail = UserDetail::findOrFail($id);
        $userDetail->delete();

        return response()->json('', 204);
    }
}

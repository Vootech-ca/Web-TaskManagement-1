<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group Users
 * @authenticated
 */
class UserController extends Controller
{
    /**
     * Get All
     * if 200 will return all
     * if 400 there is an error in sending parameters,
     * if 401 there is an error in token,
     * if 404 the resource not found,
     * if 500 there is an error in server
     * @urlParam _page int optional the resource page number default id 0. Example: 1
     * @urlParam _take int optional the resource rows you want to return 10. Example: 10
     * @urlParam _sort string optional the column want to sort name and default is id. Example: test_name
     * @urlParam _dir enum optional the resource direction you want muse be asc or desc and default is desc. Example: asc, desc
     * @urlParam _filter string optional the search in all column with that keyword that will send. Example: Ahmed
     * @responseFile 200 responses/users/all.json
     * @response 400 {}
     * @response 401 {}
     */
    public function index(Request $request)
    {
        try {
            [$total, $all] = getTotalWithModel(
                User::filtering($request),
                $request->get('_page', 0),
                $request->get('_take', 10)
            );
            return response()->json(UserResource::collection($all), Response::HTTP_OK, ['x-total-count' => $total]);
        } catch (Exception $ex) {
            return response()->noContent(Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Create
     * If 201 will return the single data,
     * if 400 there is an error in sending parameters,
     * if 401 there is an error in token,
     * if 404 the resource not found,
     * if 500 there is an error in server,
     * @bodyParam username string required the username. Example: name here
     * @bodyParam password string required the password of the user. Example: 12345678
     * @bodyParam user_type enum required the user type of the user must be one of these [Admin, User]. Example: Admin
     * @bodyParam gender boolean required the gender of the user it could be true(male) or false(female) or 1 and 0. Example: 1 or true
     * @responseFile 201 responses/users/get.json
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     * @response 406 {}
     * @responseFile 422 responses/users/errors.json
     */
    public function store(UserRequest $request)
    {
        DB::beginTransaction();
        try {
            $store = User::create($request->validated());
            if ($store) {
                DB::commit();
                return response()->json(new UserResource($store), Response::HTTP_CREATED);
            }
            DB::rollBack();
            return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->noContent(Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Update
     * If 202 will return the single data,
     * if 400 there is an error in sending parameters,
     * if 401 there is an error in token,
     * if 404 the resource not found,
     * if 500 there is an error in server,
     * @urlParam user int required the resource id. Example: 1
     * @bodyParam username string required the username. Example: name here
     * @bodyParam password string required the password of the user. Example: 12345678
     * @bodyParam user_type enum required the user type of the user must be one of these [Admin, User]. Example: Admin
     * @bodyParam gender boolean required the gender of the user it could be true(male) or false(female) or 1 and 0. Example: 1 or true
     * @responseFile 202 responses/users/get.json
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     * @response 406 {}
     * @responseFile 422 responses/users/errors.json
     */
    public function update(UserRequest $request, User $user)
    {
        DB::beginTransaction();
        try {
            $update = $user->update($request->validated());
            if ($update) {
                DB::commit();
                return response()->json(new UserResource($user), Response::HTTP_ACCEPTED);
            }
            DB::rollBack();
            return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->noContent(Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Delete
     * If 200 will delete data,
     * if 400 there is an error in sending parameters,
     * if 401 there is an error in token,
     * if 404 the resource not found,
     * if 500 there is an error in server,
     * @urlParam user int required the resource id. Example: 1
     * @response 200 {}
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     * @response 500 {}
     */
    public function destroy(User $user): \Illuminate\Http\Response
    {
        DB::beginTransaction();
        try {
            if ($user->delete()) {
                DB::commit();
                return response()->noContent(Response::HTTP_OK);
            }
            DB::rollBack();
            return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->noContent(Response::HTTP_BAD_REQUEST);
        }
    }
}

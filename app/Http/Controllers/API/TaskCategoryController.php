<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskCategoryRequest;
use App\Http\Resources\TaskCategoryResource;
use App\Models\TaskCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group Task Category
 * @authenticated
 */
class TaskCategoryController extends Controller
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
     * @responseFile 200 responses/taskCategories/all.json
     * @response 400 {}
     * @response 401 {}
     */
    public function index(Request $request): JsonResponse
    {
        try {
            [$total, $all] = getTotalWithModel(
                TaskCategory::filtering($request),
                $request->get('_page', 0),
                $request->get('_take', 10)
            );
            return response()->json(TaskCategoryResource::collection($all), Response::HTTP_OK, ['x-total-count' => $total]);
        } catch (Exception $ex) {
            return response()->json($ex->getMessage(), Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Create
     * If 201 will return the single data,
     * if 400 there is an error in sending parameters,
     * if 401 there is an error in token,
     * if 404 the resource not found,
     * if 500 there is an error in server,
     * @bodyParam name string required the name of the task category. Example: name here
     * @responseFile 201 responses/taskCategories/get.json
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     * @response 406 {}
     * @responseFile 422 responses/taskCategories/errors.json
     */
    public function store(TaskCategoryRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try {
            $store = TaskCategory::create([
                'name' => $request->name
            ]);
            if ($store) {
                DB::commit();
                return response()->json(new TaskCategoryResource($store), Response::HTTP_CREATED);
            }
            DB::rollBack();
            return response()->json([], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json($ex->getMessage(), Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Update
     * If 202 will return the single data,
     * if 400 there is an error in sending parameters,
     * if 401 there is an error in token,
     * if 404 the resource not found,
     * if 500 there is an error in server,
     * @urlParam taskCategory int required the resource id. Example: 1
     * @bodyParam name string required the name of the task category. Example: name here
     * @responseFile 202 responses/taskCategories/get.json
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     * @response 406 {}
     * @responseFile 422 responses/taskCategories/errors.json
     */
    public function update(TaskCategoryRequest $request, TaskCategory $taskCategory):JsonResponse
    {
        DB::beginTransaction();
        try {
            $taskCategory->name = $request->name;
            if ($taskCategory->save()) {
                DB::commit();
                return response()->json(new TaskCategoryResource($taskCategory), Response::HTTP_ACCEPTED);
            }
            DB::rollBack();
            return response()->json([], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json($ex->getMessage(), Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Delete
     * If 200 will delete data,
     * if 400 there is an error in sending parameters,
     * if 401 there is an error in token,
     * if 404 the resource not found,
     * if 500 there is an error in server,
     * @urlParam taskCategory int required the resource id. Example: 1
     * @response 200 {}
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     * @response 500 {}
     */
    public function destroy(TaskCategory $taskCategory): JsonResponse
    {
        DB::beginTransaction();
        try {
            if ($taskCategory->delete()) {
                DB::commit();
                return response()->json([], Response::HTTP_OK);
            }
            DB::rollBack();
            return response()->json([], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json($ex->getMessage(), Response::HTTP_BAD_REQUEST);
        }
    }
}

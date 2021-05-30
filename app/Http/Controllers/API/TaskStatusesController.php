<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskStatusRequest;
use App\Http\Resources\TaskStatusResource;
use App\Models\TaskStatus;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

/**
 * @group Task Status
 * @authenticated
 */
class TaskStatusesController extends Controller
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
     * @responseFile 200 responses/taskStatus/all.json
     * @response 400 {}
     * @response 401 {}
     */
    public function index(Request $request): JsonResponse
    {
        try {
            [$total, $all] = getTotalWithModel(
                TaskStatus::filtering($request),
                $request->get('_page', 0),
                $request->get('_take', 10)
            );
            return response()->json(TaskStatusResource::collection($all), Response::HTTP_OK, ['x-total-count' => $total]);
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
     * @bodyParam name string required the name of task status. Example: name here
     * @responseFile 201 responses/taskStatus/get.json
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     * @response 406 {}
     * @responseFile 422 responses/taskStatus/errors.json
     */
    public function store(TaskStatusRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try {
            $store = TaskStatus::create([
                'name' => $request->name
            ]);
            if ($store) {
                DB::commit();
                return response()->json(new TaskStatusResource($store), Response::HTTP_CREATED);
            }
            DB::rollBack();
            return response()->json([], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Update
     * If 202 will return the single data,
     * if 400 there is an error in sending parameters,
     * if 401 there is an error in token,
     * if 404 the resource not found,
     * if 500 there is an error in server,
     * @bodyParam name string required the name of task status. Example: name here
     * @responseFile 202 responses/taskStatus/get.json
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     * @response 406 {}
     * @responseFile 422 responses/taskStatus/errors.json
     */
    public function update(TaskStatusRequest $request, TaskStatus $taskStatus): JsonResponse
    {
        DB::beginTransaction();
        try {
            $taskStatus->name = $request->name;
            if ($taskStatus->save()) {
                DB::commit();
                return response()->json(new TaskStatusResource($taskStatus), Response::HTTP_ACCEPTED);
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
     * @urlParam taskStatus int required the resource id. Example: 1
     * @response 200 {}
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     * @response 500 {}
     */
    public function destroy(TaskStatus $taskStatus): JsonResponse
    {
        DB::beginTransaction();
        try {
            if ($taskStatus->delete()) {
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

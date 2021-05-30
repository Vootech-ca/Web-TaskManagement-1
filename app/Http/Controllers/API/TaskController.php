<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use App\Models\TaskToUser;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;

/**
 * @group Tasks
 * @authenticated
 */
class TaskController extends Controller
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
     * @responseFile 200 responses/tasks/all.json
     * @response 400 {}
     * @response 401 {}
     */
    public function index(Request $request): JsonResponse
    {
        try {
            [$total, $all] = getTotalWithModel(
                Task::filtering($request),
                $request->get('_page', 0),
                $request->get('_take', 10)
            );
            return response()->json(TaskResource::collection($all), Response::HTTP_OK, ['x-total-count' => $total]);
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
     * @bodyParam category_id int required the task category id. Example: 1
     * @bodyParam status_id int required the task status id. Example: 1
     * @bodyParam title string required the task title. Example: task title
     * @bodyParam description string required the task description. Example: task description
     * @bodyParam start_date date required the task start date. Example: 25/06/2021
     * @bodyParam end_date date required the task start date. Example: 25/08/2021
     * @bodyParam users integer[] required the task users id. Example: [2, 7, 8]
     * @responseFile 201 responses/tasks/get.json
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     * @response 406 {}
     * @responseFile 422 responses/tasks/errors.json
     */
    public function store(TaskRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try {
            $store = Task::create([
                'category_id'   => $request->category_id,
                'status_id'     => $request->status_id,
                'title'         => $request->title,
                'description'   => $request->description,
                'start_date'    => $request->start_date,
                'end_date'      => $request->end_date,
                'created_by'    => authId()
            ]);
            if ($store) {
                $taskToUser = [];
                foreach ($request->users as $user) {
                    $taskToUser[] = [
                        'user_id'       => $user,
                        'task_id'       => $store->id,
                        'created_at'    => now(),
                        'updated_at'    => now()
                    ];
                }
                TaskToUser::insert($taskToUser);
                DB::commit();
                return response()->json(new TaskResource($store), Response::HTTP_CREATED);
            }
            DB::rollBack();
            return response()->json([], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Show
     * If 200 will return the single data,
     * if 400 there is an error in sending parameters,
     * if 401 there is an error in token,
     * if 404 the resource not found,
     * if 500 there is an error in server,
     * @urlParam task int required the resource id. Example: 1
     * @responseFile 201 responses/tasks/get.json
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     */
    public function show(Request $request, Task $task): JsonResponse
    {
        try {
            return response()->json(new TaskResource($task), Response::HTTP_OK);
        } catch (Exception $ex) {
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
     * @urlParam task int required the resource id. Example: 1
     * @bodyParam category_id int required the task category id. Example: 1
     * @bodyParam status_id int required the task status id. Example: 1
     * @bodyParam title string required the task title. Example: task title
     * @bodyParam description string required the task description. Example: task description
     * @bodyParam start_date date required the task start date. Example: 25/06/2021
     * @bodyParam end_date date required the task start date. Example: 25/08/2021
     * @responseFile 202 responses/tasks/get.json
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     * @response 406 {}
     * @responseFile 422 responses/tasks/errors.json
     */
    public function update(TaskRequest $request, Task $task): JsonResponse
    {
        DB::beginTransaction();
        try {
            $task->category_id   = $request->category_id;
            $task->status_id     = $request->status_id;
            $task->title         = $request->title;
            $task->description   = $request->description;
            $task->start_date    = $request->start_date;
            $task->end_date      = $request->end_date;
            if ($task->save()) {
                DB::commit();
                return response()->json(new TaskResource($task), Response::HTTP_ACCEPTED);
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
     * @urlParam task int required the resource id. Example: 1
     * @response 200 {}
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     * @response 500 {}
     */
    public function destroy(Task $task): JsonResponse
    {
        DB::beginTransaction();
        try {
            if ($task->delete()) {
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

    /**
     * Add User To Task
     * If 200 will return the single data,
     * if 400 there is an error in sending parameters,
     * if 401 there is an error in token,
     * if 404 the resource not found,
     * if 406 the the user array is empty,
     * if 406 the the user array is empty,
     * if 411 the user id inside array is not number,
     * if 417 the user in array is not found,
     * if 500 there is an error in server,
     * @urlParam task int required the resource id. Example: 1
     * @bodyParam users integer[] required the task users id. Example: [2, 7, 8]
     * @responseFile 201 responses/tasks/get.json
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     */
    public function addUserToTask(Request $request, Task $task): JsonResponse
    {
        DB::beginTransaction();
        try {
            if (count($request->users) < 0) {
                DB::rollBack();
                return response()->json([], Response::HTTP_NOT_ACCEPTABLE);
            }
            $taskToUser = [];
            foreach ($request->users as $user) {
                if (!is_numeric($user)) {
                    DB::rollBack();
                    return response()->json([], Response::HTTP_LENGTH_REQUIRED);
                }
                $find = User::find($user);
                if (!$find) {
                    DB::rollBack();
                    return response()->json([], Response::HTTP_EXPECTATION_FAILED);
                }
                $taskToUser[] = [
                    'user_id'       => $user,
                    'task_id'       => $task->id,
                    'created_at'    => now(),
                    'updated_at'    => now()
                ];
            }
            TaskToUser::insert($taskToUser);
            DB::commit();
            return response()->json(new TaskResource($task), Response::HTTP_OK);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json($ex->getMessage(), Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove User To Task
     * If 200 will return the single data,
     * if 400 there is an error in sending parameters,
     * if 401 there is an error in token,
     * if 404 the resource not found,
     * if 406 the the user array is empty,
     * if 406 the the user array is empty,
     * if 411 the user id inside array is not number,
     * if 417 the user in array is not found,
     * if 500 there is an error in server,
     * @urlParam task int required the resource id. Example: 1
     * @urlParam user int required the user id to remove in task. Example: 1
     * @responseFile 201 responses/tasks/get.json
     * @response 400 {}
     * @response 401 {}
     * @response 404 {}
     */
    public function removeUserToTask(Request $request, Task $task, User $user): JsonResponse
    {
        DB::beginTransaction();
        try {
            $taskToUser = TaskToUser::whereTaskId($task->id)->whereUserId($user->id)->firstOrFail();
            if ($taskToUser->delete()) {
                DB::commit();
                return response()->json(new TaskResource($task), Response::HTTP_OK);
            }
            DB::rollBack();
            return response()->json([], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json($ex->getMessage(), Response::HTTP_BAD_REQUEST);
        }
    }
}

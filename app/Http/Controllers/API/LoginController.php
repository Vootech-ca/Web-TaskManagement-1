<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group Login
 * APIs for user authentication
 */
class LoginController extends Controller
{
    /**
     * Login
     * if 200 user login in done,
     * if 401 the username or password is wrong
     * @bodyParam username string required the username of the user. Example: admin.
     * @bodyParam password string required The password of the user. Example: demodemo.
     * @responseFile responses/userLogin.json
     * @response 401 {}
     */
    public function login(Request $request) {
        $username   = $request->post('username');
        $password   = $request->post('password');
        $attempt    = is_numeric($username)
                ? Auth::attempt(['phone_no' => $username, 'password' => $password])
                : Auth::attempt(['username' => $username, 'password' => $password]);
        if($attempt) {
            $user = Auth::user();
            $success = optional($user)->createToken('c/afaNKrR0+ltL5UuE5D4Q==')->accessToken;
            return response()->json(['token' => $success, 'user_info' => New UserResource($user)], Response::HTTP_OK);
        }
        return response()->noContent(Response::HTTP_UNAUTHORIZED);
    }

    /**
     * Logout
     * @authenticated
     * Must logout using barrer token
     * @response {}
     */
    public function logout(): JsonResponse
    {
        optional(Auth::user())->token()->revoke();
        return response()->json([], Response::HTTP_OK);
    }
}

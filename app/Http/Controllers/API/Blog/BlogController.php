<?php

namespace App\Http\Controllers\API\Blog;

use App\Http\Controllers\API\BaseController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BlogController extends BaseController
{
    public function index(): JsonResponse
    {
        $posts = collect(json_decode(file_get_contents(storage_path('app/json/blog/posts.json'))));
        if ( !($posts && count($posts) > 0) ) {
            return $this->sendError('Posts not found', [], 204);
        }

        return $this->sendResponse($posts->toArray(), 'Posts received.');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

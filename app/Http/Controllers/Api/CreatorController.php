<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CreatorAllRenderResource;
use App\Models\Creator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CreatorController extends Controller
{
    public function index()
    {
        return Response::json(
            new CreatorAllRenderResource(Creator::query()->paginate())
        );
    }

    public function store(Request $request) {
        return Response::json(
            new CreatorAllRenderResource(Creator::query()->paginate())
        );
    }
}

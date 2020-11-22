<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class DiggingDeeperController extends Controller
{
    public function collection()
    {
        $result = [];

        $eloquentCollection = BlogPost::withTrashed()->get();

        $collection = collect($eloquentCollection->toArray());
        dd(__METHOD__, $collection);
    }
}

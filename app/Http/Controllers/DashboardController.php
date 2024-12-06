<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StatsAggregator;
use App\Models\Post;

class DashboardController extends Controller
{
    public function show()
    {


        return view("admin.dashboard", [
            "posts" => \App\Models\Post::published()->count(),
            "latest_posts" => \App\Models\Post::published()->latest()->take(2)->get(),
            // "postStats" => $results,
            // "postStats90" => $results90,
            // "postStats180" => $results180,
            // "postStats365" => $results365
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problem;
use Illuminate\Support\Facades\Input;

class ProblemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $this->authorize('create', Problem::class);
        return view('problems.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', Problem::class);
        $problem = new Problem;
        $problem->title = $request->title;
        $problem->description = $request->description;
        $problem->testdata = $request->file('testdata')->get();
        $problem->save();
    }

    public function show(Problem $problem)
    {
        return $problem->description;
    }

    public function fetch(Problem $problem)
    {
        $this->authorize('fetch', $problem);
        return ['description' => $problem->description,
                'testdata' => base64_encode($problem->testdata)];
    }

    public function index()
    {
        $problems = Problem::paginate(100);
        return view('problems.index', compact('problems'));
    }
}

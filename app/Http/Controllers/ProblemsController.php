<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problem;
use Illuminate\Support\Facades\Input;

class ProblemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show', 'index']]);
    }

    public function create()
    {
        $this->authorize('create');
        return view('problems.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create');
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
        $this->authorize('fetch');
        return ['description' => $problem->description,
                'testdata' => base64_encode($problem->testdata)];
    }

    public function index()
    {
        $problems = Problem::paginate(100);
        return view('problems.index', compact('problems'));
    }

    public function digest(Problem $problem)
    {
        $this->authorize('digest');
        return ['digest' => $problem->digest()];
    }
}

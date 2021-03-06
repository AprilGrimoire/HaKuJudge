<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problem;
use App\Models\Submission;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

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
        return view('problems.show', compact('problem'));
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
        $status = [];
        $ratio = [];
        $problem_ids = [];
        foreach ($problems as $problem) {
            $status[$problem->id] = '未提交';
            $ratio[$problem->id] = ['a' => 0, 'b' => 0];
            array_push($problem_ids, $problem->id);
        }
        if (Auth::check()) {
            $submissions = Auth::user()->submissions()->whereIn('problem_id', $problem_ids)->get();
            foreach ($submissions as $submission) {
                $status[$submission->problem_id] = '未通过';
            }
            foreach ($submissions as $submission) {
                if ($submission->status == 'Accepted') {
                    $status[$submission->problem_id] = '已通过';
                }
            }
        }
        $submissions = Submission::whereIn('problem_id', $problem_ids)->get();
        foreach ($submissions as $submission) {
            $ratio[$submission->problem_id]['b']++;
            if ($submission->status == 'Accepted') {
                $ratio[$submission->problem_id]['a']++;
            }
        }
        return view('problems.index', compact('problems', 'status', 'ratio'));
    }

    public function digest(Problem $problem)
    {
        $this->authorize('digest');
        return ['digest' => $problem->digest()];
    }
}

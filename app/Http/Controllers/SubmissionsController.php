<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Problem;
use App\Models\Submission;
use Auth;

class SubmissionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function create(Request $request)
    {
        return view('submissions.create', ['problem_id' => $request->problem_id]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $submission = new Submission();
        $submission->source = $request->source;
        $submission->problem_id = $request->problem_id;
        $user->submissions()->save($submission);
    }

    public function index()
    {
        $submissions = Submission::orderBy('created_at', 'desc')->paginate(25);
        return view('submissions.index', compact('submissions'));
    }

    public function attach()
    {
        $this->authorize('judge');
        $submission = Submission::where('attached', false)->first();
        if ($submission)
        {
            $submission->attached = true;
            $submission->status = 'Judging';
            $submission->save();
            return ['success' => true, 'submission' => $submission];
        }
        else
        {
            return ['success' => false];
        }
    }

    public function edit(Submission $submission)
    {
        $this->authorize('judge');
        return view('submissions.edit', compact('submission'));
    }

    public function update(Submission $submission, Request $request)
    {
        $this->authorize('judge');
        $submission->status = $request->status;
        $submission->score = $request->score;
        if ($request->time)
        {
            $submission->time = $request->time;
        }
        if ($request->memory)
        {
            $submission->memory = $request->memory;
        }
        $submission->save();
    }
}

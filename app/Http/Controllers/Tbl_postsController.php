<?php

namespace App\Http\Controllers;

use App\Models\Tbl_post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tbl_postRequest;

class Tbl_postsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$tbl_posts = Tbl_post::paginate();
		return view('tbl_posts.index', compact('tbl_posts'));
	}

    public function show(Tbl_post $tbl_post)
    {
        return view('tbl_posts.show', compact('tbl_post'));
    }

	public function create(Tbl_post $tbl_post)
	{
		return view('tbl_posts.create_and_edit', compact('tbl_post'));
	}

	public function store(Tbl_postRequest $request)
	{
		$tbl_post = Tbl_post::create($request->all());
		return redirect()->route('tbl_posts.show', $tbl_post->id)->with('message', 'Created successfully.');
	}

	public function edit(Tbl_post $tbl_post)
	{
        $this->authorize('update', $tbl_post);
		return view('tbl_posts.create_and_edit', compact('tbl_post'));
	}

	public function update(Tbl_postRequest $request, Tbl_post $tbl_post)
	{
		$this->authorize('update', $tbl_post);
		$tbl_post->update($request->all());

		return redirect()->route('tbl_posts.show', $tbl_post->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Tbl_post $tbl_post)
	{
		$this->authorize('destroy', $tbl_post);
		$tbl_post->delete();

		return redirect()->route('tbl_posts.index')->with('message', 'Deleted successfully.');
	}
}
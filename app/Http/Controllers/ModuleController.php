<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }

    public function index()
    {
        $modules = Module::latest()->with(['user'])->paginate(20);

        return view('modules.index', [
            'modules' => $modules
        ]);
    }

    public function show(Module $module)
    {
        return view('modules.show', [
            'module' => $module
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'body' => 'required'
        ]);

        $request->user()->modules()->create($request->only('title', 'category', 'body'));

        return back();
    }

    public function destroy(Module $module)
    {
        $this->authorize('delete', $module);

        $module->delete();

        return back();
    }
}

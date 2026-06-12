<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\SrnRequest;
use App\Models\Srn;
use Illuminate\Http\Request;


class SrnController extends Controller
{
    /** Display a listing of the SRNs */
    public function index(Request $request)
    {
        $query = Srn::query();


        if ($search = $request->input('search')) {
            $query->where('srn_number', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        }


        $srns = $query->orderBy('created_at', 'desc')->paginate(10);


        return view('admin.srns.index', compact('srns'));
    }


    /** Show the form for creating a new SRN */
    public function create()
    {
        return view('admin.srns.create');
    }


    /** Store a newly created SRN */
    public function store(SrnRequest $request)
    {
        $srn = Srn::create($request->validated());


        return redirect()->route('admin.srns.index')
            ->with('success', 'SRN created successfully.');
    }


    /** Display the specified SRN */
    public function show(Srn $srn)
    {
        return view('admin.srns.show', compact('srn'));
    }


    /** Show the form for editing the specified SRN */
    public function edit(Srn $srn)
    {
        return view('admin.srns.edit', compact('srn'));
    }


    /** Update the specified SRN */
    public function update(SrnRequest $request, Srn $srn)
    {
        $srn->update($request->validated());


        return redirect()->route('admin.srns.index')
            ->with('success', 'SRN updated successfully.');
    }


    /** Remove the specified SRN */
    public function destroy(Srn $srn)
    {
        $srn->delete();


        return redirect()->route('admin.srns.index')
            ->with('success', 'SRN deleted successfully.');
    }
}

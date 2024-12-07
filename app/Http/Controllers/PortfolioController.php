<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $portfolios = Portfolio::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%");
        })->paginate(6);

        return view('portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('portfolios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        Portfolio::create($data);
        return redirect()->route('portfolios.index');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            if ($portfolio->image && file_exists(storage_path('app/public/' . $portfolio->image))) {
                unlink(storage_path('app/public/' . $portfolio->image));
            }
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $portfolio->update($data);
        return redirect()->route('portfolios.index');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image && file_exists(storage_path('app/public/' . $portfolio->image))) {
            unlink(storage_path('app/public/' . $portfolio->image));
        }

        $portfolio->delete();
        return redirect()->route('portfolios.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function allData()
    {
        return view('portfolio', ['data' => Portfolio::all()]);
    }

    public function showPost($id)
    {
        $portfolio = new Portfolio();
        return view('portfolio-post', ['post' => $portfolio->find($id)]);
    }

    public function backPortfolio()
    {
        return redirect()->route('portfolio');
    }
}

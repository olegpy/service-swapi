<?php

namespace App\Http\Controllers;

use App\Http\Services\SwapService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /** @var SwapService */
    protected $swapService;

    /**
     * @param SwapService $swapService
     */
    public function __construct(SwapService $swapService)
    {
        $this->swapService = $swapService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        dd($this->swapService->connect());
        return view('home');
    }
}

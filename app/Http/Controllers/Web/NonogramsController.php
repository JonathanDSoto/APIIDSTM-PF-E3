<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\Category;
use App\Models\Difficulty;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NonogramsController extends Controller
{
    public function index() {
        return view('panel.nonogramas.index', [
            'categories' => Category::all(['id', 'slug', 'name']),
            'difficulties' => Difficulty::all(['id', 'slug', 'name']),
            'tags' => Tag::all(['id', 'name', 'color']),
        ]);
    }

    public function details(){
        return view('panel.nonogramas.details', [
            'categories' => Category::all(['id', 'slug', 'name']),
            'difficulties' => Difficulty::all(['id', 'slug', 'name']),
            'tags' => Tag::all(['id', 'name', 'color']),
        ]);
    }
}

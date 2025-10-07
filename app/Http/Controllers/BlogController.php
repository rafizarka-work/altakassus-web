<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Lang;

class BlogController extends Controller
{
    public function show($slug)
    {
        // Get current namespace (contracting or hvac)
        $ns = request()->route('ns') ?? 'contracting';

        // Get all blog articles
        $articles = Lang::get($ns . '.blogs.items');

        // Find the requested article by slug
        $article = collect($articles)->firstWhere('slug', $slug);

        // If article not found, try the other namespace
        if (!$article) {
            $alternateNs = $ns === 'contracting' ? 'hvac' : 'contracting';
            $articles = Lang::get($alternateNs . '.blogs.items');
            $article = collect($articles)->firstWhere('slug', $slug);
            $ns = $alternateNs;
        }

        // If still not found, abort with 404
        if (!$article) {
            abort(404, 'Article not found');
        }

        // Get other articles (exclude current one)
        $otherArticles = collect($articles)
            ->where('slug', '!=', $slug)
            ->take(3)
            ->toArray();

        return view('blog-detail', [
            'article' => $article,
            'otherArticles' => $otherArticles,
            'ns' => $ns
        ]);
    }
}

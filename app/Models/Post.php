<?php   

namespace App\Models;

use App\Models\Post;
use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return  [
            [
                'id' => '1',
                'slug' => 'derita-sudah-naik-seleher',
                'title' => 'Derita Sudah Naik Seleher',
                'author' => 'Aditya Rizki',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, deleniti exercitationem ducimus corrupti dolores eius error nobis autem magnam fuga illo amet ipsa laborum officia unde at veritatis saepe! Voluptatum.'
            ],
            [
                'id' => '2',
                'slug' => 'jogja-rindu-angkringan',
                'title' => 'Jogja, Rindu, dan Angkringan',
                'author' => 'Aditya Rizki',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis debitis delectus laudantium totam corporis? Praesentium eius nihil voluptates ab magnam quam dignissimos et quisquam dolore quasi? Fugiat rerum laboriosam laudantium!'
            ]
    
            ];
    }

    public static function find($slug):array
    {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //    return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if (!$post) {
            abort(404);
        }
        
        return $post;
    
    }
}

?>
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'image',
        'text',
    ];

    public function store($articleData)
    {
        return $this->create([
            'title' => $articleData['title'],
            'image' => $articleData['image'],
            'text' => $articleData['text'],
        ]);
    }
}

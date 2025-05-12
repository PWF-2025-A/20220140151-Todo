<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/Todo.php

class Todo extends Model
{
    use HasFactory; 

    // Sebelumnya:
    // protected $fillable = ['title', 'user_id', 'is_complete'];

    // Jadikan:
    protected $fillable = [
        'title',
        'user_id',
        'is_complete',
        'category_id',   // <<< ini ditambahkan
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $filable = ["title", "description"];

    public function toggle()
    {
        $this->completed = !$this->completed;
        $this->save();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'nav_logo',
        'role',
        'cv',
        'picture',
        'about_1',
        'about_2',
        'gmail',
        'github_link',
        'linkedIn_link'
    ];
//     navbar logo
// role "Junior Back-End devloper or somethings else"
// cv
// picture
// about mee 1
// about mee 2
// gmail
// github_link
// linkedIn_link
}

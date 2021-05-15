<?php

namespace App\ViewModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entry;

class EntryViewModel
{
    protected $links = [];

    public $routeName;
    public $urlSection;
    public $path;

    public function __construct()
    {

    }
}

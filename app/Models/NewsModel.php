<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news'; //memberi tahu model, bahwa default jadi news
    protected $allowedFields = ['title', 'slug', 'body'];
    public function getData($slug = false) //parameter slug, jika slug tidak di set, maka tipe nya false
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }


}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index() {
        $skills = [
            [
                'title' => 'javascript',
                'percentage' => 80
            ],
            [
                'title' => 'php',
                'percentage' => 60
            ],
            [
                'title' => 'html',
                'percentage' => 90
            ]
        ];

        $data = [
            'skills' => $skills
        ];

        return view('skills', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $landing = [
            'blocks' => [
                'block1' =>
                    [
                        'template' => 'templates.block1',
                        'elements' => [
                            'id1' => 'Block 1 Text 1',
                            'id2' => 'Block 1 Text 2'
                        ]
                    ],
                'block2' =>
                    [
                        'template' => 'templates.block2',
                        'elements' => [
                            'id3' => 'Block 2 Text 3',
                            'id4' => 'Block 2 Text 4'
                        ]
                    ]
            ]
        ];

        return view('templates.index',compact('landing'));
    }

    protected function store(Request $request)
    {
        dd($request->all());
    }
}

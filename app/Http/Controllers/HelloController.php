<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id='noname',$pass='unknown'){
        return <<<EOF
        <HTML>
        <HEAD>
        <title>Hello/Index</title>
        <style>
        body {font-size:16pt; color:#999;}
        h1 {font-size:100px;text-align:right; color:#eee;
        margin: -40px 0px -50px 0px; }
        </style>
        </head>
        <body>
            <h1>Index</h1>
            <p>これは、Helloコントローラーのindexアクションです。</p>
            <ul>
                <li>ID:{$id}</li>
                <li>PASS:{$pass}</li>
        </body>
        </html>
        EOF;

    }
}

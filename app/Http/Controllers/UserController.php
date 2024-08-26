<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function searchUser(Request $request) {
        $name = $request->query('name');
        $age = $request->query('age');
        $response = [
            'name' => $name,
            'age' => $age,
            'addresses' => [
                [
                    'no' => 1,
                    'city' => 'Tangerang Selatan',
                    'province' => 'Banten',
                    'country' => 'Indonesia'
                ],
                [
                    'no' => 2,
                    'city' => 'Bekasi',
                    'province' => 'Jawa Barat',
                    'country' => 'Indonesia'
                ]
            ]
        ];

        return response()->json($response);
    }

    public function findUser($id) {
        return "$id has logged in";
    }
}

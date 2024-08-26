<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GeminiAIController extends Controller {

    private $geminiService;

    public function handleChat(Request $request) {
        $input = $request->input('message');

        $url = env('GEMINI_API_BASE_URL') . env('GEMINI_API_KEY');

        $payload = [
            'contents' => [
                [
                    'role' => 'user',
                    'parts' => [
                        [
                            'text' => $input
                        ]
                    ]
                ]
            ]
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post($url, $payload);

        $responseMessage = $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? 'No Response.';

        return redirect()->back()->with('response', $responseMessage);
    }

}
?>
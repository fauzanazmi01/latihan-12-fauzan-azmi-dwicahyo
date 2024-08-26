<?php

namespace App\Http\Controllers;

use App\Models\HistoryChat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GeminiAIController extends Controller {

    private $geminiService;

    public function store(Request $request) {
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

        $chatInstance = HistoryChat::create([
            'send_chat' => $input,
            'get_chat' => $responseMessage
        ]);

        return redirect()->back()->with('response', $responseMessage);
    }

    public function index() {
        $history_items = HistoryChat::all(['id', 'get_chat', 'send_chat']);

        return view('gemini.index', [
            'items' => $history_items
        ]);
    }
}
?>
@extends('layouts.app')

@section('content')
<div class="container bg-body p-4 rounded">
    <div class="justify-content-center d-flex align-items-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Message</th>
                    <th scope="col">Reply</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <th scope="col">{{ $item->id }}</th>
                    <td>{{ $item->send_chat }}</td>
                    <td>{!! Str::markdown($item->get_chat) !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="container bg-body p-4 rounded mt-3">
    <div class="justify-content-center">
        <form action="{{ route('history_chat.store')}}" method="POST">
            <div class="d-flex">
                @csrf
                <input class="form-control me-2" name="message" type="text" placeholder="Ask me anything...">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>

        @if (session()->has('response'))
            <h2 class="mt-4">Gemini says...</h2>
            <div class="mt-2 rounded-5 p-4 bg-info-subtle">
                {!! Str::markdown(session('response')) !!}
            </div>
        @endif
    </div>
</div>
@endsection

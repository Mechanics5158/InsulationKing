@extends('layouts.app')

@section('title', 'Inquiries — Insulation King Admin')

@section('content')
<section class="page-hero">
    <div class="wrap" style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
        <h1>Inquiries</h1>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="btn">Log out</button>
        </form>
    </div>
</section>

<section>
    <div class="wrap">
        @if ($messages->isEmpty())
            <p>No inquiries yet.</p>
        @else
            <div style="overflow-x:auto;">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Service</th>
                            <th>Message</th>
                            <th>Received</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <td>{{ $message->id }}</td>
                                <td>{{ $message->name }}</td>
                                <td>
                                    <a href="mailto:{{ $message->email }}">{{ $message->email }}</a>
                                    @if ($message->phone)
                                        <br><a href="tel:{{ $message->phone }}">{{ $message->phone }}</a>
                                    @endif
                                </td>
                                <td>{{ $message->service ?? '—' }}</td>
                                <td class="admin-table__message">{{ \Illuminate\Support\Str::limit($message->message, 80) }}</td>
                                <td>{{ $message->created_at->format('M j, Y g:i A') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div style="margin-top:20px;">
                {{ $messages->links() }}
            </div>
        @endif
    </div>
</section>
@endsection
<h2>New inquiry from {{ $contactMessage->name }}</h2>

<p><strong>Email:</strong> {{ $contactMessage->email }}</p>
<p><strong>Phone:</strong> {{ $contactMessage->phone }}</p>
<p><strong>Service:</strong> {{ $contactMessage->service }}</p>
<p><strong>Message:</strong></p>
<p>{{ $contactMessage->message }}</p>
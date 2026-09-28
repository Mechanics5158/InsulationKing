<!doctype html>
<html>
<body style="font-family: Arial, sans-serif; color: #2b2b28; line-height: 1.6;">
    <h2 style="margin-bottom: 4px;">New inquiry — Insulation King</h2>
    <p style="color: #767670; margin-top: 0;">Received {{ $contactMessage->created_at->format('M j, Y g:i A') }}</p>

    <table cellpadding="6" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 500px;">
        <tr>
            <td style="font-weight: bold; border-bottom: 1px solid #eee;">Name</td>
            <td style="border-bottom: 1px solid #eee;">{{ $contactMessage->name }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold; border-bottom: 1px solid #eee;">Email</td>
            <td style="border-bottom: 1px solid #eee;">{{ $contactMessage->email }}</td>
        </tr>
        @if ($contactMessage->phone)
        <tr>
            <td style="font-weight: bold; border-bottom: 1px solid #eee;">Phone</td>
            <td style="border-bottom: 1px solid #eee;">{{ $contactMessage->phone }}</td>
        </tr>
        @endif
        @if ($contactMessage->service)
        <tr>
            <td style="font-weight: bold; border-bottom: 1px solid #eee;">Service</td>
            <td style="border-bottom: 1px solid #eee;">{{ $contactMessage->service }}</td>
        </tr>
        @endif
    </table>

    <p style="font-weight: bold; margin-bottom: 4px;">Message</p>
    <p style="white-space: pre-line;">{{ $contactMessage->message }}</p>

    <p style="margin-top: 24px;">
        <a href="{{ route('admin.messages') }}">View all inquiries</a>
    </p>
</body>
</html>
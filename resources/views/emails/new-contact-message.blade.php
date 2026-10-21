<!doctype html>
<html>
<body style="font-family: Arial, sans-serif; color: #2b2b28; line-height: 1.6;">
    <h2 style="margin-bottom: 4px;">New inquiry from {{ $contactMessage->name }}</h2>
    <p style="color: #767670; margin-top: 0;">Received {{ $contactMessage->created_at->format('M j, Y g:i A') }}</p>

    @php
        $serviceLabels = [
            'roof-insulation'     => 'Roof coating & sealing',
            'exterior-insulation' => 'Exterior wall protection',
            'waterproofing'       => 'Waterproofing / leak repair',
            'nano-coating'        => 'Nano-tech heat-reflective coating',
            'not-sure'            => 'Not sure, needs advice',
        ];
        $buildingLabels = [
            'house'      => 'House / residence',
            'commercial' => 'Commercial building',
            'warehouse'  => 'Warehouse / industrial',
            'other'      => 'Other',
        ];
        $photoCount = count($contactMessage->photos ?? []);
    @endphp

    <table cellpadding="6" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 500px;">
        <tr><td style="font-weight:bold; border-bottom:1px solid #eee;">Name</td><td style="border-bottom:1px solid #eee;">{{ $contactMessage->name }}</td></tr>
        <tr><td style="font-weight:bold; border-bottom:1px solid #eee;">Email</td><td style="border-bottom:1px solid #eee;">{{ $contactMessage->email }}</td></tr>
        @if ($contactMessage->phone)
        <tr><td style="font-weight:bold; border-bottom:1px solid #eee;">Phone</td><td style="border-bottom:1px solid #eee;">{{ $contactMessage->phone }}</td></tr>
        @endif
        @if ($contactMessage->service)
        <tr><td style="font-weight:bold; border-bottom:1px solid #eee;">Service</td><td style="border-bottom:1px solid #eee;">{{ $serviceLabels[$contactMessage->service] ?? $contactMessage->service }}</td></tr>
        @endif
        @if ($contactMessage->building_type)
        <tr><td style="font-weight:bold; border-bottom:1px solid #eee;">Building type</td><td style="border-bottom:1px solid #eee;">{{ $buildingLabels[$contactMessage->building_type] ?? $contactMessage->building_type }}</td></tr>
        @endif
        @if ($contactMessage->location)
        <tr><td style="font-weight:bold; border-bottom:1px solid #eee;">Location</td><td style="border-bottom:1px solid #eee;">{{ $contactMessage->location }}</td></tr>
        @endif
        <tr><td style="font-weight:bold; border-bottom:1px solid #eee;">Photos</td><td style="border-bottom:1px solid #eee;">{{ $photoCount > 0 ? $photoCount.' attached to this email' : 'None sent' }}</td></tr>
    </table>

    <p style="font-weight: bold; margin-bottom: 4px;">Message</p>
    <p style="white-space: pre-line;">{{ $contactMessage->message }}</p>

    <p style="margin-top: 24px;"><a href="{{ route('admin.messages') }}">View all inquiries</a></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New Joya Atelier Booking Request</title>
</head>
<body style="font-family: Arial, sans-serif; color: #2D2420; line-height: 1.5;">
    <h1 style="font-size: 22px;">New Joya Atelier Booking Request</h1>
    <p>A customer submitted a booking request from the website.</p>

    <table cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%;">
        @foreach ($fields as $label => $value)
            <tr>
                <th align="left" style="border: 1px solid #ddd; background: #FAF4EE; width: 220px;">
                    {{ \Illuminate\Support\Str::of($label)->replace('_', ' ')->title() }}
                </th>
                <td style="border: 1px solid #ddd;">
                    {{ $value }}
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>

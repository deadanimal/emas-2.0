<p>From MPB - Approver</p><br>

<p>Hello, {{ $data['name'] }}</p>
@if ($miles['lulus'] == 1)
    <p>Your result is Approved.</p>
@else
    <p>Your result is Rejected. Please try again.</p>
@endif

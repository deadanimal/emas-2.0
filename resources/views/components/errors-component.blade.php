@if ($errors != null)
    <div class="alert alert-danger">
        <strong>Maaf!</strong> input anda gagal disimpan.<br><br>
        <ul>
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@extends('base')
@section('content')
    <?php
    use App\Models\Rolesandpermission;
    ?>

    <div class="container">
        <div class="mb-4 text-center">
            <H2>EXECUTIVE DASHBOARD</H2>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background-color:#047FC3;">
                        <b class="text-white">{{ $roles->name }}</b>
                    </div>
                    <div class="card-body">
                        <form action="/userRole/{{ $roles->id }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0 table-flush" id="datatable-basic">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No.</th>
                                                    <th class="px-2">Pengguna</th>
                                                    <th class="px-2">Kebenaran</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($permissions as $key => $permission)
                                                    <tr>
                                                        <td class="text-center">{{ $key + 1 }}.</td>
                                                        <td>{{ $permission->name }}</td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input id='switch{{ $permission->id }}'
                                                                    class="form-check-input" type='checkbox' value='1'
                                                                    name='{{ $permission->name }}'
                                                                    onclick="active({{ $permission->id }})"
                                                                    <?php
                                                                    $try = Rolesandpermission::where('role_id', $roles->id)
                                                                        ->where('permission_id', $permission->id)
                                                                        ->first();
                                                                    echo $try == true ? ' checked' : '';
                                                                    ?>>
                                                                <label class="form-check-label"
                                                                    for="switch{{ $permission->id }}"
                                                                    id="label{{ $permission->id }}">
                                                                    @if ($try == true)
                                                                        Dibenarkan
                                                                    @else
                                                                        Tiada Kebenaran
                                                                    @endif
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <a href="/userRole" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../../assets/js/plugins/datatables.js"></script>
    <script>
        function active(key) {
            var a = document.getElementById('switch' + key);
            var b = document.getElementById('label' + key);

            if (a.checked) {
                b.innerHTML = "Dibenarkan";
            } else {
                b.innerHTML = "Tidak dibenarkan";
            }
        }
    </script>

@stop

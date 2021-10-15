<!DOCTYPE html>
<html lang="en">

<head>
    <title>Print Detail Data Pengguna Apps</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding in columns */
        .row {
            margin: 0 -5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            /* this adds the "card" effect */
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }

        /* Responsive columns - one column layout (vertical) on small screens */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="card">
        <h2>Aplikasi Kasir</h2>
        <hr style="width:75%">
        <div class="card-body">
            <h4>Print Detail Data Pengguna Apps</h4>
            <img class="img-profile rounded-circle mb-3"
                src="{{ asset('/img') }}/img_storage/profile/{{ $user->profile->profile_foto }}" width="300px"
                height="300px" alt="User profile picture">
            <h4 class="card-text"><b>Nama Profile</b> : {{ $user->profile->user->name }}</h4>
            <h4 class="card-text"><b>Role</b> : {{ $user->role }}</h4>
            <hr style="width:75%">
            <h5 class="card-text text-left"><b>Nama Panggilan</b> : {{ $user->username }}</h5>
            <h5 class="card-text text-left"><b>Email</b> : {{ $user->email }}</h5>
            <h5 class="card-text text-left"><b>Umur</b> : {{ $user->profile->umur }}</h5>
            <h5 class="card-text text-left"><b>Tempat dan Tanggal Lahir</b> : {{ $user->profile->tempat_lahir }},
                {{ $user->profile->tgl_lahir }}</h5>
            <h5 class="card-text text-left"><b>Jenis Kelamin</b> : {{ $user->profile->jenis_kelamin }}</h5>
            <h5 class="card-text text-left"><b>Bio</b> : {!! $user->profile->bio !!}</h5>
            <h5 class="card-text text-left"><b>Alamat</b> : {!! $user->profile->alamat !!}</h5>
            <h5 class="card-text text-left"><b>Nomor Telepon</b> : {{ $user->profile->no_telp }}</h5>
            <h5 class="card-text text-left"><b>Akun Dibuat</b> : {{ $user->created_at }}</h5>
            <h5 class="card-text text-left"><b>Akun Diupdate</b> : {{ $user->updated_at }}</h5>
        </div>
</body>
<script>
    window.print()
</script>

</html>
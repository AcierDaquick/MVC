@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>DAFTAR KARYAWAN</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('karya.create') }}"> Input Karyawan</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th width="300px"class="text-center">Nama Siswa</th>
            <th width="200px"class="text-center">Action</th>
        </tr>
        @foreach ($karya as $karyawan)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $karyawan->NamaKaryawan }}</td>
            <td class="text-center">
                <form action="{{ route('karya.destroy',$karyawan->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('karya.show',$karyawan->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('karya.edit',$karyawan->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="float-left">
    <br>
    <a class="btn btn-success" href="{{ route('sisw.index') }}"> Daftar  Siswa </a>
    </div>
    <br>
    <div class="float-right">
    <a class="btn btn-success" href="{{ route('gur.index') }}"> Daftar  Guru </a>
    </div>
    {!! $karya->links() !!}

@endsection
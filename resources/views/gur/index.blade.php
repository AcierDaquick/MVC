@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>DAFTAR GURU</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('gur.create') }}"> Input Guru</a>
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
            <th width="320px"class="text-center">Nama Guru</th>
            <th width="100px"class="text-center">ACTION</th>

        </tr>
        @foreach ($gur as $guru)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $guru->NamaGuru }}</td>
            <td class="text-center">
                <form action="{{ route('gur.destroy',$guru->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('gur.show',$guru->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('gur.edit',$guru->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <center><a class="btn btn-success" href="{{ route('sisw.index') }}"> Daftar  Siswa </a></center>
    {!! $gur->links() !!}

@endsection
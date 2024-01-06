@extends('layouts.template')

@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if (Session::get('deleted'))
        <div class="alert alert-warning"> {{ Session::get('deleted') }}</div>
    @endif

    <div class="container mt-3">
        <div class="card"
            style="
    margin-top: 70px; 
    padding: 20px;
    box-shadow: 2px 4px 2px 1px rgba(0, 0, 0, 0.1);
    ">

            <div class="d-flex">
                <div class="p-2">
                    <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        href="{{ route('rombel.create') }}">Tambah</a>
                </div>
            </div>

            <table class="table m-1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Rombel</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($rombel as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item['rombel'] }}</td>
                            <td class="d-flex justify-content-center">

                                <a href="{{ route('rombel.edit', $item['id']) }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                         focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>

                                <form action="{{ route('rombel.delete', $item['id']) }}" method="POST"
                                    onsubmit="return confirm('Apakah anda yakin ingin menghapus Data?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection

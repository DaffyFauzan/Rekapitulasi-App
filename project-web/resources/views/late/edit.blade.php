@extends('layouts.template')

@section('content')
    <form action="{{ route('late.update', $late['id']) }}" method="POST" class="card p-5" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        @if ($errors->any())
            <ul class="alert alert-danger p-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="mb-3 row">
            <label for="student_id" class="col-sm-2 col-form-label">Siswa :</label>
            <div class="col-sm-10">
                <select class="form-select" id="student_id" name="student_id" required>
                    <option selected disabled hidden>Pilih Siswa</option>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}" {{ $student->id == $late->student_id ? 'selected' : '' }}>
                            {{ $student->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="date_time_late" class="col-sm-2 col-form-label">Tanggal Keterlambatan :</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" id="date_time_late" name="date_time_late" required
                    value="{{ $late->date_time_late }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="information" class="col-sm-2 col-form-label">Keterangan Keterlambatan :</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="information" name="information" rows="3" required>{{ $late->information }}</textarea>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="bukti" class="col-sm-2 col-form-label">Bukti Keterlambatan :</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="bukti" name="bukti">
            </div>
        </div>


        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Current Bukti Keterlambatan :</label>
            <div class="col-sm-10">
                <img src="{{ Storage::url('public/bukti_keterlambatan/' . $late->bukti) }}" alt="Current Image"
                    class="img-fluid" style="width: 300px">
            </div>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
    </form>
@endsection

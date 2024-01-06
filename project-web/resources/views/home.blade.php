@extends('layouts.template')

@section('content')
    <div class="jumbotron py-4 px-5">
        @if (session('AlreadyAccessed'))
            <div class="alert alert-danger">{{ session('AlreadyAccessed') }}</div>
        @endif

        <div class="flex flex-wrap justify-around">
          <article class="rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8 my-3">
              <div class="flex items-start sm:gap-8">
                  <div class="hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500"
                      aria-hidden="true">
                      <div class="flex items-center gap-1" style="font-size: 40px">
                          📚
                      </div>
                  </div>

                  <div>
                      <h3 class="mt-4 text-lg font-medium sm:text-xl">
                          <label> {{ App\Models\Rombels::count() }} Rombels</label>
                      </h3>
                  </div>
              </div>
          </article>

        <article class="rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8 my-3">
            <div class="flex items-start sm:gap-8">
              <div
                class="hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500"
                aria-hidden="true"
              >
                <div class="flex items-center gap-1" style="font-size: 40px">
                  🏫
                </div>
              </div>
          
              <div>
                <h3 class="mt-4 text-lg font-medium sm:text-xl">
                  <label>{{ App\Models\Rayons::count() }} Rayons</label>
                </h3>
            </div>
          </article>
        </div>

        <article class="rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8 my-3">
            <div class="flex items-start sm:gap-8">
              <div
                class="hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500"
                aria-hidden="true"
              >
                <div class="flex items-center gap-1" style="font-size: 40px">
                  😊
                </div>
              </div>
          
              <div>
                <h3 class="mt-4 text-lg font-medium sm:text-xl">
                  <label>{{ App\Models\Students::count() }} Data Siswa</label>
                </h3>
            </div>
          </article>

        <article class="rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8 my-3">
            <div class="flex items-start sm:gap-8">
              <div
                class="hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500"
                aria-hidden="true"
              >
                <div class="flex items-center gap-1" style="font-size: 40px">
                  🤖
                </div>
              </div>
          
              <div>
                <h3 class="mt-4 text-lg font-medium sm:text-xl">
                  <label>{{ App\Models\User::where('role','admin')->count() }} Admin</label>
                </h3>
            </div>
          </article>

        <article class="rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8 my-3">
            <div class="flex items-start sm:gap-8">
              <div
                class="hidden sm:grid sm:h-20 sm:w-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500"
                aria-hidden="true"
              >
                <div class="flex items-center gap-1" style="font-size: 40px">
                  🤖
                </div>
              </div>
          
              <div>
                <h3 class="mt-4 text-lg font-medium sm:text-xl">
                  <label>{{ App\Models\User::where('role','ps')->count() }} Pembimbing Siswa</label>
                </h3>
            </div>
          </article>

@endsection

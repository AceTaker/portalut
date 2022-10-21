@extends('layouts.layout')

@section('content')    
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            </div>
        </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Tahun Akademik</h4>
                  <div class="ml-auto">
               <a type="submit" href="{{ route('ta.create') }}"  class="btn btn-primary"v>Tambah</a>
                   </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Tahun Akademik
                        </th>
                        <th>
                          Semester
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      @forelse ($items as $item)
                        <tr>
                          <td>
                          {{ $item->id }}
                          </td>
                          <td>
                          {{ $item->tahun_akademik }}
                          </td>
                          <td>
                          {{ $item->semester }}
                          </td>
                          <td>
                          @if ($item->status == 0)
                              <div class="badge badge-pill badge-danger mb-1">Tidak Aktif</div>
                          @else
                              <div class="badge badge-pill badge-success mb-1">Aktif</div>
                          @endif
                          </td>
                          <td>
                          @if ($item->status == 0)
                            <form action="/activeTa/{{ $item->id }}" 
                                    method="post" 
                                    class="d-inline">
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            @csrf
                                <button class="btn btn-success btn-sm">
                                Aktifkan
                                </button>
                            </form>
                          @else
                              
                          @endif
                            <a href="{{ route('ta.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('ta.destroy', $item->id) }}" 
                                    method="post" 
                                    class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                                </button>
                            </form>
                          </td>
                        </tr>
                        @empty
                        <tr>
                          <td>
                            data tidak tersedia
                          </td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
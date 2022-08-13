@extends('layouts.v_template')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex  justify-content-between">
                    <h4>Data Kuliner</h4>
                    <div class="table-tools d-flex justify-content-around ">
                        <input type="text" class="form-control card-form-header mr-3"
                            placeholder="Cari Data Pengguna ..." id="cari-data-pengguna">
                        <select class="custom-select form-control mr-3" id="filter-data-pengguna">
                            <option value="" selected>Filter</option>
                            <option value=""></option>
                        </select>
                        <button type="button" class="btn bg-main text-white float-right" data-toggle="modal" id="addUserBtn"
                            data-target="#modalkuliner"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped table-hover table-user table-action-hover" id="table-data">
                        <thead>
                            <tr>
                                <th width="5%" class="sorting" data-sorting_type="asc" data-column_name="id"
                                    style="cursor: pointer">ID <span id="id_icon"></span></th>
                                <td>Nama rumah makan</td>
                                <td>alamat</td>
                                <td>Deskripsi</td>
                                <td>Detail</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kuliner as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama_kuliner }}</td>
                                {{-- <td>RP. {{ number_format($row->harga ) }}</td> --}}
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->deskripsi_kuliner }}</td>
                                <td>
                                    <button class="btn bg-main text-white">Detail</button>
                                </td>
                                <td class="option">
                                    <div class="btn-group dropleft btn-option">
                                        <i type="button" class="dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </i>
                                        <div class="dropdown-menu">
                                            <a data-kuliner='@json($row)' class="dropdown-item edit" href="#"><i
                                                    class="fas fa-pen"> Edit</i></a>
                                            <a data-id_kuliner="{{ $row->id_kuliner }}"
                                                class="dropdown-item hapus" href="#"><i class="fas fa-trash">
                                                    Hapus</i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
{{-- MODAL TAMBAH kuliner --}}
<div class="modal fade" id="modalkuliner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Tambah kuliner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" id="main-body">

                <form id="formPengguna" action="{{ URL::to('/admin/tambah_kuliner') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_kuliner">nama rumah makan</label>
                        <input type="hidden" class="form-control" name="id" id="id">
                        <input type="text" class="form-control" name="nama_kuliner" required id="nama_kuliner">
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="text" class="form-control" name="alamat" required id="alamat">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_kuliner">deskripsi kuliner</label>
                        <textarea required class="form-control" name="deskripsi_kuliner"
                            id="deskripsi_kuliner"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar_kuliner">gambar_kuliner</label>
                        <input required type="file" class="form-control" name="gambar_kuliner">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn bg-main text-white" id="modalBtn">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {




        // TOMBOL HAPUS USER
        $('.table-user tbody').on('click', 'tr td a.hapus', function() {
            let idkuliner = $(this).data('id_kuliner');
            Swal.fire({
                title: 'Apakah yakin?'
                , text: "Data tidak bisa kembali lagi!"
                , type: 'warning'
                , showCancelButton: true
                , confirmButtonColor: '#3085d6'
                , cancelButtonColor: '#d33'
                , confirmButtonText: 'Ya, Konfirmasi'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        , url: '/admin/hapus_kuliner'
                        , method: 'post'
                        , dataType: 'json'
                        , data: {
                            id_kuliner: idkuliner
                        }
                        , success: function(data) {
                            if (data == 1) {
                                Swal.fire('Berhasil', 'Data telah terhapus', 'success').then((result) => {
                                    location.reload();
                                });
                            }
                        }
                    })
                }
            })
        });





    });

    $('#liKuliner').addClass('active');


</script>
@endsection

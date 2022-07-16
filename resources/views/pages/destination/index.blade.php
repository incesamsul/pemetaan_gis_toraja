@extends('layouts.v_template')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex  justify-content-between">
                    <h4>Data Destinasi</h4>
                    <div class="table-tools d-flex justify-content-around ">
                        <input type="text" class="form-control card-form-header mr-3"
                            placeholder="Cari Data Pengguna ..." id="cari-data-pengguna">
                        <select class="custom-select form-control mr-3" id="filter-data-pengguna">
                            <option value="" selected>Filter</option>
                            <option value=""></option>
                        </select>
                        <button type="button" class="btn btn-dark float-right" data-toggle="modal" id="addUserBtn"
                            data-target="#modalDestinasi"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped table-hover table-user table-action-hover" id="table-data">
                        <thead>
                            <tr>
                                <th width="5%" class="sorting" data-sorting_type="asc" data-column_name="id"
                                    style="cursor: pointer">ID <span id="id_icon"></span></th>
                                <td>Nama destinasi</td>
                                <td>Harga tiket</td>
                                <td>Deskripsi</td>
                                <td>Detail</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($destination as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama_destination }}</td>
                                <td>RP. {{ number_format($row->harga_tiket ) }}</td>
                                <td>{{ $row->deskripsi_destination }}</td>
                                <td>
                                    <button class="btn btn-dark">Detail</button>
                                </td>
                                <td class="option">
                                    <div class="btn-group dropleft btn-option">
                                        <i type="button" class="dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </i>
                                        <div class="dropdown-menu">
                                            <a data-destinasi='@json($row)' class="dropdown-item edit" href="#"><i
                                                    class="fas fa-pen"> Edit</i></a>
                                            <a data-id_destination="{{ $row->id_destination }}"
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
{{-- MODAL TAMBAH DESTINASI --}}
<div class="modal fade" id="modalDestinasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Tambah Destinasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" id="main-body">

                <form id="formPengguna" action="{{ URL::to('/admin/tambah_destination') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_destination">nama destinasi</label>
                        <input type="hidden" class="form-control" name="id" id="id">
                        <input type="text" class="form-control" name="nama_destination" required id="nama_destination">
                    </div>
                    <div class="form-group">
                        <label for="harga_tiket">harga tiket</label>
                        <input type="text" class="form-control" name="harga_tiket" required id="harga_tiket">
                    </div>
                    <div class="form-group">
                        <label for="link_pemetaan">link pemetaan</label>
                        <input type="text" class="form-control" name="link_pemetaan" required id="link_pemetaan">
                    </div>
                    <div class="form-group">
                        <label for="ket_pemetaan">ket pemetaan</label>
                        <input type="text" class="form-control" name="ket_pemetaan" required id="ket_pemetaan">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_destination">deskripsi destinasi</label>
                        <textarea required class="form-control" name="deskripsi_destination"
                            id="deskripsi_destination"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar_destination">gambar_destination</label>
                        <input required type="file" class="form-control" name="gambar_destination">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-dark" id="modalBtn">Tambah</button>
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
            let idDestination = $(this).data('id_destination');
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
                        , url: '/admin/hapus_destination'
                        , method: 'post'
                        , dataType: 'json'
                        , data: {
                            id_destination: idDestination
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

    $('#liPengguna').addClass('active');
    $('#liManajemenPengguna').addClass('active');

</script>
@endsection
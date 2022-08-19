@extends('layouts.v_template')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex  justify-content-between">
                    <h4>Data Penginapan</h4>
                    <div class="table-tools d-flex justify-content-around ">
                        <input type="text" class="form-control card-form-header mr-3"
                            placeholder="Cari Data Pengguna ..." id="cari-data-pengguna">
                        <select class="custom-select form-control mr-3" id="filter-data-pengguna">
                            <option value="" selected>Filter</option>
                            <option value=""></option>
                        </select>
                        <button type="button" class="btn bg-main text-white float-right" data-toggle="modal" id="btn-tambah"
                            data-target="#modalpenginapan"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped table-hover table-user table-action-hover" id="table-data">
                        <thead>
                            <tr>
                                <th width="5%" class="sorting" data-sorting_type="asc" data-column_name="id"
                                    style="cursor: pointer">ID <span id="id_icon"></span></th>
                                <td>Nama penginapan</td>
                                <td>Harga tiket</td>
                                <td>Deskripsi</td>
                                {{-- <td>Detail</td> --}}
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penginapan as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama_penginapan }}</td>
                                <td>RP. {{ number_format($row->harga_tiket ) }}</td>
                                <td>{{ $row->deskripsi_penginapan }}</td>
                                {{-- <td>
                                    <button class="btn bg-main text-white">Detail</button>
                                </td> --}}
                                <td class="option">
                                    <div class="btn-group dropleft btn-option">
                                        <i type="button" class="dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </i>
                                        <div class="dropdown-menu">
                                            <a data-toggle="modal" data-target="#modalpenginapan" data-edit='@json($row)' class="dropdown-item edit" href="#"><i
                                                    class="fas fa-pen"> Edit</i></a>
                                            <a data-id_penginapan="{{ $row->id_penginapan }}"
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
{{-- MODAL TAMBAH penginapan --}}
<div class="modal fade" id="modalpenginapan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Tambah penginapan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" id="main-body">

                <form id="formPenginapan" action="{{ URL::to('/admin/tambah_penginapan') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_penginapan">nama penginapan</label>
                        <input type="hidden" class="form-control" name="id" id="id">
                        <input type="text" class="form-control" name="nama_penginapan" required id="nama_penginapan">
                    </div>
                    <div class="form-group">
                        <label for="harga_tiket">harga tiket</label>
                        <input type="text" class="form-control" name="harga_tiket" required id="harga_tiket">
                    </div>
                    <div class="form-group">
                        <label for="link_pemetaan">link peta</label>
                        <input type="text" class="form-control" name="link_pemetaan" required id="link_pemetaan">
                    </div>
                    <div class="form-group" hidden>
                        <label for="ket_pemetaan">ket pemetaan</label>
                        <input type="text" class="form-control" name="ket_pemetaan" required id="ket_pemetaan" value="none">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_penginapan">deskripsi penginapan</label>
                        <textarea required class="form-control" name="deskripsi_penginapan"
                            id="deskripsi_penginapan"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar_penginapan">gambar_penginapan</label>
                        <input required type="file" class="form-control" name="gambar_penginapan" id="gambar_penginapan">
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



        $('#btn-tambah').on('click',function(){
            $('#formPenginapan').attr('action','/admin/tambah_penginapan');
            $('#gambar_penginapan').prop('required',true);
        })

        $('.table-user tbody').on('click', 'tr td a.edit', function(){
            let dataEdit = $(this).data('edit');
            console.log(dataEdit);
            $('#id').val(dataEdit.id_penginapan);
            $('#nama_penginapan').val(dataEdit.nama_penginapan);
            $('#harga_tiket').val(dataEdit.harga_tiket);
            $('#link_pemetaan').val(dataEdit.link_pemetaan);
            $('#deskripsi_penginapan').val(dataEdit.deskripsi_penginapan);
            $('#gambar_penginapan').prop('required',false);
            $('#formPenginapan').attr('action','/admin/ubah_penginapan');
        });


        // TOMBOL HAPUS USER
        $('.table-user tbody').on('click', 'tr td a.hapus', function() {
            let idpenginapan = $(this).data('id_penginapan');
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
                        , url: '/admin/hapus_penginapan'
                        , method: 'post'
                        , dataType: 'json'
                        , data: {
                            id_penginapan: idpenginapan
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

    $('#liPenginapan').addClass('active');


</script>
@endsection

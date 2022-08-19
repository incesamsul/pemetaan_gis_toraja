@extends('layouts.v_template')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex  justify-content-between">
                    <h4>Data Berita</h4>
                    <div class="table-tools d-flex justify-content-around ">
                        <input type="text" class="form-control card-form-header mr-3"
                            placeholder="Cari Data Pengguna ..." id="cari-data-pengguna">
                        <select class="custom-select form-control mr-3" id="filter-data-pengguna">
                            <option value="" selected>Filter</option>
                            <option value=""></option>
                        </select>
                        <button type="button" class="btn bg-main text-white float-right" data-toggle="modal" id="btn-tambah"
                            data-target="#modalberita"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped table-hover table-user table-action-hover" id="table-data">
                        <thead>
                            <tr>
                                <th width="5%" class="sorting" data-sorting_type="asc" data-column_name="id"
                                    style="cursor: pointer">ID <span id="id_icon"></span></th>
                                    <td>tgl berita</td>
                                <td>judul berita</td>
                                {{-- <td>Detail</td> --}}
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berita as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->tgl_berita }}</td>
                                <td>{{ $row->judul_berita }}</td>
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
                                            <a data-toggle="modal" data-target="#modalberita" data-edit='@json($row)' class="dropdown-item edit" href="#"><i
                                                    class="fas fa-pen"> Edit</i></a>
                                            <a data-id_berita="{{ $row->id_berita }}"
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
{{-- MODAL TAMBAH berita --}}
<div class="modal fade" id="modalberita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Tambah berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" id="main-body">

                <form id="formBerita" action="{{ URL::to('/admin/tambah_berita') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul_berita">Judul berita</label>
                        <input type="hidden" class="form-control" name="id" id="id">
                        <input type="text" class="form-control" name="judul_berita" required id="judul_berita">
                    </div>
                    <div class="form-group">
                        <label for="tgl_berita">Tanggal berita</label>
                        <input type="date" class="form-control" name="tgl_berita" required id="tgl_berita">
                    </div>
                    <div class="form-group">
                        <label for="gambar_berita">Gambar berita</label>
                        <input type="file" class="form-control" name="gambar_berita" required id="gambar_berita">
                    </div>
                    <div class="form-group">
                        <label for="isi_berita">isi berita</label>
                        <textarea required class="form-control" name="isi_berita"
                            id="isi_berita"></textarea>
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
            $('#formBerita').attr('action','/admin/tambah_berita');
            $('#gambar_berita').prop('required',true);
        })

        $('.table-user tbody').on('click', 'tr td a.edit', function(){
            let dataEdit = $(this).data('edit');
            console.log(dataEdit);
            $('#id').val(dataEdit.id_berita);
            $('#judul_berita').val(dataEdit.judul_berita);
            $('#tgl_berita').val(dataEdit.tgl_berita);
            $('#isi_berita').val(dataEdit.isi_berita);
            $('#gambar_berita').prop('required',false);
            $('#formBerita').attr('action','/admin/ubah_berita');
        });



        // TOMBOL HAPUS USER
        $('.table-user tbody').on('click', 'tr td a.hapus', function() {
            let idberita = $(this).data('id_berita');
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
                        , url: '/admin/hapus_berita'
                        , method: 'post'
                        , dataType: 'json'
                        , data: {
                            id_berita: idberita
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

    $('#liBerita').addClass('active');

</script>
@endsection

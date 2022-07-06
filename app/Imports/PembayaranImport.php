<?php

namespace App\Imports;

use App\Models\PembayaranModel;
use App\Models\RegistrasiModel;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;
use Throwable;

class PembayaranImport implements ToModel, WithHeadingRow, SkipsOnError, WithValidation, SkipsOnFailure
{
    use Importable, SkipsErrors, SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if (isset($row['virtual'])) {
            $nim = substr($row['virtual'], 0, -2);
            $nim = substr($nim, 7);
            $kodePembayaran = substr($row['virtual'], 14);
            $idMahasiswa = DB::table('riwayat_pendidikan_mahasiswa')
                ->where('nim', $nim)
                ->select('id_mahasiswa')
                ->first()->id_mahasiswa;
            return new RegistrasiModel([
                'id_semester' => getIdSemesterAktif(),
                'id_mahasiswa' => $idMahasiswa,
                'bukti_pembayaran' => 'default.jpg',
                'tgl_registrasi' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal']),
                'jenis_registrasi' => $kodePembayaran,
                'status_registrasi' => '3',
                'konfirmasi_keuangan' => '1',
                'jumlah_pembayaran' => $row['amount'],
                'journal' => $row['journal']
            ]);
        } else {
            return;
        }
    }

    public function onError(Throwable $e)
    {
    }
    // public function onFailure(Failure ...$failures)
    // {
    // }
    public function rules(): array
    {
        return [];
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Campaign;
use App\Models\Donasi;
use App\Models\Florafauna;
use App\Models\InformasiFauna;
use App\Models\InformasiFlora;
use App\Models\Volunteer;
use Illuminate\Http\Request;


class adminController extends Controller
{
    public function informasifaunaform()
    {
        return view('admin.informasifaunaform');
    }

    public function informasifaunaedit($id)
    {
        $data = InformasiFauna::find($id);

        return view('admin.informasifaunaedit', ['data' => $data]);
    }

    public function deleteinfromasifauna($id)
    {
        $data = InformasiFauna::find($id);
        $data->delete();
        return redirect(route('informasi.index'));
    }

    public function deleteinformasiflora($id)
    {
        $data = InformasiFlora::find($id);
        $data->delete();
        return redirect(route('informasi.index'));
    }

    public function informasifaunaformpost(Request  $request)
    {
        $data = new InformasiFauna();
        $data->nama_fauna = $request->nama_fauna;
        $data->deskripsi = $request->deskripsi;
        $data->persen_populasi = $request->persen_populasi;
        $data->judul_informasi = $request->judul_informasi;

        //        upload file


        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'informasifaunaimage';
        $file->move($tujuan_upload, $nama_file);

        $data->gambar = $nama_file;

        $data->save();

        return redirect(route('informasi.index'));
    }

    public function informasifloraform()
    {
        return view('admin.informasifloraform');
    }

    public function informasifloraedit($id)
    {
        $data = InformasiFlora::find($id);
        return view('admin.informasifloraedit', ['data' => $data]);
    }

    public function informasifloraeditpost($id, Request $request)
    {
        $data = InformasiFlora::find($id);


        $data->nama_flora = $request->nama_flora;
        $data->deskripsi = $request->deskripsi;
        $data->judul_informasi = $request->judul_informasi;

        //        upload file

        if ($request->file != null) {
            $file = $request->file('file');

            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'informasifloraimage';
            $file->move($tujuan_upload, $nama_file);

            $data->gambar = $nama_file;
        }

        $data->update();

        return redirect(route('informasi.index'));
    }

    public function informasifaunaeditpost($id, Request $request)
    {
        $data = InformasiFauna::find($id);

        $data->nama_fauna = $request->nama_flora;
        $data->persen_populasi = $request->jumlah_persenan;
        $data->deskripsi = $request->deskripsi;
        $data->judul_informasi = $request->judul_informasi;

        //        upload file
        if ($request->file != null) {
            $file = $request->file('file');

            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'informasifloraimage';
            $file->move($tujuan_upload, $nama_file);

            $data->gambar = $nama_file;
        }

        $data->update();

        return redirect(route('informasi.index'));
    }

    public function informasifloraformpost(Request  $request)
    {
        $data = new InformasiFlora();
        $data->nama_flora = $request->nama_flora;
        $data->deskripsi = $request->deskripsi;
        $data->judul_informasi = $request->judul_informasi;

        //        upload file
        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'informasifloraimage';
        $file->move($tujuan_upload, $nama_file);

        $data->gambar = $nama_file;

        $data->save();

        return redirect(route('informasi.index'));
    }


    // verif donasi flora fauna
    public function verifikasiflora()
    {
        $data = Florafauna::orderBy('created_at', 'DESC')->get();

        return view('admin.verifflora', ['data' => $data]);
    }

    public function verifflorapost($id)
    {
        $data = Florafauna::find($id);
        $data->verifikasi_check = 1;
        $data->update();

        return redirect()->back();
    }

    public function tolakflora($id)
    {
        $data = Florafauna::find($id);
        $data->verifikasi_check = 1;
        $data->delete();

        return redirect()->back();
    }

    // verif donasi dana (emas)

}

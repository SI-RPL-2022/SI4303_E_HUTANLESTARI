<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Campaign;
use App\Models\Donasi;
use App\Models\Feedback;
use App\Models\Florafauna;
use App\Models\InformasiFauna;
use App\Models\InformasiFlora;
use App\Models\Volunteer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class adminController extends Controller
{

    public function dashboard()
    {
        $donasi = count(Campaign::all()->where('donation_check', 1)->where('volunteer_check', 0));
        $volunteer = count(Campaign::all()->where('donation_check', 0)->where('volunteer_check', 1));
        $keduanya = count(Campaign::all()->where('donation_check', 1)->where('volunteer_check', 1));

        $don1 = Campaign::all()->where('donation_check', 1)->where('volunteer_check', 0);
        $donasikelar = 0;
        foreach ($don1 as $d) {
            if ($d['target'] <  $d['donasi_terkini']) {
                $donasikelar += 1;
            }
        }

        $vol1 = Campaign::all()->where('donation_check', 0)->where('volunteer_check', 1);
        $volunteerkelar = 0;
        foreach ($vol1 as $d) {
            if ($d['target_volunteer'] <  $d['volunteer_terkini']) {
                $volunteerkelar += 1;
            }
        }

        $sem1 = Campaign::all()->where('donation_check', 1)->where('volunteer_check', 1);
        $semkelar = 0;

        foreach ($sem1 as $d) {
            if ($d['target_volunteer'] <  $d['volunteer_terkini'] && $d['target'] <  $d['donasi_terkini']) {
                $semkelar += 1;
            }
        }

        $record = Campaign::select(
            DB::raw("COUNT(*) as count"),
            DB::raw("DATE_FORMAT(created_at,'%M %Y') as months")
        )
            ->groupBy('months')
            ->get();

        $data = [];

        foreach ($record as $row) {
            $data['label'][] = $row->months;
            $data['data'][] = (int) $row->count;
        }

        $data['chart_data'] = json_encode($data);

        $recordDonasi = Donasi::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
            ->where('created_at', '>', Carbon::today()->subDay(6))
            ->groupBy('day_name', 'day')
            ->orderBy('day')
            ->get();

        $dataDonasi = [];

        foreach ($recordDonasi as $row) {
            $dataDonasi['label'][] = $row->day_name;
            $dataDonasi['data'][] = (int) $row->count;
        }

        $dataDonasi['chart_data'] = json_encode($dataDonasi);


        return view('admin.dashboard', [
            'donasi' => $donasi, 'volunteer' => $volunteer, 'keduanya' => $keduanya, 'donasikelar' => $donasikelar,
            'volunteerkelar' => $volunteerkelar, 'semuakelar' => $semkelar, 'data' => $data, 'dataDonasi' => $dataDonasi
        ]);
    }



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

    // Verifikasi Donasi Dana
    public function verifdana()
    {
        $data = Donasi::orderBy('created_at', 'DESC')->get();
        return view('admin.verifdonasi', ['data' => $data]);
    }


    public function verifdanapost($id)
    {
        $data = Donasi::find($id);
        $data->verifikasi_check = 1;
        $data->update();

        $ya = Campaign::find($data->campaign_id);
        $ya->donasi_terkini = $ya->donasi_terkini + $data->jumlah_donasi;
        $ya->update();

        return redirect()->back();
    }

    public function tolakdana($id)
    {
        $data = Donasi::find($id);
        $data->delete();

        return redirect()->back();
    }

    //Verifikasi Volunteer yang dibuat
    public function verifvolun()
    {
        $data = Volunteer::orderBy('created_at', 'DESC')->get();
        return view('admin.verifvolun', ['data' => $data]);
    }

    public function verifvolunpost($id)
    {

        $data = Volunteer::find($id);
        $data->verifikasi_check = 1;
        $data->update();

        $ya = Campaign::find($data->campaign_id);
        $ya->volunteer_terkini = $ya->volunteer_terkini + 1;
        $ya->update();

        return redirect()->back();
    }

    public function tolakvolun($id)
    {
        $data = Volunteer::find($id);
        $data->delete();
        return redirect()->back();
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

    public function feedback()
    {
        $data = Feedback::all();
        return view('admin.feedback', ['data' => $data]);
    }

    // verif blog
    public function blog()
    {
        $data = Blog::orderBy('created_at', 'DESC')->get();
        return view('admin.verifblog', ['data' => $data]);
    }

    public function blogverif($id)
    {
        $data = Blog::find($id);
        $data->verifikasi_check = 1;
        $data->update();

        return redirect()->back();
    }

    public function tolakblog($id)
    {
        $data = Blog::find($id);
        $data->verifikasi_check = 1;
        $data->delete();

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Article;
use Carbon\Carbon;
use App\Models\Ebook;
use App\Models\Employee;
use App\Models\Perumahan;
use App\Models\Rumah;
use App\Models\Penawaran;
use App\Models\Agent;
use App\Models\PerumahanImage;
use App\Models\Konsumen;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class LandingController extends Controller
{
    public function index()
    {
        $todayDate = Carbon::now()->format('Y-m-d');
        $monthDate = Carbon::now()->format('m');

        $totalVisits = Visit::count();
        $todayVisits = Visit::whereDate('visited_at', $todayDate)->count();
        $monthVisits = Visit::whereMonth('visited_at', $monthDate)->count();

        $kotas = Perumahan::select('kota')->distinct()->get();
        $allPerumahan = Perumahan::all();
        // $perumahan = Perumahan::all();
        $perumahan = Perumahan::orderBy('created_at', 'desc')->get();
            // $articles = Article::latest()->filter(request([['category']]))->take(3)->get();
            // $student = Employee::first();
            // $ann = Announcement::first();

        return view('client.page.index', compact([
            'totalVisits',
            'todayVisits',
            'monthVisits',
            'perumahan',
            'kotas',
            'allPerumahan',
        ]));
    }

    public function boot()
    {
        View::composer('client.component.NavigationComponent.ProjectDropdown', function ($view) {
            $kotas = Perumahan::select('kota')->distinct()->get();
            $view->with('kotas', $kotas);
        });

        View::composer('client.layouts.partials.footer', function ($view) {
            $view->with('perumahan', Perumahan::all());
        });
    }




    // public function getPerumahanByCity($kota)
    // {
    //     $perumahans = Perumahan::where('kota', $kota)->get();
    //     return response()->json($perumahans);
    // }


    public function images()
    {
        return $this->hasMany(PerumahanImage::class);
    }

    public function perumahanAll()
    {
        $perumahan = Perumahan::all();
        View::share('perumahanAll', $perumahan);
    }


    // public function project(){
    //     return view('client.page.project');
    // }

    // public function showPerumahan($id){
    //     return view('client.page.project',[
    //         'perumahan' => Perumahan::findorFail($id),
    //     ]);
    // }

    // public function showPerumahan($id)
    // {
    //     $perumahan = Perumahan::with('images')->findOrFail($id); // Eager load images


    //     return view('client.page.project', [
    //         'perumahan' => $perumahan,
    //     ]);
    // }

    public function showPerumahan($id)
    {
        $perumahan = Perumahan::with('images')->findOrFail($id);
        $allPerumahan = Perumahan::all(); // Tambahkan semua data Perumahan

        $embedUrl = $perumahan->video;
        if (str_contains($perumahan->video, 'youtu.be')) {
            $videoId = last(explode('/', parse_url($perumahan->video, PHP_URL_PATH)));
            $embedUrl = "https://www.youtube.com/embed/{$videoId}";
        } elseif (str_contains($perumahan->video, 'watch?v=')) {
            $embedUrl = str_replace('watch?v=', 'embed/', $perumahan->video);
        }

        return view('client.page.project', [
            'perumahan' => $perumahan,
            'embedUrl' => $embedUrl,
            'allPerumahan' => $allPerumahan, // Kirim semua data Perumahan ke view
        ]);
    }


    public function showProject($kota)
    {

        $perumahan = Perumahan::where('kota', $kota)->with('images')->get(); // Ambil perumahan berdasarkan kota
        $allPerumahan = Perumahan::all();
        return view('client.component.project.showProject', [
            'perumahan' => $perumahan, // Kirim data perumahan ke view
            'kota' => $kota,
            'allPerumahan' => $allPerumahan,
        ]);
    }

    public function contact(){
        $allPerumahan = Perumahan::all();
        $kotas = Perumahan::select('kota')->distinct()->get();
        return view('client.page.contact', compact('kotas','allPerumahan'));
    }

    public function about(){
        $allPerumahan = Perumahan::all();
        $kotas = Perumahan::select('kota')->distinct()->get();
        return view('client.page.aboutt', compact('kotas','allPerumahan'));
    }

    public function form($id)
    {
        $allPerumahan = Perumahan::all(); // Ambil semua data Perumahan
        $selectedPerumahan = Perumahan::findOrFail($id); // Data spesifik berdasarkan ID
        $agents = Agent::all(); // Semua data agents

        return view('client.page.form', compact('allPerumahan', 'selectedPerumahan', 'agents'));
    }


    public function storeKonsumen(Request $request, $id)
    {
    $validatedData = $request->validate([
        'nama_konsumen' => 'required',
        'email' => 'nullable|email',
        'no_hp' => 'required',
        'domisili' => 'required',
        'pekerjaan' => 'required',
        'nama_kantor' => 'required',
        'perumahan' => 'required',
        'sumber_informasi' => 'required',
        'agent_id' => 'nullable',
    ]);

        $perumahan = Perumahan::findOrFail($id);

        Konsumen::create($validatedData);

        // Pemberitahuan berhasil
        try {
            Konsumen::create($validatedData);
            return redirect()
                ->route('download.form', ['id' => $perumahan->id])
                ->with('success', 'Data konsumen berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.'])
                ->withInput();
        }
    }


    public function formPenawaran($id)
    {
        $allPerumahan = Perumahan::all();
        $agents = Agent::all();
        $rumah = Rumah::where('perumahan_id', $id)->orderBy('no_kavling', 'asc')->get();

        return view('client.page.formPenawaran', compact('allPerumahan', 'agents', 'rumah'))
             ->with('selectedPerumahan', Perumahan::findOrFail($id));

    }

    public function storePenawaranKonsumen(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'nullable',
            'no_hp' => 'required',
            'domisili' => 'required',
            'pekerjaan' => 'required',
            'nama_kantor' => 'required',
            'sumber_informasi' => 'required',
            'perumahan_id' => 'required',
            'agent_id' => 'nullable',
            'payment' => 'required',
            'income' => 'required',
            'dp' => 'required',
            'rumah_id' => 'required',
        ]);

        try {
            Penawaran::create($validatedData);
            return redirect()
                ->route('dashboard')
                ->with('success', 'Anda telah berhasil mengajukan penawaran.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.'])
                ->withInput();
        }
    }


    public function downloadBrosur($id)
    {
        $brosur = DB::table('perumahan')->where('id', $id)->first();

        if ($brosur) {
            $pathToFile = storage_path("app/public/{$brosur->brosur}");
            return Response::download($pathToFile);
        } else {
            // Tambahkan logika untuk menangani jika brosur tidak ditemukan
            return redirect()->back()->with('error', 'Brosur tidak ditemukan');
        }
    }
    public function downloadPricelist($id)
    {
        $pricelist = DB::table('perumahan')->where('id', $id)->first();

        if ($pricelist) {
            $pathToFile = storage_path("app/public/{$pricelist->pricelist}");
            return Response::download($pathToFile);
        } else {
            // Tambahkan logika untuk menangani jika brosur tidak ditemukan
            return redirect()->back()->with('error', 'Pricelist tidak ditemukan');
        }
    }

    public function download($id)
    {
        $allPerumahan = Perumahan::all();
        return view('client.page.downloadForm', [
            'perumahan' => Perumahan::findOrFail($id),
            'allPerumahan' => $allPerumahan
        ]);
    }

    public function show($page)
    {
        // // Logika untuk menentukan halaman
        // $content = view("pages.$page")->render();
        // return response()->json(['content' => $content]);

        // Validasi halaman agar hanya mengizinkan halaman tertentu
        $validPages = ['learnerProfile', 'curriculum', 'achievement', 'activities', 'download'];
        if (!in_array($page, $validPages)) {
            abort(404); // Halaman tidak ditemukan
        }

        if ($page === 'download') {
            $ebook = Ebook::latest()->get();
            return view('client.component.landing.menuComponent.download', compact('ebook'));
        }

        return view("client.component.landing.menuComponent.$page");
    }
}

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    // Halaman 1: Index / Home (sesuai file index.html Fitness)
    public function index() {
        return view('landing.index');
    }

    // Halaman 2
    public function about() {
        return view('landing.about');
    }

    // Halaman 3
    public function blog() {
        return view('landing.blog');
    }

    // Halaman 4
    public function contact() {
        return view('landing.contact');
    }

    // Halaman 5
    public function course() {
        return view('landing.course');
    }

    // Halaman 6
    public function feature() {
        return view('landing.feature');
    }
}

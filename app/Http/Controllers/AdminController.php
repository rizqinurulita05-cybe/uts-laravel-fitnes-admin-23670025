namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Halaman 1: Index / Dashboard Admin (sesuai file index.html studioadmin)
    public function index() {
        return view('admin.index');
    }

    // Halaman 2
    public function calendar() {
        return view('admin.calendar');
    }

    // Halaman 3
    public function formElements() {
        return view('admin.form_elements');
    }

    // Halaman 4
    public function pageLogin() {
        return view('admin.page_login');
    }

    // Halaman 5
    public function tablePlugins() {
        return view('admin.table_plugins');
    }

    // Halaman 6
    public function uiModalNotification() {
        return view('admin.ui_modal_notification');
    }
}

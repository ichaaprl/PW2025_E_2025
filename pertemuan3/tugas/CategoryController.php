// ...
use App\Models\Category; // Tambahkan ini
// ...

class CategoryController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan semua kategori
        $categories = Category::all();
        return view('categories', compact('categories'));
    }
}
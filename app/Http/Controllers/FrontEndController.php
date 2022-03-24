<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Redirect;
use Sentinel;
use Session;
use App\Product;
use App\ViewProduct;
use App\ViewService;
use App\ProductModule;
use App\Status;
use App\WebContact;
use App\SendMail;
use App\Blog;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class FrontEndController extends Controller
{
    public function __construct()
    {
        $this->compact = ['active'];

        //Catalogs
        // $this->catalog_country_id = DB::table('countries')->pluck('name', 'id');
        // $this->catalog_state_id = DB::table('states')->pluck('name', 'id');
        // $this->catalog_city_id = DB::table('cities')->pluck('name', 'id');
    }

    /*
     * Website
     */
    public function index(){
    	$active = 'index';
    	return view('index', compact($this->compact));
    }

    public function nosotros(){
        $active = 'nosotros';
        return view('nosotros', compact($this->compact));
    }

    public function galeria(){
        $active = 'galeria';
        $images = [
            'maternal' => [
                ['name' => 'maternal1', 'desc' => 'Maternal 1'],
                ['name' => 'maternal2', 'desc' => 'Maternal 2'],
                ['name' => 'maternal3', 'desc' => 'Maternal 3'],
                ['name' => 'maternal4', 'desc' => 'Maternal 4'],
                ['name' => 'maternal5', 'desc' => 'Maternal 5'],
            ],
            'preescolar' => [
                ['name' => 'preescolar1', 'desc' => 'Preescolar 1'],
                ['name' => 'preescolar2', 'desc' => 'Preescolar 2'],
                ['name' => 'preescolar3', 'desc' => 'Preescolar 3'],
                ['name' => 'preescolar4', 'desc' => 'Preescolar 4'],
                ['name' => 'preescolar5', 'desc' => 'Preescolar 5'],
            ],
            'ingles' => [
                ['name' => 'ingles1', 'desc' => 'Ingles 1'],
                ['name' => 'ingles2', 'desc' => 'Ingles 2'],
                ['name' => 'ingles3', 'desc' => 'Ingles 3'],
                ['name' => 'ingles4', 'desc' => 'Ingles 4'],
                ['name' => 'ingles5', 'desc' => 'Ingles 5'],
            ],
            'primaria' => [
                ['name' => 'primaria1', 'desc' => 'Primaria 1'],
                ['name' => 'primaria2', 'desc' => 'Primaria 2'],
                ['name' => 'primaria3', 'desc' => 'Primaria 3'],
                ['name' => 'primaria4', 'desc' => 'Primaria 4'],
                ['name' => 'primaria5', 'desc' => 'Primaria 5'],
            ],
            'secundaria' => [
                ['name' => 'secundaria1', 'desc' => 'Secundaria 1'],
                ['name' => 'secundaria2', 'desc' => 'Secundaria 2'],
                ['name' => 'secundaria3', 'desc' => 'Secundaria 3'],
                ['name' => 'secundaria4', 'desc' => 'Secundaria 4'],
                ['name' => 'secundaria5', 'desc' => 'Secundaria 5'],
            ],
            'prepa' => [
                ['name' => 'prepa1', 'desc' => 'Prepa 1'],
                ['name' => 'prepa2', 'desc' => 'Prepa 2'],
                ['name' => 'prepa3', 'desc' => 'Prepa 3'],
                ['name' => 'prepa4', 'desc' => 'Prepa 4'],
                ['name' => 'prepa5', 'desc' => 'Prepa 5'],
            ]
        ];
        return view('galeria', compact($this->compact, 'images'));
    }

    public function servicios(){
        $active = 'servicios';
        return view('servicios', compact($this->compact));
    }

    public function contacto(){
        $active = 'contacto';
        return view('contacto', compact($this->compact));
    }

    public function postContact(Request $request){
        date_default_timezone_set('Etc/UTC');
        $mail = new PHPMailer;
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $webmaster = "haller.web2019@gmail.com";
        $mail->Username = $webmaster;
        $mail->Password = "Haller2019_1";
        $mail->setFrom($webmaster, 'Contacto WEB');
        $mail->Subject = "Contacto Web Haller";
        $mail->IsHTML(true);
        $mail->CharSet = "UTF-8";
        if($_REQUEST['type'] == 'instituto')
            $tipo = "Instituto Rafael Haller";
        else
            $tipo = "Centro Universitario Haller";
        $body_msg_master = '
            Se han puesto en contacto a través de la web:<br><br>'.
            '<b>Nombre:</b> '.$_REQUEST['name'].'<br>'.
            '<b>Teléfono:</b> '.$_REQUEST['phone'].'<br>'.
            '<b>Correo:</b> '.$_REQUEST['email'].'<br>'.
            '<b>Tipo:</b> '.$tipo.'<br>'.
            '<b>Mensaje:</b> '.$_REQUEST['tarea'].'<br>';
        $mail->msgHTML($body_msg_master);
        $mail->addAddress('enrique.rv0704@gmail.com', "Enrique Rodriguez");
        // $mail->addAddress('inncrediproductions@gmail.com', "Inncredi Productions");
        // $mail->addAddress('haller.vinculacion@gmail.com', "Haller vinculacion");

        $mail->send();
        return [$request->all(), $body_msg_master];
    }

    /*
     * Purchases
     */
    public function search(){
    	$active = 'search';
    	$cart = Session::get('cart');

    	$products = Product::where('status_id', 1);
    	$products = $products->paginate(12);

    	return view('purchases.search', compact($this->compact, 'products'));
    }

    public function detail(Request $request){
    	$active = 'detail';
    	$cart = Session::get('cart');

        $module = ProductModule::find(Product::where('slug', $request->slug)->first()->product_module_id);
        if($module->id == 1){
            $item = ViewProduct::where('product_module_id', $module->name)->where('slug', $request->slug)->first();
        }else{
            $item = ViewService::where('product_module_id', $module->name)->where('slug', $request->slug)->first();
        }

        $supplier = Sentinel::findById(Product::where('slug', $request->slug)->first()->user_id);

    	return view('purchases.detail', compact($this->compact, 'item', 'supplier'));
    }

    public function cart(){
    	$active = 'cart';
    	$cart = Session::get('cart');

        if(count($cart) <= 0){
            return Redirect::back();
        }

    	return view('purchases.cart', compact($this->compact));
    }

    public function confirmPurchase(){
        $active = 'confirm-purchase';
        $cart = Session::get('cart');

        // Catalogs
        $catalog_country_id = $this->catalog_country_id;
        $catalog_state_id = $this->catalog_state_id;
        $catalog_city_id = $this->catalog_city_id;

        return view('purchases.confirm-purchase', compact($this->compact, 'catalog_country_id', 'catalog_state_id', 'catalog_city_id'));
    }

    public function maternal(){
        $active = 'maternal';
        return view('oferta_educativa.maternal', compact($this->compact));
    }

    public function preescolar(){
        $active = 'preescolar';
        return view('oferta_educativa.preescolar', compact($this->compact));
    }

    public function english(){
        $active = 'english';
        return view('oferta_educativa.english', compact($this->compact));
    }

    public function primaria(){
        $active = 'primaria';
        return view('oferta_educativa.primaria', compact($this->compact));
    }

    public function secundaria(){
        $active = 'secundaria';
        return view('oferta_educativa.secundaria', compact($this->compact));
    }

    public function preparatoria(){
        $active = 'preparatoria';
        return view('oferta_educativa.preparatoria', compact($this->compact));
    }

    public function plataforma(){
        $active = 'plataforma';
        return view('servicios.plataforma', compact($this->compact));
    }

    public function idiomas(){
        $active = 'idiomas';
        return view('servicios.idiomas', compact($this->compact));
    }

    public function cadt(){
        $active = 'cadt';
        return view('servicios.cadt', compact($this->compact));
    }

    public function blog(){
        $active = 'blog';
        $last_blog = Blog::where('available', 1)->orderBy('id', 'DESC')->first();
        $blogs = [];
        if(!is_null($last_blog)){
            $blogs = Blog::where('id', '!=', $last_blog->id)->where('available', 1)->orderBy('id', 'DESC')->paginate(6);
        }

        return view('blog.index', compact($this->compact, 'last_blog', 'blogs'));
    }
    public function blog_detail($blog_id){
        $active = 'blog';
        $blog = Blog::find($blog_id);
        return view('blog.detail', compact($this->compact, 'blog'));
    }

    // public function getPurchases(){
    //     $active = 'my-purchases';
    //     $cart = Session::get('cart');

    //     return view('purchases.my-purchases', compact($this->compact));
    // }
}

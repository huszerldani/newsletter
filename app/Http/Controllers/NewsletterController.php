<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public $data;

    public function __construct()
    {
        // Emailben megjelenítendő adatok
        $this->data = [
            'title' => 'Newsletter teszt',
            'name' => 'János Pál pápa',
        ];
    }

    public function send()
    {
        try {
            $emailAddress = env('TEST_EMAIL_ADDRESS');

            Mail::to($emailAddress)->send(new TestEmail($this->data));

            return '<html style="margin: 0; background: #47ac47; color: white; font-size: 14px;" lang="hu"><body style="overflow: hidden; height: 100vh; width: 100vw; display: flex; align-items: center; justify-content: center; font-size: 2rem;">Sikeres küldés</body></html>';
        } catch (\Exception $e) {
            return '<html style="background: #ac4747; color: white;font-size: 14px;" lang="hu"><body style="overflow: hidden; height: 100vh; width: 100vw; display: flex; align-items: center; justify-content: center; font-size: 2rem;">'.$e->getMessage().'</body></html>';
        }

    }

    public function preview() {
        return new TestEmail($this->data);
    }
}

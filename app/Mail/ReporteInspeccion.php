<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Inspection;

class ReporteInspeccion extends Mailable
{
    use Queueable, SerializesModels;

    public $inspections;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inspections)
    {
        $this->inspections = $inspections;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('correo.reporte-inspeccion')
                    ->subject('Reporte de inspecciones'); // Asunto del correo
    }
}

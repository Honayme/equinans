<?php
// app/Livewire/PdfViewer.php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class PdfViewer extends Component
{
    public $pdfUrl;
    public $titre = 'Document PDF';
    public $buttonText = 'Visualiser le PDF';
    public $buttonClass = 'btn btn-primary';
    public $showDownload = true;
    public $downloadText = 'Télécharger';

    public function mount($pdfUrl, $titre = null, $buttonText = null, $buttonClass = null, $showDownload = true, $downloadText = null)
    {
        $this->pdfUrl = $pdfUrl;
        $this->titre = $titre ?? $this->titre;
        $this->buttonText = $buttonText ?? $this->buttonText;
        $this->buttonClass = $buttonClass ?? $this->buttonClass;
        $this->showDownload = $showDownload;
        $this->downloadText = $downloadText ?? $this->downloadText;
    }

    public function render()
    {
        return view('livewire.pdf-viewer');
    }
}

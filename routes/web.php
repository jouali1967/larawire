<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Cnss\CnssCreate;
use App\Livewire\Enfants\EnfantCreate;
use App\Livewire\Personnes\MontantDec;
use App\Livewire\Primes\EditPrime;
use App\Livewire\Primes\ListePrime;
use App\Livewire\Primes\CreatePrime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Personnes\EditPersonne;
use App\Livewire\Sanctions\EditSanction;
use App\Livewire\Sanctions\ListSanction;
use App\Livewire\Personnes\ListePersonne;
use App\Livewire\Salaires\GestionSalaire;
use App\Livewire\Personnes\CreatePersonne;
use App\Livewire\Sanctions\CreateSanction;
use App\Livewire\Salaires\SalaireImpression;
use App\Livewire\Personnes\ListePersonnesPdf;
use App\Livewire\Sanctions\ListeSanctionsPdf;
use App\Http\Controllers\PdfPersonneController;
use App\Http\Controllers\SalaireImpressionPdfController;
use App\Http\Controllers\EtatEmployesPdfController;
use App\Livewire\Personnes\EtatEmployesPdf;

Route::get('/', function () {
  return redirect('/login');
});
Auth::routes();

Route::middleware(['auth'])->group(function () {
  Route::get('/', Dashboard::class)->name('admin');
  //Routes pour les employers
  Route::get('/personnes', ListePersonne::class)->name('personnes.index');
  Route::get('/personnes/create', CreatePersonne::class)->name('personnes.create');
  Route::get('/personnes/{id}/edit', EditPersonne::class)->name('personnes.edit');
  Route::get('/personnes/pdf', ListePersonnesPdf::class)->name('personnes.pdf');
  Route::get('/generate-pdf', [PdfPersonneController::class, 'generate'])->name('generate.pdf');
  Route::get('/declarations/create', MontantDec::class)->name('declarations.create');

  // Routes pour les primes
  Route::get('/primes/create', CreatePrime::class)->name('primes.create');
  Route::get('/primes/{prime}/edit', EditPrime::class)->name('primes.edit');
  Route::get('/primes', ListePrime::class)->name('primes.index');
  //Routes pour sanctions employers
  Route::get('/sanctions/create', CreateSanction::class)->name('sanctions.create');
  Route::get('/sanctions', ListSanction::class)->name('sanctions.index');
  Route::get('/sanctions/{sanction}/edit', EditSanction::class)->name('sanctions.edit');
  Route::get('/personnes/pdf', ListePersonnesPdf::class)->name('personnes.pdf');
  Route::get('/sanctions/pdf', ListeSanctionsPdf::class)->name('sanctions.pdf');
  // Routes pour les salaires
  Route::get('/salaires/gestion', GestionSalaire::class)->name('salaires.gestion');
  Route::get('/salaires/impression', SalaireImpression::class)->name('salaires.impression');
  Route::get('/salaires/impression/pdf', [SalaireImpressionPdfController::class, 'export'])->name('salaires.impression.pdf');
  Route::get('/salaires/impression/pdftest', [SalaireImpressionPdfController::class, 'exporttest'])->name('salaires.generatetest.pdf');
  //cnss
  Route::get('/cnss/create', CnssCreate::class)->name('cnss.create');
  //enfants
  Route::get('/enfants/create', EnfantCreate::class)->name('enfants.create');
});

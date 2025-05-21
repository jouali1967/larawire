<?php

namespace App\Livewire\Cnss;

use App\Models\Cnss;
use Livewire\Component;
use App\Models\Personne;
use Livewire\Attributes\Rule;

class CnssCreate extends Component
{
  #[Rule('required', message: 'La personne est requise')]
  public $personne_id;


  #[Rule('required|date_format:d/m/Y', message: 'La date de inscription est requise')]
  public $date_inscription;

  #[Rule('required|integer', message: 'Le n° CNSS est obligatoire et doit être un nombre entier.')]
  public $num_cnss;
  public $search = '';
  public $personnes = [];
  public $selectedPersonne = null;
  public function updatedSearch()
  {
    // Si la recherche est différente de la personne sélectionnée, réinitialiser la sélection
    if ($this->selectedPersonne && $this->search !== $this->selectedPersonne->nom . ' ' . $this->selectedPersonne->prenom) {
      $this->selectedPersonne = null;
      $this->personne_id = null;
    }

    if (strlen($this->search) >= 2) {
      $this->personnes = Personne::where(function ($query) {
        $query->where('nom', 'like', '%' . $this->search . '%')
          ->orWhere('prenom', 'like', '%' . $this->search . '%');
      })
        ->limit(5)
        ->get();
    } else {
      $this->personnes = [];
    }
  }

  public function selectPersonne($id)
  {
    $personne = Personne::find($id);
    if ($personne) {
      $this->personne_id = $id;
      $this->selectedPersonne = $personne;
      $this->search = $personne->nom . ' ' . $personne->prenom;
      $this->personnes = [];

      $CnssExist = Cnss::where('personne_id', $this->personne_id)->first();

      if ($CnssExist) {
        // Remplir les propriétés avec les données existantes
        $this->num_cnss = $CnssExist->num_cnss;
        $this->date_inscription = $CnssExist->date_inscription;
      }
    }
  }

  public function clearPersonne()
  {
    $this->search = '';
    $this->selectedPersonne = null;
    $this->personne_id = null;
    $this->personnes = [];
    $this->reset();
  }


  public function render()
  {
    return view('livewire.cnss.cnss-create');
  }
  public function save()
  {
    $data = $this->validate();
    $CnssExist = Cnss::where('personne_id', $this->personne_id)->first();
    if ($CnssExist) {
      $CnssExist->update($data);
      session()->flash('success', 'Données CNSS mises à jour avec succès.');
    } else {
      Cnss::create($data);
      session()->flash('success', 'Données CNSS enregistrées avec succès.');
    }
    $this->reset();
  }
}

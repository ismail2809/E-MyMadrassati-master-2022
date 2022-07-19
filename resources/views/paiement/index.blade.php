@extends('backend.master')

@section('title','Les paiements')
@section('content') 
   
<h4 class="h4 mb-3">
 <a href="{{url('/listes_classes')}}" title="Retour">
<i class="align-middle me-2" data-feather="plus-circle"></i>  Nouveau
</a> 
</h4>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header" style="background-color:#207CF3;">
          <h5 class="card-title mb-0" style="color: white;"><strong>Les paiements </strong></h5>
        </div>
        <div class="card-body">

          <table id="example" class="table table-striped" style="width:100%">
                <thead> 
                    <tr>
                      <th style="text-align: center;"><b>ID</b></th> 
                      <th style="text-align: center;"><b>Etudiant</b></th> 
                      <th style="text-align: center;"><b>Type tarif</b></th> 
                      <th style="text-align: center;"><b>Détail</b></th>
                      <th style="text-align: center;"><b>Modifier</b></th>
                    </tr> 
                  </thead> 
                  <tbody> 
                    @foreach($paiements as $paiement)
                    <tr>
                     <td style="text-align: center;">{{ $paiement->id }}</th>                
                     <td style="text-align: center;">{{ $paiement->etudiants->users->prenom  }}&nbsp;{{ $paiement->etudiants->users->prenom  }}</th>                 
                     <td style="text-align: center;">{{ $paiement->type_paiements->titre  }}</th>                     
                     <td style="text-align: center;">
                        <a href="{{url('/paiement/'.$paiement->id.'/détail')}}" title="Détail">
                            <i class="align-middle me-2" data-feather="eye"></i> 
                        </a> 
                     </td> 
                     <td style="text-align: center;">
                        <a href="{{url('/paiement/'.$paiement->id.'/edit')}}" title="Modifier">
                            <i class="align-middle me-2" data-feather="edit"></i> 
                        </a> 
                     </td>                 
                    </tr>       
                    @endforeach       
                </tbody>
            </table>
        </div>
      </div>
    </div>
</div>
  
@endsection
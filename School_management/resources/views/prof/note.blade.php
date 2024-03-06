@extends('prof.header')
@section('contentStudent')
@php
    use App\Models\Prof;
    use App\Models\MessageProf;
    use App\Models\Etudiant;
    use App\Models\Groupe;
    use App\Models\FiliéresProf;
    use App\Models\Filiére;
    $prof = Prof::findOrFail(Auth::user()->id);
    $filieres = FiliéresProf::where('id_prof',Auth::user()->id)->get();


    
    $Liste_grp = array();
    $dico_filiere= array();
    $Liste_etudiant = array();
    $dico_grp= array();
    
    foreach($filieres as $filiere){
        $filiere1 = Filiére::findOrFail($filiere->id);
        $groupes = Groupe::where('Filiére',$filiere1->id)->get();
        foreach ($groupes as $group) {
            $Etudiants=Etudiant::where('Groupe',$group->id_groupe)->get();
            array_push($Liste_grp, $group->Nom);
            foreach ($Etudiants as $Etudiant) {
                array_push($Liste_etudiant , $Etudiant->id_etudiant."/".$Etudiant->Nom);
            }
            $dico_grp[$group->Nom] = $Liste_etudiant;
            $Liste_etudiant=array();
        }
        $dico_filiere[$filiere1->Nom]=$Liste_grp;
        $Liste_grp = array();
    }

@endphp




<style>
    .total{
        width: 1550px;
        margin: auto;
        text-align: center;
    }
</style>


<div class="container total ">
    <center><h1>Notes</h1></center><br><br>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{route('note.store')}}" method="post" class="row">
            @csrf
            <input type="hidden"  name="module" value="{{ $prof->Module }}">
            <div class="col-6">
        
                <label  class=" form-label">  filiere :</label><br>
                <select id="filiere" class="form-select" name="filiere" placeholder="filiere" onchange="change(this.value)">
                    <option></option>
                        <script>
                            var dico = {!! json_encode($dico_filiere) !!};
                            var dico2 = {!! json_encode($dico_grp) !!};
            
            
                            var selectElement = document.getElementById("filiere");
                            
            
                            for (var key in dico) {
                            if (dico.hasOwnProperty(key)) {
                                var option = document.createElement("option");
                                option.value = key;
                                option.text = key;
                                selectElement.append(option);
                            }
                            }
            
                        </script>
                    </select><br>
            </div>
            <div class="col-6">
            
                <label  class=" form-label">  Groupe :</label><br>
                <select id="additionalSelect" name="grp" class="form-select" onchange="change2(this.value)">
        
                    <option></option>
                        <script>
                            function change(value) {
                                var selectElement = document.getElementById("additionalSelect");
                                var liste = dico[value];
                                selectElement.innerHTML = "";
        
                                var emptyOption = document.createElement("option");
                                selectElement.appendChild(emptyOption);
        
                                for (var i = 0; i < liste.length; i++) {
                                    var option = document.createElement("option");
                                    option.value = liste[i];
                                    option.text = liste[i];
                                    selectElement.appendChild(option);
                                }
                                console.log(dico2)
                                }
        
        
                        </script>
                </select>
            </div>
            <div class="col-6 pt-3">
                <label  class=" form-label">  Etudiant :</label><br>
                <select id="additionalSelect1" name="etudiant" class="form-select" >
        
         
                    <option></option>
                    <script>
                        function change2(value) {
                            var selectElement = document.getElementById("additionalSelect1");
                            var liste = dico2[value];
                            selectElement.innerHTML = "";
                    
                            var emptyOption = document.createElement("option");
                            selectElement.appendChild(emptyOption);
                    
                            for (var i = 0; i < liste.length; i++) {
                                var parts = liste[i].split("/"); // Splitting ID and name
                                var option = document.createElement("option");
                                option.value = parts[0]; // ID
                                option.text = parts[1]; // Name
                                selectElement.appendChild(option);
                            }
                        }
                    </script>
                    
                </select>
            </div>
            <div class="col-6 pt-3">
                <label  class=" form-label">  Note :</label><br>
                <input type="text" class="form-control" name="note" >
            </div>
            <br><br>
            <div class="col-12 pt-5">
                <label  class=" form-label">  Title :</label><br>
                <input type="text" class="form-control" name="title" >
            </div>
            <br><br><br><br><br><br>
            <center>
                <button type="submit" class="btn col-4 " style="background-color: #f5a425">Add Note</button>
            </center>
        </form>

    
</div>

@endsection

<?php

namespace App\Http\Controllers\Back;

use App\Responsable;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
use LaravelQRCode\Facades\QRCode;


class ResponsableController extends Controller
{
    public function index()
    {
        $responsables = Responsable::all();

        return view('back.Responsable.index', compact('responsables'));
    }

    public function create()
    {
        return view('back.Responsable.create');
    }

    public function store(Request $request)
    {
        // Enregistrement des données
        $responsable = Responsable::create($request->all());

        // Valide la création de l'association
        if ($responsable->id != null) {
            // Message de succès
            Toastr::success('Responsable bien ajouté(e)', 'Action sur Responsable');

            session()->put('isExist', true);
        }

        // Gestion des conditions de redirection
        if(session()->has('isExist') && session()->get('isExist') == true) {
            session()->forget('isExist'); // Remise a 0 de isExist

            return redirect(session()->get('previous_url'));
        }

        return redirect()->route('back.responsable.create');
    }

    public function show($id)
    {
        $responsable = Responsable::findOrFail($id);

        return view('back.Responsable.show', compact('responsable'));
    }

    public function infos($matricule) {
        // Faire un check dans la BDD
        $responsable = Responsable::where('matricule', $matricule)->first();

        $code_qr = "https://jesusrevient.tv/ministre-infos/$matricule";

        createFolder('QrCode');

        // Texte en codeQr
        $fileCodeQR = public_path("QrCode/codeOr_$matricule.png");
        QRCode::text($code_qr)->setOutfile($fileCodeQR)->png();


        return view('front.responsable.infos', compact('responsable'));
    }

    public function edit($id)
    {
        $responsable = Responsable::findOrFail($id);

        return view('back.Responsable.edit', compact('responsable'));
    }

    public function update(Request $request, $id)
    {
        $responsable = Responsable::findOrFail($id);
        $responsable->update($request->all());

        Toastr::success('Responsable bien mis à jour', 'Action sur Responsable');

        return redirect()->route('back.responsable.index');
    }

    public function delete($id)
    {
        $responsable = Responsable::findOrFail($id);
        $responsable->delete();

        Toastr::success('Responsable bien supprimé(e)', 'Action sur Responsable');

        return redirect()->route('back.responsable.index');
    }

    public function deleteAll()
    {
        foreach (request('deleted_ids') as $id) {
            Responsable::destroy($id);
        }

        Toastr::success('Les Responsables sélectionné(e)s ont été bien supprimé', 'Action sur Responsable');

        return '200';
    }
}

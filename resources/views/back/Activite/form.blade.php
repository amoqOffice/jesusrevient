<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title"> {{ $title }} </h4>
            </div>
            <div class="card-body">
                <form action="{{ !$edit ? route('back.activite.store') : route('back.activite.update', $activite->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $activite->id }}" name="activite_id">
                    <div class="row">
                        <!-- Champ titre -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Titre <span class="text-danger font-weight-bold">*</span> :</label>
                                <input class="form-control form-control-sm" type="text" required name="titre" value="{{ $activite->titre ?? old('titre') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <!-- Champ lieu -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Lieu <span class="text-danger font-weight-bold">*</span> :</label>
                                <input class="form-control form-control-sm" type="text" required name="lieu" value="{{ $activite->lieu ?? old('lieu') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Champ img -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Image :</label>
                                <input required class="form-control form-control-sm" type="file" name="img" value="{{ $activite->img ?? old('img') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <!-- Champ url -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Lien de la video :</label>
                                <input class="form-control form-control-sm" type="text" name="url" value="{{ $activite->url ?? old('url') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Champ description -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Description :</label>
                                <textarea {{ ($show) ? 'disabled' : ''}} name="description" class="form-control" rows="6">{{ $activite->description ?? old('description') }}</textarea>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Champ date_deb -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Date de Debut <span class="text-danger font-weight-bold">*</span> :</label>
                                <input class="form-control form-control-sm" type="text" required name="date_deb" value="{{ $activite->date_deb ?? old('date_deb') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <!-- Champ date_fin -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Date de Fin :</label>
                                <input class="form-control form-control-sm" type="date" name="date_fin" value="{{ $activite->date_fin ?? old('date_fin') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <!-- Champ type activité -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Type associé à l'Activité <span class="text-danger font-weight-bold">*</span> :</label>
                                <select name="type_id" class="form-control form-control-sm" {{ ($show) ? 'disabled' : ''}} title="Sélectionner un Type d'activité">
                                    <option disabled selected value="">Sélectionnez un Type pour l'Activité</option>
                                    @foreach (DB::table('types')->select('*')->get() as $type)
                                        <option value="{{ $type->id }}" {{ isset($activite) && ($activite->type->id == $type->id) ? 'selected' : '' }}>{{ $type->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        {{-- Rubriques --}}
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Rubriques associées à l'Activité (TV) <span class="text-danger font-weight-bold">*</span> :</label>
                                <select name="rubrique_ids[]" class="form-control  form-control-sm selectpicker" multiple title="Sélectionner des Rubriques" data-live-search="false" {{ ($show) ? 'disabled' : ''}}>
                                    @foreach (DB::table('rubriques')->select('*')->get() as $rubrique)
                                        <option value="{{ $rubrique->id }}" {{ isset($activite) && in_array($rubrique->id, $activite->rubriques->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $rubrique->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Eglises --}}
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Eglises associées à l'Activité <span class="text-danger font-weight-bold">*</span> :</label>
                                <select name="eglise_ids[]" class="form-control  form-control-sm selectpicker" multiple title="Sélectionner des Eglises" data-live-search="false" {{ ($show) ? 'disabled' : ''}}>
                                    @foreach (DB::table('eglises')->select('*')->get() as $eglise)
                                        <option value="{{ $eglise->id }}" {{ isset($activite) && in_array($eglise->id, $activite->eglises->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $eglise->nom ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="text-right pt-2">
                        <a href="{{ route('back.activite.index') }}" class="btn btn-sm btn-danger  btn-navs"><i class="fa fa-close"></i> Fermer</a>
                        @if(!$show)
                            <button type="submit" class="btn btn-sm btn-primary">
                                <i class="fa fa-floppy-o"></i> Enregistrer
                            </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script>
        // Url de la page
        currentUrl = window.location.href;

        // Select2 avec ajout de bouton
        // $(document).ready(function() {
        //     $('#selectTypeActivite').select2({
        //         // placeholder: 'Sélectionnez un Type d\'activité',
        //         ajax: {
        //             url: '{{ route('back.types.ajax') }}',
        //             dataType: 'json',
        //             delay: 250,
        //             processResults: function(data) {
        //                 return {
        //                     results: data
        //                 };
        //             },
        //             cache: true
        //         },
        //     }).on('select2:open', () => {
        //         $(".select2-results:not(:has(a))").append('<a href="{{ route('back.type.create') }}/?back='+currentUrl+'"'+' style="padding: 6px; height: 20px; display: inline-table;"><i class="fa fa-plus"><i/>  Créer un nouveau Type</a>');
        //     });
        // })
    </script>
@endsection

@php
    // dd(getBestYouTubeThumbnail('https://www.youtube.com/watch?v=SElhkuDVmVE'));
@endphp

<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title"> {{ $title }} </h4>
            </div>

            <div class="card-body">
                <form action="{{ !$edit ? route('back.activite.store') : route('back.activite.update', $activite->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                                <label> Lieu :</label>
                                <input class="form-control form-control-sm" type="text" name="lieu" value="{{ $activite->lieu ?? old('lieu') }}" {{ ($show) ? 'disabled' : ''}}>
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
                                <label for="">Image <span class="text-danger font-weight-bold">*</span> :</label><br>
                                <div class="avatar avatar-xxl">
                                    <img id="blah" data-lity style="cursor: pointer" class="avatar-img rounded-circle" alt="{{ $activite->nom ?? 'your image' }}" src="{{ isset($activite) ? asset("$activite->img") : generateImage(128, 128) }}"/>
                                </div>
                                <input class="ml-3" name="img" type="file" {{ ($show) ? 'disabled' : ''}} onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <input type="hidden" name="imgLink">
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
                                <div class="input-group mt-2">
                                    <input class="form-control form-control-sm" placeholder="Lien youtube de la vidéo" type="text" name="url" value="{{ $activite->url ?? old('url') }}" {{ ($show) ? 'disabled' : ''}}>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-sm" {{ ($show) ? 'disabled' : ''}} id="btnChercher">Chercher</button>
                                    </div>
                                </div>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                            <div class="form-group mt-3">
                                <label> Ajouter en Evènement ?</label>
                                <select name="isEvent" {{ ($show) ? 'disabled' : ''}} class="form-control form-control-sm">
                                    <option value="false" {{ isset($activite) && ($activite->isEvent == false) ? 'selected' : '' }}>Non</option>
                                    <option value="true" {{ isset($activite) && ($activite->isEvent == true) ? 'selected' : '' }}>Oui</option>
                                </select>
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
                                <label> Description <span class="font-weight-bold">(150 caractères minimum) :</span></label>
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
                                <input class="form-control form-control-sm" type="date" name="date_deb" value="{{ $activite->date_deb ?? date('Y-m-d') ?? old('date_deb') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- <input class="form-control form-control-sm" onchange="formatDate(this)" type="date" required name="date_deb" value="{{ $activite->date_deb ?? date('Y-m-d') ?? old('date_deb') }}" {{ ($show) ? 'disabled' : ''}}> --}}
                            </div>
                        </div>

                        <!-- Champ date_fin -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Date de Fin :</label>
                                <input class="form-control form-control-sm" type="date" name="date_fin" value="{{ $activite->date_fin ?? date('Y-m-d') ?? old('date_fin') }}" {{ ($show) ? 'disabled' : ''}}>
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

                        {{-- Responsables --}}
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Responsables associés à l'Activité <span class="text-danger font-weight-bold">*</span> :</label>
                                <select name="responsable_ids[]" class="form-control  form-control-sm selectpicker" multiple title="Sélectionner les Responsables liés à l'Activité" data-live-search="false" {{ ($show) ? 'disabled' : ''}}>
                                    @foreach (DB::table('responsables')->select('*')->get() as $responsable)
                                        <option value="{{ $responsable->id }}" {{ isset($activite) && in_array($responsable->id, $activite->responsables->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $responsable->nom ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Catégorie --}}
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Catégorie associée à l'Activité <span class="text-danger font-weight-bold">*</span> :</label>
                                <select name="categorie_id" class="form-control form-control-sm" {{ ($show) ? 'disabled' : ''}} title="Sélectionner un Type d'activité">
                                    <option disabled selected value="">Sélectionnez une Catégorie pour l'Activité</option>
                                    @foreach (DB::table('categories')->select('*')->get() as $categorie)
                                        <option value="{{ $categorie->id }}" {{ isset($activite) && !is_null($activite->categorie) && ($activite->categorie->id == $categorie->id) ? 'selected' : '' }}>{{ $categorie->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Tags --}}
                        <div class="col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Tags associé à l'Activité <span class="text-danger font-weight-bold">*</span> :</label>
                                <select name="tag_ids[]" class="form-control  form-control-sm selectpicker" multiple title="Sélectionner les Tags liés à l'Activité" data-live-search="false" {{ ($show) ? 'disabled' : ''}}>
                                    @foreach (DB::table('tags')->select('*')->get() as $tag)
                                        <option value="{{ $tag->id }}" {{ isset($activite) && in_array($tag->id, $activite->tags->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $tag->nom ?? '' }}</option>
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
        // Vérifie si le lien du input url est un lien youtube
        $('#btnChercher').click(function (e) {
            e.preventDefault()
            var userInputUrl = $('input[name="url"]').val(); // valeur du input

            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('youtube.getInformationFromLink') }}",
                data: {url: userInputUrl},
                success: function (response) {
                    $('input[name="titre"]').val(response.titre);
                    $('textarea[name="description"]').val(response.description);
                    $('input[name="date_deb"]').val(response.date);
                    $('input[name="date_fin"]').val(response.date);
                    $('#blah').attr('src', response.image);
                }
            });
        });
    </script>
@endsection

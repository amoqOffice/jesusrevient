<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title"> {{ $title }} </h4>
            </div>
            <div class="card-body">
                <form action="{{ !$edit ? route('back.activite.store') : route('back.activite.update', $activite->id) }}" method="POST">
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

<div class="row">                        <!-- Champ img -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Image :</label>
                                <input class="form-control form-control-sm" type="file" name="img" value="{{ $activite->img ?? old('img') }}" {{ ($show) ? 'disabled' : ''}}>
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
                                <input class="form-control form-control-sm" type="text" name="description" value="{{ $activite->description ?? old('description') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
 </div>

<div class="row">                        <!-- Champ date_deb -->
                        <div class="col-md-6">
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
                        <div class="col-md-6">
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

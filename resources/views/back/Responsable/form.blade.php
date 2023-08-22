<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title"> {{ $title }} </h4>
            </div>
            <div class="card-body">
                <form action="{{ !$edit ? route('back.responsable.store') : route('back.responsable.update', $responsable->id) }}" method="POST">
                    @csrf

                    <div class="row">
                        <!-- Champ nom -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Nom <span class="text-danger font-weight-bold">*</span> :</label>
                                <input class="form-control form-control-sm" type="text" required name="nom" value="{{ $responsable->nom ?? old('nom') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <!-- Champ ministere -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Poste <span class="text-danger font-weight-bold">*</span> :</label>
                                <select class="form-control form-control-sm" name="poste" {{ ($show) ? 'disabled' : ''}}>
                                    <option value="Docteur">Docteur</option>
                                    <option value="{{ utf8_encode('Prophète') }}">Prophète</option>
                                    <option value="Pasteur">Pasteur</option>
                                    <option value="{{ utf8_encode('Evangéliste') }}">Evangéliste</option>
                                    <option value="Docteur">Docteur</option>
                                    <option value="{{ utf8_encode('Apôtre') }}">Apôtre</option>
                                </select>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
 </div>

<div class="row">                        <!-- Champ email -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Email <span class="text-danger font-weight-bold">*</span> :</label>
                                <input class="form-control form-control-sm" type="email" required name="email" value="{{ $responsable->email ?? old('email') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <!-- Champ contact -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Contact <span class="text-danger font-weight-bold">*</span> :</label>
                                <input class="form-control form-control-sm" type="text" required name="contact" value="{{ $responsable->contact ?? old('contact') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
 </div>

<div class="row">
                        <!-- Champ photo -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Photo du Serviteur :</label>
                                <input class="form-control form-control-sm" type="file" name="photo" value="{{ $responsable->photo ?? old('photo') }}" {{ ($show) ? 'disabled' : ''}}>
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
                                <input class="form-control form-control-sm" type="text" name="description" value="{{ $responsable->description ?? old('description') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
 </div>

                    <div class="text-right pt-2">
                        <a href="{{ route('back.responsable.index') }}" class="btn btn-sm btn-danger  btn-navs"><i class="fa fa-close"></i> Fermer</a>
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

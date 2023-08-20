<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title"> {{ $title }} </h4>
            </div>
            <div class="card-body">
                <form action="{{ !$edit ? route('back.article.store') : route('back.article.update', $article->id) }}" method="POST">
                    @csrf
                    
<div class="row">
                        <!-- Champ titre -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Titre <span class="text-danger font-weight-bold">*</span> :</label>
                                <input class="form-control form-control-sm" type="text" required name="titre" value="{{ $article->titre ?? old('titre') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
 </div>

<div class="row">
                        <!-- Champ contenu -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Contenu <span class="text-danger font-weight-bold">*</span> :</label>
                                <input class="form-control form-control-sm" type="text" required name="contenu" value="{{ $article->contenu ?? old('contenu') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
 </div>

<div class="row">
                        <!-- Champ categorie_id -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Categorie de larticle <span class="text-danger font-weight-bold">*</span> :</label>
                                <input class="form-control form-control-sm" type="text" required name="categorie_id" value="{{ $article->categorie_id ?? old('categorie_id') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
 </div>

                    <div class="text-right pt-2">
                        <a href="{{ route('back.article.index') }}" class="btn btn-sm btn-danger  btn-navs"><i class="fa fa-close"></i> Fermer</a>
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

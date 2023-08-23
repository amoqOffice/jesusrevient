<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title"> {{ $title }} </h4>
            </div>
            <div class="card-body">
                <form action="{{ !$edit ? route('back.rubrique.store') : route('back.rubrique.update', $rubrique->id) }}" method="POST">
                    @csrf

                    <div class="row">
                        <!-- Champ nom -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Nom <span class="text-danger font-weight-bold">*</span> :</label>
                                <input class="form-control form-control-sm" type="text" required name="nom" value="{{ $rubrique->nom ?? old('nom') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <!-- Champ Short -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Short <span class="text-danger font-weight-bold">*</span> :</label>
                                <input class="form-control form-control-sm" type="text" required name="short" value="{{ $rubrique->short ?? old('short') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <!-- Champ Icone -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Icône <span class="text-danger font-weight-bold">*</span> :</label>
                                <div class="input-group">
                                    <input class="form-control form-control-sm" type="text" required name="icon" value="{{ $rubrique->icon ?? old('icon') }}" {{ ($show) ? 'disabled' : ''}}>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"><i class="{{ $rubrique->icon ?? old('icon') }}" id="rubriqueIcon"></i></span>
                                    </div>
                                </div>

                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <!-- Champ Couleur -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Couleur <span class="text-danger font-weight-bold">*</span> :</label>
                                <select name="color" value="{{ $rubrique->color ?? old('color') }}" {{ ($show) ? 'disabled' : ''}} class="form-control form-control-sm">
                                    <option {{ ($rubrique->color == 'primary') ? 'selected' : '' }} class="text-primary" value="primary">Primary</option>
                                    <option {{ ($rubrique->color == 'warning') ? 'selected' : '' }} class="text-warning" value="warning">Warning</option>
                                    <option {{ ($rubrique->color == 'success') ? 'selected' : '' }} class="text-success" value="success">Success</option>
                                    <option {{ ($rubrique->color == 'danger') ? 'selected' : '' }} class="text-danger" value="danger">Danger</option>
                                    <option {{ ($rubrique->color == 'default') ? 'selected' : '' }} class="text-default" value="default">Default</option>
                                </select>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <!-- Champ Description -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Description :</label>
                                <textarea {{ ($show) ? 'disabled' : ''}} name="description" class="form-control" rows="6">{{ $rubrique->description ?? old('description') }}</textarea>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                    </div>

                    <div class="text-right pt-2">
                        <a href="{{ route('back.rubrique.index') }}" class="btn btn-sm btn-danger  btn-navs"><i class="fa fa-close"></i> Fermer</a>
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
    $('input[name="icon"]').change(function () {
        var icon = $(this).val();
        $('#rubriqueIcon').addClass(icon);
    });
</script>
@endsection

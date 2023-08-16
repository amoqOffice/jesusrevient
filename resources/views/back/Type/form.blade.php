<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title"> {{ $title }} </h4>
            </div>
            <div class="card-body">
                <form action="{{ !$edit ? route('back.type.store') : route('back.type.update', $type->id) }}" method="POST">
                    @csrf

                    <div class="row">
                        <!-- Champ nom -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Nom <span class="text-danger font-weight-bold">*</span> :</label>
                                <input class="form-control form-control-sm" type="text" required name="nom" value="{{ $type->nom ?? old('nom') }}" {{ ($show) ? 'disabled' : ''}}>
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
                                <textarea name="description" class="form-control" id="" rows="5">{{ $type->description ?? old('description') }} {{ ($show) ? 'disabled' : ''}}</textarea>
                                {{-- <input class="form-control" type="text" required name="description" value="> --}}
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                    </div>

                    <div class="text-right pt-2">
                        <a href="{{ route('back.type.index') }}" class="btn btn-sm btn-danger  btn-navs"><i class="fa fa-close"></i> Fermer</a>
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

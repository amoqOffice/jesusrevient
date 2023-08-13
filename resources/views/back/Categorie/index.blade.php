@extends('back.layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                {{-- Bouton de rafraîchissement --}}
                <a href="{{ route('back.categorie.index') }}" class="btn bg-warning-light" data-toggle="tooltip"
                data-placement="top" title="Rafraîchir"><i class="fa fa-refresh"></i></a>

                {{-- Bouton de suppression multiple --}}
                <button class="btn bg-danger-light btn-delete-all opacity-0" data-plalcement="top" title="Supprimer"><i class="fa fa-trash"></i></button>

                {{-- Bouton Ajout Elément --}}
                <a href="{{ route('back.categorie.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Ajouter un(e) Categorie</a>
            </div>

            <div class="card card-table">
                <div class="card-header">
                    <h4 class="card-title"> Liste des Categories </h4>
                </div>
                <div class="card-body">
                    <div class="">
                        <table id="table" class="table mb-0 table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="margin: 0px 0px 0px 9px;padding: 10px;">
                                                <input style="cursor: pointer" type="checkbox" class="checkbox-parent">
                                            </span>
                                        </div>
                                    </th>
                                    <th>ID</th>
                                    <th class="filter">Nom</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $categorie)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input style="margin-left: 0.5px; cursor: pointer" class="form-check-input checkbox-child" type="checkbox" value="{{ $categorie->id }}">
                                            </div>
                                        </td>
                                        <td data-id="{{ $categorie->id }}">#{{ $loop->index + 1 }}</td>
                                        <td>{{ $categorie->nom }}</td>
                                        <td>
                                            <a href="{{ route('back.categorie.show', $categorie->id) }}"
                                                class="btn bg-success-light btn-sm mr-1" title="Voir">
                                                <span class="text-success"><i class="fa fa-eye"></i> Voir</span>
                                            </a>
                                            <a href="{{ route('back.categorie.edit', $categorie->id) }}"
                                                class="btn bg-warning-light btn-sm mr-1" title="Modifier">
                                                <span class="text-warning"><i class="fa fa-pencil-square-o "></i>
                                                    Modifier</span>
                                            </a>
                                            <a href="{{ route('back.categorie.delete', $categorie->id) }}" class="bg-danger-light btn-sm btn-delete" onclick="return confirm('Voulez-vous vraiment supprimer cette catégorie ?')">
                                                <span class="text-danger"><i class="fa fa-trash"></i> Supprimer</span>
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
    </div>
@endsection

@section('script')
    <script>
        // Affiche le bouton de suppression multiple si plus de 2 éléments sont selectionné
        var counterCheckbox = 0
        $(".checkbox-child").click(function(e) {
            if ($(this).is(":checked")) {
                counterCheckbox++
                $(this).closest('tr').addClass('bg-primary-light')
            } else {
                counterCheckbox--
                $(this).closest('tr').removeClass('bg-primary-light')
            }

            show_hide_delete_all(counterCheckbox)
        });

        // Affiche ou cache btn-delete-all
        function show_hide_delete_all(counterCheckbox) {
            if (counterCheckbox >= 2) {
                $('.btn-delete').addClass('opacity-0');
                $('.btn-delete-all').removeClass('opacity-0');

            } else {
                $('.btn-delete').removeClass('opacity-0');
                $(".btn-delete-all").addClass('opacity-0');
            }
        }

        // Sélectionner tout les checkbox
        var state = false
        $('.checkbox-parent').click(function() {
            state = !state

            if (state) {
                $(this).parent().addClass('bg-primary-light');
                $('.checkbox-child').not(this).prop('checked', this.checked);

                //add primary background to tr checked
                $('.checkbox-child').closest('tr').addClass('bg-primary-light')

                // Reccupère le nombre de checkbox-child checké
                counterCheckbox = $('tbody td .checkbox-child').filter(':checked').length

            } else {
                $(this).parent().removeClass('bg-primary-light');
                $('.checkbox-child').not(this).prop('checked', this.checked);

                //delete primary background to tr unchecked
                $('.checkbox-child').closest('tr').removeClass('bg-primary-light')

                // Reccupère le nombre de checkbox-child non-checké
                counterCheckbox = $('tbody td .checkbox-child').filter(':checked').length
            }

            show_hide_delete_all(counterCheckbox)
        })

        // Affiche les lignes selectionnées si le bouton delete est cliqué
        $('.btn-delete-all').click(function(e) {
            if (confirm("Voulez-vous vraiment supprimer les catégories sélectionnées ?")) {
                // document.getElementById('delete-selected-form').submit();
                var ids = [];

                $("table input[type=checkbox]:checked").each(function() {
                    ids.push($(this).closest("tr").find("td:eq(1)").data('id'));

                    console.log(ids)

                    $('.elements').data('ids', ids);
                })

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "post",
                    url: "{{ route('back.categorie.delete_all') }}",
                    data: {'deleted_ids': ids},
                    success: function (response) {
                        // toastr["success"]("Elements supprimés avec succès")
                        location.reload();
                    }
                });
            }
        });
    </script>
@endsection

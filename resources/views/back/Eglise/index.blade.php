@extends('back.layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                {{-- Bouton de rafraîchissement --}}
                <a href="{{ route('back.eglise.index') }}" class="btn bg-warning-light" data-toggle="tooltip" data-placement="top" title="Rafraîchir"><i class="fa fa-refresh"></i></a>

                {{-- Bouton de suppression multiple --}}
                <button class="btn bg-danger-light btn-delete-all opacity-0" data-plalcement="top" title="Supprimer"><i class="fa fa-trash"></i></button>

                {{-- Bouton Ajout Elément --}}
                <a href="{{ route('back.eglise.create') }}" class="font-weight-bold btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Ajouter un(e) Eglise</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Liste des Eglises </h4>
                </div>
                <div class="card-body">
                    <table id="table_eglise" class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="margin: 0px 0px 0px 9px;padding: 10px;">
                                            <input type="checkbox" style="cursor: pointer" class="checkbox-parent">
                                        </span>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Nom</th>
<th>Pays</th>
<th>Ville</th>
<th>Adresse</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($eglises as $eglise)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input style="margin-left: 0.5px; cursor: pointer" class="form-check-input checkbox-child" type="checkbox" value="{{ $eglise->id }}">
                                        </div>
                                    </td>
                                    <td data-id="{{ $eglise->id }}">#{{ $loop->index + 1 }}</td>
                                    <td>{{ $eglise->nom }}</td>
<td>{{ $eglise->pays }}</td>
<td>{{ $eglise->ville }}</td>
<td>{{ $eglise->adresse }}</td>

                                    <td>
                                        <a href="{{ route('back.eglise.show', $eglise->id) }}" class="btn bg-success-light btn-sm mr-1" title="Voir">
                                            <span class="text-success"><i class="fa fa-eye"></i></span>
                                        </a>
                                        <a href="{{ route('back.eglise.edit', $eglise->id) }}" class="btn bg-warning-light btn-sm mr-1" title="Modifier">
                                            <span class="text-warning"><i class="fa fa-pencil-square-o "></i></span>
                                        </a>
                                        <a href="{{ route('back.eglise.delete', $eglise->id) }}" class="bg-danger-light btn-delete btn-sm" title="Supprimer" onclick="return confirm('Voulez-vous vraiment supprimer ce ou cette eglise ?')">
                                            <span class="text-danger"><i class="fa fa-trash"></i></span>
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
@endsection

@section('script')
    <script>
        // Datatable
        $(document).ready( function () {
            $('#table_eglise').DataTable();
        } );

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
                    url: "{{ route('back.eglise.delete_all') }}",
                    data: {'deleted_ids': ids},
                    success: function (response) {
                        location.reload();
                    }
                });
            }
        });
    </script>
@endsection

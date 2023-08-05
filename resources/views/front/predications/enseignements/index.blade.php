@extends('front/layouts/app', ['title' => 'Enseignements'])

@section('content')
<img src="data:image/png;base64, {{ App\External\Image::generate(100, 70) }}" alt="">
<section class="pt-0 pb-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @widget('breadcrumbSimpleFront')
                <div class="container" -sticky-container>
                    @widget('titleFront')
                    <div class="row pt-1">
                        <!-- Main Post -->
                        <div class="col-lg-9">
                            @widget('contentCardFront', [
                                'enseignements' => $enseignements
                            ])
                        </div>

                        <!-- Sidebar START -->
                        <div class="col-lg-3 mt-5 mt-lg-0">
                            <div>
                                @widget('contentTopicFront')
                                @widget('contentRecentPostFront')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

{{-- Enseignement contenu:
	- Banner (img de fond + texte)
	- Titre (thèmes)
	- Contenues:
		- img
		- Catégorie (etiquette)
		- titre
		- auteur
		- date publication
	- Réseaux sociaux (aside)
	- Liste Thèmes (aside)
	- *Pagination* ou voir plus
	- Enseignements récents --}}

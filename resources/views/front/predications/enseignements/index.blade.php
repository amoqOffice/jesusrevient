@extends('front/layouts/app', ['title' => 'Enseignements'])

@section('content')
<img src="data:image/png;base64, {{ generateImage(100, 70) }}" alt="">
<section class="pt-0 pb-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('front.partials.breadcrumbSimple')
                <div class="container" -sticky-container>
                    @include('front.partials.title')
                    <div class="row pt-1">
                        <!-- Main Post -->
                        <div class="col-lg-9">
                            {{-- {{
                                Widget::contentCardFront([
                                    'enseignements' => $enseignements
                                ])
                            }} --}}
                            {{-- @widget('contentCardFront', [
                                'enseignements' => $enseignements
                            ]) --}}
                        </div>

                        <!-- Sidebar START -->
                        <div class="col-lg-3 mt-5 mt-lg-0">
                            <div>
                                @include('front.partials.ContentTopic')
                                @include('front.partials.ContentRecentPost')
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

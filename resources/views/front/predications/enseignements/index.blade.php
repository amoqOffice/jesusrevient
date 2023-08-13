@php
    use App\Services\Front\Button;
    use App\Services\Front\ContentCard;
    use App\Services\Front\Card;
    use App\Services\Front\SimpleBreadcrumb;
    use App\Services\Front\Title;
    use App\Services\Front\Categorie;
    use App\Services\Front\RecentPostCard;
@endphp

@extends('front/layouts/app', ['title' => 'Enseignements'])

@php
    $breadcrumb = SimpleBreadcrumb::dataFormat([
        'color' => 'danger',
        'title' => 'Enseignements',
        'seperator' => 'breadcrumb-dots',
        'elements' => [
            [
                'text_link' => '#',
                'text_icon' => 'fa fa-home',
                'text' => 'Accueil',
            ], [
                'text_link' => '#',
                'text_icon' => '',
                'text' => 'Enseignements',
            ],
        ],
        'active_text' => 'liste',
    ]);

    $title = Title::dataFormat([
        'icon' => 'fa fa-book',
        'content' => 'Test',
    ]);

    $categorie = Categorie::dataFormat([
        'color' => 'danger',
        'title' => 'Hello',
        'counter' => '20',
    ]);

    $post = RecentPostCard::dataFormat([
        'img' => 'img',
        'title' => 'dfhdx',
        'date' => '02 Juillet 2023',
    ]);
@endphp

@section('content')
<section class="pt-0 pb-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container" -sticky-container>
        <img src="data:image/png;base64, {{ generateImage(100, 100) }}" alt="">
                    {!! RecentPostCard::frontRender($post) !!}

                    {!! Categorie::frontRender($categorie) !!}

                    {!! SimpleBreadcrumb::frontRender($breadcrumb) !!}

                    {!! Title::frontRender($title) !!}

                    {!! ContentCard::frontRender($enseignements) !!}
                    <div class="row pt-1">
                        <!-- Main Post -->
                        <div class="col-lg-9">
                            {{-- @include('front.partials.contentCard', compact('enseignements')) --}}
                        </div>

                        <!-- Sidebar START -->
                        <div class="col-lg-3 mt-5 mt-lg-0">
                            <div>
                                {{-- @include('front.partials.contentTopic') --}}
                                {{-- @include('front.partials.contentRecentPost') --}}
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

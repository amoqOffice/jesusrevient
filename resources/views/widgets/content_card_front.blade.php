<!-- Main Post START -->
<div class="row gy-4">
    @foreach ($config['enseignements'] as $enseignement)
        @widget('cardFront', [
            'titre' => $enseignement->titre,
            'img' => $enseignement->img,
            'url' => $enseignement->url,
            'description' => $enseignement->description,
        ])
    @endforeach
</div>

<!-- Main Post START -->
<div class="row gy-4">
    @dd($enseignements)
    @foreach ($enseignements as $enseignement)
        @include('front.partials.cardFront', compoact('enseignement'))
    @endforeach
</div>

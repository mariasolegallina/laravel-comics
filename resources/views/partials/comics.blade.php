<div id="comics">
    <div class="container">
        <h2>Current Series</h2>

        <!-- <ComicItem v-for="comic in comicsFile":comic="comic"></ComicItem> -->


        <div class="comics-list">
            @foreach ($comics as $comicsItem)
            <div class="comic">
                <img class="comic-cover" src="{{ $comicsItem['thumb'] }}">

                <span class="comic-title">{{ $comicsItem['title'] }}</span>

            </div>

            @endforeach
        </div>

        <div class="btn-container">
            <button class="btn btn-primary">Load more</button>
        </div>
    </div>
</div>
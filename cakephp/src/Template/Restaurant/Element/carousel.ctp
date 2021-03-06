<div class="container-fluid">
    <div id="myCarousel" class="carousel slide row" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <?= $this->Html->image('slider/terrasse.jpg', ['class' => 'first-slide', 'alt' => 'First slide']) ?>
                <div class="">
                    <div class="carousel-caption row pr-5">
                        <h2 class="col-8">Un restaurant au bord de la Garonne.</h2>
                        <p class="col-8 col-xs-12">Restaurant composé d'une grande salle, d'une belle terrasse et d'un espace grill selon les
                            envies.</p>
                        <p class="col-3 text-right"><a class="btn btn-lg" href="/restaurant/galerie" role="button">En savoir
                                plus</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <?= $this->Html->image('slider/slide3.png', ['class' => 'second-slide', 'alt' => 'Second slide']) ?>
                <div class="">
                    <div class="carousel-caption row pr-5">
                        <h2 class="col-8">Un restaurant au bord de la Garonne.</h2>
                        <p class="col-8 col-xs-12">Une cuisine qui s'adapte pour varier les plaisirs.</p>
                        <p class="col-3 text-right"><a class="btn btn-lg" href="/restaurant/carte" role="button">Voir la carte</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

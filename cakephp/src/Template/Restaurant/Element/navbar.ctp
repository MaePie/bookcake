<nav class="navbar navbar-expand-lg" role="navigation">
    <div class="navbar-header ml-3">
        <a class="navbar-brand" href="/"><?= $this->Html->Image('logo.png', ['height' => '94px']) ?></a>
    </div>
    <button id="navbar-toggler" class="navbar-toggler mr-3 custom-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav mr-auto">
            <?php echo ($this->request['action'] == 'index') ? '<li class="active">' : '<li>' ?>
                <?= $this->Html->Link('Accueil', ['controller' => 'restaurant', 'action' => 'index'], ['class' => 'nav-link']) ?>
            </li>
            <?php echo ($this->request['action'] == 'carte') ? '<li class="active">' : '<li>' ?>
                <?= $this->Html->Link('Carte', ['controller' => 'restaurant', 'action' => 'carte'], ['class' => 'nav-link']) ?>
            </li>
            <?php echo ($this->request['action'] == 'galerie') ? '<li class="active">' : '<li>' ?>
                <?= $this->Html->Link('Restaurant', ['controller' => 'restaurant', 'action' => 'galerie'], ['class' => 'nav-link']) ?>
            </li>
            <?php echo ($this->request['action'] == 'contact') ? '<li class="active">' : '<li>' ?>
                <?= $this->Html->Link('Contact', ['controller' => 'restaurant', 'action' => 'contact'], ['class' => 'nav-link']) ?>
            </li>
        </ul>
    </div>
    <div id="navbar-right" class="navbar-right mr-3" style="display: inline;">
        <div class="row">
            <div class="col-12">
                <span class="text"><i class="fa fa-phone"></i> +33 6 40 68 42 81 </span>
            </div>
            <div class="col-12">
                <span class="text"><i class="fas fa-map-marker"></i> Hôtel Gemme, 1 Rue du Bac, 31700 Blagnac</span>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg nav-bot">
    <form method="post" id="reservationForm" action="/rres/add">
        <div class="row">
            <div class="input-group col-6">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                </div>
                <input type="text" name="prospects[nomProspect]" class="form-control" placeholder="Nom" required>
            </div>
            <div class="input-group col-6">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                <input type="email" name="prospects[emailProspect]" class="form-control" placeholder="Mail" required>
            </div>
            <div class="input-group col-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
                <input id="dateRRes" type="text" name="rres[dateRRes]" class="form-control hasDatepicker" value="<?= date('d/m/Y') ?>" required>
            </div>
            <div class="input-group col-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-clock"></i></span>
                </div>
                <input type="time" name="rres[heureRRes]" class="form-control" alt="Heure" step="300" value="20:00" required>
            </div>
            <div class="input-group col-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-users"></i></span>
                </div>
                <input type="number" name="rres[nbPersRRes]" class="form-control" value="2" required>
            </div>
            <div class="input-group col-3">
                <button type="submit" class="btn btn-block">Réserver</button>
            </div>
        </div>
    </form>
</nav>
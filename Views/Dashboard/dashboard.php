<?php headerAdmin($data); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> <?= $data['page_title'] ?></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard"><?= $data['page_title'] ?></a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
                <p>
                    La principal necesidad que satisface nuestra web es la de venta de ropa online
                    y a través de la tienda física, así como también la posibilidad de visualizar toda
                    la ropa disponible en la tienda sin necesidad de moverse de casa (comodidad).
                    Adicional queremos ofrecer la posibilidad a nuestros clientes de expandirse en
                    nuevos mercados, de la forma más eficiente posible con el principal objetivo de
                    potenciar las ventas de la tienda JA Store Online SA
                </p>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php footerAdmin($data); ?>

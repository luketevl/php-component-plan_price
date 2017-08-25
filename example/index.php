<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="../dist/main.bundle.css" />

	<title>Example</title>
</head>
<body>

<section class="container row">
  <div class="col-xs-12">

      <?php 
        $pageBronze = '#';

        $pagePrata = '#';

        $pageOuro = '#';

        $pageDiamante = '#';

      $plans = array(
        
          array(
            'icon_title'            => 'images/icons/icon_pc.png',
            'label_title'           => 'Desktop',
            'icon'                  => 'images/icons/bronze.png',
            'title'                 => 'Bronze',
            'description'           => 'Versão com recursos básicos para gestão de sua empresa',
            'alt'                   => 'Bronze',
            'price'                 => 399,
            'price_promotional'     => 199,
            'qty_installments'      => 10,
            'porcent_discount'      => $constPorcentagemDesconto,
             'actions'               => array(
              array(
                'label'   => 'Test',
                'link'    => '#',
                'class'   => '',
                'target'  => '__blank',
              ),
              array(
                'label'   => 'Buy',
                'link'    => '#',
                'class'   => '',
                'target'  => '__blank',
              ),

            ),
            'feature'               => false,               
            'functions'             => array(
              '1 Usuário',
              'Sistema Desktop',
              '',
              '',
              'Gestão Básica'
            ),
           
          ),

            array(
            'icon_title'            => 'images/icons/icon_pc.png',
            'label_title'           => 'Desktop',
            'icon'                  => 'images/icons/prata.png',
            'title'                 => 'Prata',
            'description'           => 'Versão com recursos medianos para gestão de sua empresa',
            'alt'                   => 'Prata',
            'price'                 => 599,
            'price_promotional'     => 499,
            'qty_installments'      => 10,
            'porcent_discount'      => $constPorcentagemDesconto,
             'actions'               => array(
              array(
                'label'   => 'Test',
                'link'    => '#',
                'class'   => '',
                'target'  => '__blank',
              ),
              array(
                'label'   => 'Buy',
                'link'    => '#',
                'class'   => '',
                'target'  => '__blank',
              ),

            ),
            'feature'               => false,               
            'functions'             => array(
              '99 Usuários em rede',
              'Sistema Desktop',
              '',
              '',
              'Gestão Mediana'
            )
          ),

          array(
            'icon_title'            => 'images/icons/icon_data.png',
            'label_title'           => 'Online',
            'icon'                  => 'images/icons/ouro.png',
            'title'                 => 'Ouro',
            'description'           => 'Versão com recursos altos para gestão de sua empresa',
            'alt'                   => 'Ouro',
            'price'                 => 1999,
            'price_promotional'     => 1599,
            'qty_installments'      => 10,
            'porcent_discount'      => $constPorcentagemDesconto,
             'actions'               => array(
              array(
                'label'   => 'Test',
                'link'    => '#',
                'class'   => '',
                'target'  => '__blank',
              ),
              array(
                'label'   => 'Buy',
                'link'    => '#',
                'class'   => '',
                'target'  => '__blank',
              ),

            ),
            'feature'               => false,               
            'functions'             => array(
              'Usuários Ilimitados',
              'Sistema Online',
              '',
              'Integração com Loja Virtual',
              'Gestão Alta'
            )
          ),


          array(
            'icon_title'            => 'images/icons/icon_datablue.png',
            'label_title'           => 'Online',
            'icon'                  => 'images/icons/diamante.png',
            'title'                 => 'Diamante',
            'description'           => 'Versão com recursos avançados para gestão de sua empresa',
            'alt'                   => 'Diamante',
            'price'                 => 3499,
            'price_promotional'     => 2999,
            'qty_installments'      => 10,
            'porcent_discount'      => $constPorcentagemDesconto,
             'actions'               => array(
              array(
                'label'   => 'Test',
                'link'    => '#',
                'class'   => '',
                'target'  => '__blank',
              ),
              array(
                'label'   => 'Buy',
                'link'    => '#',
                'class'   => '',
                'target'  => '__blank',
              ),

            ),
            'feature'               => TRUE,               
            'functions'             => array(
              'Usuários Ilimitados',
              'Sistema Online',
              'Emissão de Notas Fiscais',
              'Integração com Loja Virtual',
              'Gestão Avançada'
            )
          ),
      );

      foreach ($plans as $plan) {?>
        <div class="col-md-3 col-sm-6 col-xs-12 mVersion__itemContainer">
          <?php include('../plan.php'); ?>
        </div>
      <?php } ?>
  </div>

</section>
</body>
</html>

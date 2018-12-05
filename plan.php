<article class="mPlan">
  <header class="mPlan__header">
    <?php 
    if(!empty($plan['icon_title'])){ ?>
      <img src="<?= $plan['icon_title']?>" alt="<?= $plan['alt']?>">
    <?php 
    }

    if(!empty($plan['label_title'])){ ?>
      <strong class="mPlan__titleHeader  <?= $plan['feature']? 'gColor--primary' : '' ?>">
        <?= $plan['label_title']?>
      </strong>
    <?php } ?>
  </header>

  <div class="mPlan__system <?= $plan['feature']? 'mPlan__system--state mPlan__system--state-primary' : '' ?>">
    <?php 
    if($plan['feature']){ ?>
      <span class="mPlan__stampLabel">Completo</span>
    <?php } ?>
    <div>
      <header class="mPlan__type">
        <h2 class="mPlan__name">
          <?= $plan['title']?>
        </h2>
        <span class="text-center mPlan__description">
          <?= $plan['description']?>
        </span>
        <img src="<?= $plan['icon']?>" alt="<?= $plan['alt']?>">
      </header>
    </div>

    <div class="col-md-12 mPlan__price">
    <?php 
    if($plan['price'] > 0){?>
      <span class="text-center"><s class="mPlan__original gColor--danger">De R$ <?= number_format($plan['price'], 2, ',', '.') ?></s> por</span>

    <?php }?>
      <div class="mPlan__promotion">
        <div class="mPlan__installments">
          <?php if(!$plan['monthly']){ ?>
            <span class="mPlan__span"><?= $plan['qty_installments']?>X</span>

           <?php } ?>
          <span class="mPlan__span">R$</span>
        </div>
        <?php if($plan['monthly']){ ?> 
        <span class="mPlan__monthly">
        <?php } ?>
        <span class="mPlan__pricePromotional">
          <?php if(!$plan['monthly']){ ?>
          <?= number_format(($plan['price_promotional'] / $plan['qty_installments']), 2, ',', '.') ?>
          <?php }
          else{
            echo $plan['price_promotional'];
          } ?>
          </span>
          <?php 
          if($plan['monthly']){ ?>
            <span class="mPlan__span mPlan__pearMonthly">por mês</span>
            </span> 
          <?php } ?>
      </div>
      
      <?php if($plan['porcent_discount'] > 0){ ?>
       <small class="col-md-12 text-center mPlan__phrase">Ou à vista no boleto com <?= $plan['porcent_discount']?>% de desconto</small>
       <?php } ?>
    </div>

    <ul class="col-md-12  mPlan__list">
      <?php foreach ($plan['functions'] as $function) { ?>
        <li class="text-center mPlan__item">
          <?php 
          if(empty($function)){ ?>
            <span class="glyphicon glyphicon-remove gColor--danger" aria-hidden="true"></span>

          <?php }else{
            echo $function;
          } ?>
          </li>
      <?php } ?>
    </ul>

    <footer class="mPlan__footer col-md-12">
      <?php 
      foreach ($plan['actions'] as $action) { ?>
        <a href="<?= $action['url']?>" 
        <?php
        if(isset($action['attrs'])){
          foreach ($action['attrs'] as $attr) {
            echo " ". $attr['name']."=".$attr['value'];
          }
        } ?>
        class="btn mPlan__btn <?= $action['class']?>" target="<?= $action['target']?>"><?= $action['label']?></a>  
     <?php }
      ?>
    </footer>

  </div>
</article>

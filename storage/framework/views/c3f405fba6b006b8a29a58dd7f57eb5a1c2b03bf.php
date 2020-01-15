<?php $__env->startSection('content'); ?>
  <pagina tamanho="10">
    <painel titulo="Dashboard">
      <migalhas v-bind:lista="<?php echo e($listaMigalhas); ?>"></migalhas>

      <div class="row">
        <div class="col-md-4">
          <caixa qtd="80" titulo="Artigos" url="<?php echo e(route('artigos.index')); ?>" cor="orange" icone="ion ion-pie-graph"></caixa>
        </div>
        <div class="col-md-4">
          <caixa qtd="1500" titulo="Usuários" url="#" cor="blue" icone="ion ion-person-stalker"></caixa>
        </div>
        <div class="col-md-4">
          <caixa qtd="3" titulo="Autores" url="#" cor="red" icone="ion ion-person"></caixa>
        </div>
      </div>
    </painel>

  </pagina>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
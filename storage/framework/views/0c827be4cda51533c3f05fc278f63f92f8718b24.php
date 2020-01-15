<?php $__env->startSection('content'); ?>
  <pagina tamanho="8">
    <painel titulo="Quadro de testes">
      <migalhas v-bind:lista="<?php echo e($listaMigalhas); ?>"></migalhas>

      <div class="row">
        <div class="col-md-6">
          <caixa titulo="Testes" url="<?php echo e(route('artigos.index')); ?>" cor="orange" icone="ion ion-pie-graph"></caixa>
        </div>
        </div>
      </div>
    </painel>

  </pagina>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
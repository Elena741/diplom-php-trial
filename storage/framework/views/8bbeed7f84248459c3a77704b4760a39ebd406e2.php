

<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <option  value="<?php echo e(isset($category->id) ? $category->id : ""); ?>"  

    >
    <?php echo isset($delimiter) ? $delimiter : ""; ?><?php echo e(isset($category->title) ? $category->title : ""); ?>

  </option>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Заявки</title>
    </head>
    <body>
        <a href="/">Отзывы</a>
        <a href="create">Оставить отзыв</a>
        <table>
            <tr>
                <th>0. id</th>
                <th>1. Имя</th>
                <th>2. Почта</th>
                <th>3. Товар</th>
                <th>4. Оценка</th>
                <th>5. Отзыв</th>
                <th>6. Время</th>
            </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($el->id); ?></td>
                <td><?php echo e($el->name); ?></td>
                <td><?php echo e($el->email); ?></td>
                <td><?php echo e($el->product); ?></td>
                <td><?php echo e($el->rating); ?></td>
                <td><?php echo e($el->text); ?></td>
                <td><?php echo e($el->created_at); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
    </body>
</html><?php /**PATH C:\OSPanel\domains\feedback\resources\views/welcome.blade.php ENDPATH**/ ?>
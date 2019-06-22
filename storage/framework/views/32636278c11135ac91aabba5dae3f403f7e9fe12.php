<?php $__env->startSection('title'); ?>
<title>Admin</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(URL::asset('user/store')); ?>" name ="form" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="container">
            <input type="text" name="question" placeholder="question" required><br>
            <input type="text" name="ans1" placeholder="ans1" required><br>
            <input type="text" name="ans2" placeholder="ans2" required><br>
            <input type="text" name="ans3" placeholder="ans3" required><br>
            <input type="text" name="ans4" placeholder="ans4" required><br>
            <label>Correct answer : </label><select name="answer" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br><br>
            <input type="text" name="sec" placeholder="seconds" required><br>
            <input type="submit" value="Add" class="btn">
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test\resources\views/admin.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
<title>user</title>
<?php $__env->stopSection(); ?>

<?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->startSection('content'); ?>
        <?php if($questions->count() > 0): ?>
            <fieldset>
                <div class="container">
                        <div id="countdown" class="countdown"><?php echo e($question->sec); ?></div><br><br><hr>
                        <label><h2><?php echo e($question->ques); ?></h2></label><br><hr>
                        <input type="radio" name = "answer" value = "1"><label><h3><?php echo e($question->ans1); ?></h3></label><br>
                        <input type="radio" name = "answer" value = "2"><label><h3><?php echo e($question->ans2); ?></h3></label><br>
                        <input type="radio" name = "answer" value = "3"><label><h3><?php echo e($question->ans3); ?></h3></label><br>
                        <input type="radio" name = "answer" value = "4"><label><h3><?php echo e($question->ans4); ?></h3></label><br>
                        <input type="submit" value="Next" class="btn" onclick="calculateScore()">
                </div>
            </fieldset>
        <?php else: ?>
            <div class = "alert alert-info">
                <strong>Oops </strong>there is no questions.
            </div>
        <?php endif; ?>
    <?php $__env->stopSection(); ?>
    <script>
        var timeleft = <?php echo e($question->sec); ?>;
        var downloadTimer = setInterval(function(){
          document.getElementById("countdown").innerHTML = timeleft;
          timeleft -= 1;
          if(timeleft < 0){
            clearInterval(downloadTimer);
            alert("Time out")
            var nextpage = "<?php echo e($questions->nextPageUrl()); ?>";
            if(nextpage == ''){
                window.location.replace('/test/public');
            }
            else
                window.location.replace(nextpage);
          }
        }, 1000);
        function calculateScore(){
            var val;
            var answer = <?php echo e($question->answer); ?>

            var radios = document.getElementsByName("answer");
            for (var i=0, len=radios.length; i<len; i++) {
                if ( radios[i].checked ) { // radio checked?
                    val = radios[i].value; // if so, hold its value in val
                    break; // and break out of for loop
                }
            }
            if(val == answer)
                alert('right answer');
            else
                alert('wrong answer');
            var nextpage = "<?php echo e($questions->nextPageUrl()); ?>";
            if(nextpage == ''){
                window.location.replace('/test/public');
            }
            else
                window.location.replace(nextpage);
        }
</script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test\resources\views/user.blade.php ENDPATH**/ ?>
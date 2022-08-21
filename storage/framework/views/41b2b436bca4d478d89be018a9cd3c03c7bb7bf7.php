<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        <h3>Daily Report</h3>
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <thead>
                <tr>
                   
                    <th>User Name</th>
                    <th>Quiz Nmae</th>
                    <th>Correct Answer</th>
                    <th>Incorrect Answer</th>
                    <th>Percentage %</th>
                 
                    
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
            
                <tr>
                    <td><?php echo e($result['user_name']); ?></td>
                    <td><?php echo e($result['quiz_name']); ?></td>
                    <td><?php echo e($result['correct']); ?></td>
                    <td><?php echo e($result['in_correct']); ?></td>
                    <td><?php echo e($result['percentage']); ?></td>
             
                    
                    
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <!--end: Datatable -->
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Quiz-app\resources\views/email/daily-report.blade.php ENDPATH**/ ?>
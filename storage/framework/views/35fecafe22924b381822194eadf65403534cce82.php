<html>

<head>

<body>
    <h1>Select a file to upload</h1>
    <form action="<?php echo e(route('excel')); ?>" method="post" enctype="multipart/form-data">
        File Upload: <input type="file" name="doc" />
        <div style="padding-left:7rem ; padding-top:1rem"><input type="submit" name="submit" value="Upload" /></div>
    </form>
</body>
</head>

</html><?php /**PATH C:\Users\LakshitaSuthar\Desktop\upload-content\resources\views/welcome.blade.php ENDPATH**/ ?>
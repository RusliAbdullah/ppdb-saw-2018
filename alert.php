<?php if(!empty($msg)):?>
<div class="alert alert-<?= $msg['panel'];?> text-center">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <p><strong><?= $msg['title'] ?></strong>
        <?= $msg['msg'] ?>
    </p>
    <?php if($msg['tipe']=='dialog'): ?>
    <div class="btn-group">
        <a href="<?= !empty($msg['yes'])?$msg['yes']:'#'; ?>" class="btn btn-sm btn-success">Ya</a>
        <a href="<?= !empty($msg['no'])?$msg['no']:'#'; ?>" class="btn btn-danger btn-sm"  aria-hidden="true">Tidak</a>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>
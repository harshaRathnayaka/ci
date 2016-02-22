<a href="<?php echo site_url("bondform/view_form"); ?>" rel="modal:open" class="fa fa-plus"></a>
<script>
    $(function(){
        $('body').on('submit', 'form', function(e){
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "<?php echo site_url("bondform/save_form"); ?>",
                data: $(this).serialize();
            success: function(response){ $('#form_container').html(response); alert('Succes');},
            error: function(){alert('Error');}
        });
        });
    });
</script>
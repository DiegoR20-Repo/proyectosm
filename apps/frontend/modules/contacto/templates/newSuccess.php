<h1>New Contacto</h1>

<?php include_partial('form', array('form' => $form)) ?>


<script type="text/javascript">
    
jQuery(document).ready(function() {
$("#contacto_departamento").change(function(){
    var id=$(this).val();
        if(id != '')  {
        var r =  $.ajax({
                type: "POST",
                url: '<?php echo url_for('contacto/Program'); ?>'+ '?id=' + id,      
            });
            $("#contacto_municipio").val(r);
        }
    });
});


</script>

$(function() { 
       

       $('#modal-btn-si').on('click', function(){
           excluir(); 
       });		        

       //$( '#abre-li-site' ).addClass( 'menu-open' );
       //$( '#li-site' ).addClass( 'active' );
       //$( '#li-site-banco' ).addClass( 'active' );  

       $('#example1').DataTable({
           'responsive': true,
           'autoWidth': false,
           'order': [],
           'oLanguage': {
               'sProcessing': 'Aguarde enquanto os dados são carregados ...',
               'sLengthMenu': 'Mostrar _MENU_ registros por pagina',
               'sZeroRecords': 'Nenhum registro correspondente ao criterio encontrado',
               'sInfoEmtpy': 'Exibindo 0 a 0 de 0 registros',
               'sInfo': 'Exibindo de _START_ a _END_ de _TOTAL_ registros',
               'sInfoFiltered': '',
               'sSearch': 'Procurar',
               'oPaginate': {
                   'sFirst':    'Primeiro',
                   'sPrevious': 'Anterior',
                   'sNext':     'Próximo',
                   'sLast':     'Último'
               }
           }        
       });

   })


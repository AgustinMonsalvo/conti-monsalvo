<?php

class TaskView {

    public function showAutos($autos) {
        require __DIR__. '/../templates/encabezado.phtml'; 
        require __DIR__ . '/../templates/tablaAutos.phtml';
        require __DIR__ . '/../templates/catalogo.phtml'; 
        require __DIR__ . '/../templates/footer.phtml'; 
    }

    public function showDetalles($detalles) {
        require __DIR__ . '/../templates/encabezado.phtml'; 
        require __DIR__ . '/../templates/detalleAuto.phtml'; 
        require __DIR__. '/../templates/footer.phtml'; 
    }

    public function showCatalogo($catalogo) {
        require __DIR__. '/../templates/encabezado.phtml'; 
        require __DIR__ . '/../templates/tablaCatalogo.phtml'; 
        require __DIR__ . '/../templates/footer.phtml'; 
       
 
       
       
      
    }
}
?>


      
    

    


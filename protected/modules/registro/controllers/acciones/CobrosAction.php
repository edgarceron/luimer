<?php
class CobrosAction extends CAction
{
    //Reemplazar Model por el modelo que corresponda al modulo
    public function run()
    {               
		$criteria = new CDbCriteria;
		$criteria->order = "fecha ASC";
        $cobros = Programacion::model()->findAll($criteria);

        $this->controller->render('cobros',array(
			"cobros" => $cobros,
        ));
    }
}
?>


<?
    include_once("clasemes.php");
    $uno = new mes();

    switch($_POST["action"]){ 
        case "formregis":
            $uno->formregis();
        break;
        case "consultarempleado":
            $emp=$_POST["emp"];
            $uno->consultarempleado($emp);
        break;
        case "insertarregistro":
            $tab=$_POST["tabla"];
            
            $camvolor=$_POST["valores"];
            $uno->insertarasignacion($tab,$camvolor);
        break;
        case "consultar":
            $uno->consultar_mes();    
        break;
        case "modificar":
            $uno->modifica_mes();
        break;
        case "formmodi":
            $id= $_POST["idcap"];
            $uno->formmodi($id);
        break;
        case "actualizar":
            $tac=$_POST["tac"];
            $arreglo=$_POST["valores"];
            $ids=$_POST["id"];
            $uno->actualiza($tac,$arreglo,$ids);
        break;
        case "verificarEmpleado":
            $uno->verificaEmpleado($_POST["noEmpleado"],$_POST["mes"]);
        break;
    }
?>

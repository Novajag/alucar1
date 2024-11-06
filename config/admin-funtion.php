<?php
if (isset($_POST['id'])) { 
    $id = $_POST['id'];

    switch ($id) {
        case 1:
            echo "
            <div class='col-xs-12 col-md-12 m-3 p-4 contain-info' style='border-radius:10px;'>
                <h4>Bem-vindo administrador :) <img src='http://localhost/dashboard/site/animation/egn.gif' alt='Icono animado' style='width: 50px; height: auto;'></h4>
                <p>neste painel você terá funções para poder gerenciar um site de forma fácil e intuitiva.</p>
                <h4 class='m-4'>Registro  <img src='http://localhost/dashboard/site/animation/alt.gif' alt='Icono animado' style='width: 50px; height: auto;'></h4>
                <div class='tabla-c col-12'>
                    <table class='table table-dark table-hover'>
                        <tr>
                            <td class='table-dark'>Id</td>
                            <td class='table-dark'>nome</td>
                            <td class='table-dark'>status</td>
                            <td class='table-dark'>Id-elemento</td>
                            <td class='table-dark'>data</td>
                            <td class='table-dark'>icone</td>
                        </tr>";
                        $con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion'); 
                        $sql = "SELECT idalt,nome,estatu,Idelemento,datas FROM registroalt"; 
                        $result1 = $con->query($sql);
                        if ($result1->num_rows > 0) {
                            $result1->data_seek(0);
                            while ($row = $result1->fetch_assoc()) {
                                echo "
                                <tr>
                                    <td class='table table-secondary text-t'> " . $row['idalt'] . "</td>
                                    <td class='table table-secondary text-t'>" . $row['nome'] . "</td>
                                    <td class='table table-secondary text-t'>" . $row['estatu'] . "</td>
                                    <td class='table table-secondary text-t'>" . $row['Idelemento'] . "</td>
                                    <td class='table table-secondary text-t style='with:300px;''>" . $row['datas'] . "</td>
                                    <td class='table table-secondary'>
                                        <form action='http://localhost/dashboard/site/config/ad-delet.php' method='post'>
                                            <input type='hidden' name='delet' value='" . $row['idalt'] . "'>
                                            <button class='buton-t' type='submit'>
                                                <span class='material-symbols-outlined'>delete</span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>";
                            }
                        } else {
                            echo "
                            <tr>
                                <td colspan='5' class='table-dark'>0 resultados</td>
                            </tr>";
                        }
    
            echo "
                    </table>
                </div>
            </div>";
            break;
    
            case 2:
            
                echo '
                    <div class="col-md-4 m-4">
                        <h4 class="m-4">Cadastrar Usuario</h4>
                        <form action="http://localhost/dashboard/site/config/conection.php" class="row" method="post">
                            <input class="form-control col-md-12 me-2 m-2" type="text" name="nome-c2" placeholder="Nome" aria-label="Search">
                            <input class="form-control col-md-12 me-2 m-2" type="text" name="cpf-c2" placeholder="CPF" aria-label="Search">
                            <input class="form-control col-md-12 me-2 m-2" type="text" name="senha-c2" placeholder="Senha" aria-label="Search">
                            <input type="hidden" name="formulario" value="admin-usuario">
                            <button class="col-md-12 m-2 btn btn-dark" type="submit">Cadastrar</button>
                        </form>
                    </div>
                    <div class="col-md-6 m-4" style="height: 80%;">
                        <h4 class="m-4">Usuarios</h4>
                        <div class="tabla-c">
                            <table class="table table-dark table-hover">
                                <tr>
                                    <td class="table-dark">ID</td>
                                    <td class="table-dark">Nome</td>
                                    <td class="table-dark">Senha</td>
                                    <td class="table-dark">ID-producto</td>
                                    <td class="table-dark">Excluir</td>
                                </tr>';
                                $con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion'); 
                                $sql = "SELECT id, nome, senha, produto FROM j"; // Reemplaza 'vehiculos' por el nombre de tu tabla
                                $result2 = $con->query($sql);
                                if ($result2->num_rows > 0) {
                                    while ($row = $result2->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td class='table-secondary text-t'>" . $row["id"] . "</td>";
                                        echo "<td class='table-secondary text-t'>" . $row["nome"] . "</td>";
                                        echo "<td class='table-secondary text-t'>" . $row["senha"] . "</td>";
                                        echo "<td class='table-secondary text-t'>" . $row["produto"] . "</td>";
                                        echo "<td class='table-secondary'>
                                                <form action='http://localhost/dashboard/site/config/ad-us-delet.php' method='post'>
                                                    <input type='hidden' name='delet-nome' value='" . $row["nome"] . "'>
                                                    <input type='hidden' name='delet-status' value='Excluido'>
                                                    <input type='hidden' name='delet-id' value='" . $row["id"] . "'>
                                                    <input type='hidden' name='delet-data' value='" . date('Y-m-d H:i:s') . "'>                                               
                                                    <button class='buton-t' type='submit'>
                                                        <span class='material-symbols-outlined'>delete</span>
                                                    </button>
                                                </form>
                                              </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5' class='table-dark'>0 resultados</td></tr>";
                                }
    
                echo '
                            </table>
                        </div>
                    </div>';
                break;
    
        case 3:
            
            echo '
                <div class="col-md-4 m-4">
                    <h4 class="m-4">Cadastrar veiculos</h4>
                    <form action="http://localhost/dashboard/site/config/control.php" class="row" method="post">
                        <input class="form-control col-md-12 me-2 m-2" type="text" name="nome" placeholder="nome" aria-label="Search">
                        <input class="form-control col-md-12 me-2 m-2" type="text" name="marca" placeholder="marca" aria-label="Search">
                        <input class="form-control col-md-12 me-2 m-2" type="text" name="URL-imagen-1" placeholder="URL imagen 1" aria-label="Search">
                        <input class="form-control col-md-12 me-2 m-2" type="text" name="URL-imagen-2" placeholder="URL imagen 2" aria-label="Search">
                        <input class="form-control col-md-12 me-2 m-2" type="text" name="URL-imagen-3" placeholder="URL imagen 3" aria-label="Search">
                        <input class="form-control col-md-12 me-2 m-2" type="text" name="valor" placeholder="valor" aria-label="Search">
                        <button class="col-md-12 m-2 btn btn-dark" type="submit">Cadastrar</button>
                    </form>
                </div>
                <div class="col-md-6 m-4" style="height: 80%;">
                    <h4 class="m-4">Veiculos</h4>
                    <div class="tabla-c">
                        <table class="table table-dark table-hover">
                            <tr>
                                <td class="table-dark">*</td>
                                <td class="table-dark">Nome</td>
                                <td class="table-dark">Marca</td>
                                <td class="table-dark">Unidades D.</td>
                                <td class="table-dark">Excluir</td>
                            </tr>';
                            $con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion'); 
	                        $sql = "SELECT carroId, nomeCarros, marca, marca FROM carros"; // Reemplaza 'vehiculos' por el nombre de tu tabla
	                        $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td class='table-secondary text-t'>" . $row["carroId"] . "</td>";
                                    echo "<td class='table-secondary text-t'>" . $row["nomeCarros"] . "</td>";
                                    echo "<td class='table-secondary text-t'>" . $row["marca"] . "</td>";
                                    echo "<td class='table-secondary text-t'>no definido</td>";
                                    echo "<td class='table-secondary'>
                                            <form action='http://localhost/dashboard/site/config/ad-delet.php' method='post'>
                                                <input type='hidden' name='delet' value='" . $row["carroId"] . "'>
                                                <button class='buton-t' type='submit'>
                                                    <span class='material-symbols-outlined'>delete</span>
                                                </button>
                                            </form>
                                          </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5' class='table-dark'>0 resultados</td></tr>";
                            }

            echo '
                        </table>
                    </div>
                </div>';
            break;


        case 4:
            echo '
            <div class="col-md-10 m-4" style="max-height: 110%;">
                <h4 class="m-4">Agendas</h4>
                <div class="tabla-c">
                    <table class="table table-dark table-hover">
                        <tr>
                            <td class="table-dark">Id-usuario</td>
                            <td class="table-dark">Nome-Usuario</td>
                            <td class="table-dark">Id-carro</td>
                            <td class="table-dark">dias</td>
                            <td class="table-dark">Excluir</td>
                        </tr>';
                        $con=mysqli_connect ("Localhost","root","","usuario") or die ('Error en la conexion'); 
                        $sql = "SELECT idusuario, nomeusuario, idcarro, dia FROM agendas"; // Reemplaza 'vehiculos' por el nombre de tu tabla
                        $result = $con->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td class='table-secondary text-t'>" . $row["idusuario"] . "</td>";
                                echo "<td class='table-secondary text-t'>" . $row["nomeusuario"] . "</td>";
                                echo "<td class='table-secondary text-t'>" . $row["idcarro"] . "</td>";
                                echo "<td class='table-secondary text-t'>" . $row["dia"] . "</td>";
                                echo "<td class='table-secondary'>
                                        <form action='http://localhost/dashboard/site/config/ad-delet.php' method='post'>
                                            <input type='hidden' name='delet' value='" . $row["idusuario"] . "'>
                                            <button class='buton-t' type='submit'>
                                                <span class='material-symbols-outlined'>delete</span>
                                            </button>
                                        </form>
                                      </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5' class='table-dark'>0 resultados</td></tr>";
                        }

        echo '
                    </table>
                </div>
            </div>';
        break;
    }
}
?>
